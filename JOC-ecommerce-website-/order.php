
<?php include('db.php'); ?>

    <?php 
        //CHeck whether food id is set or not
        if(isset($_GET['id']))
        {
            //Get the Food id and details of the selected food
            $id = $_GET['id'];

            //Get the DEtails of the SElected Food
            $sql = "SELECT * FROM product WHERE id=$id";
            //Execute the Query
            $r = mysqli_query($conn, $sql);
            //Count the rows
            $count = mysqli_num_rows($r);
            //CHeck whether the data is available or not
            if($count==1)
            {
                //WE Have DAta
                //GEt the Data from Database
                $row = mysqli_fetch_assoc($r);

                $catg = $row['category'];
                $price = $row['price'];
                $photo = $row['photo'];
            }
            else
            {
                //Food not Availabe
                //REdirect to Home Page
                header('location:');
            }
        }
        else
        {
            //Redirect to homepage
            header('location:');
        }
    ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Product</legend>

                    <div class="food-menu-img">
                        <?php 
                        
                            //CHeck whether the image is available or not
                            if($photo =="")
                            {
                                //Image not Availabe
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                                //Image is Available
                                ?>
                                <img src="admin/upload/<?php echo $row[9]; ?>" alt="C" class="img-responsive img-curve">
                                <?php
                            }
                        
                        ?>
                        
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price">$<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name"  class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact"  class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php 

                                if(isset($_POST['submit']))
                {
                    

                    $product_name = $_POST['product_name'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty;  

                    $order_date = date("Y-m-d h:i:sa"); 

                    $status = "Ordered";  
                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];


                    $sql2 = "INSERT INTO table_order SET 
                     customer_name = '$customer_name',
                    customer_contact = '$customer_contact',
                     email = '$email',
                    Customer_address = '$Address',                   
                    Pname='$product_name',
                    Price='$price',
                    Qty='$Quantity',
                    $r2 = mysqli_query($conn, $sql2);

                    if($r2==true)
                    {
                        $_SESSION['order'] = "<div class='success text-center'> Ordered Successfully.</div>";
                        header('location:'.SITEURL);
                    }
                    else
                    {
                        $_SESSION['order'] = "<div class='error text-center'>Failed to Order.</div>";
                        header('location:'.SITEURL);
                    }

                }
            
            ?>

        </div>
    </section>
  
//     <?php include('db.php'); ?>
	
    
//     <section class="food-search text-center">

// <div class="container">

// <form action="<?php echo SITEURL; ?>food-search.php" method="POST">

// <input type="search" name="search" placeholder="Search for " required> 
// <input type="submit" name="submit" value="Search" class="btn btn-primary">

// </form>

// </div>

// </section>