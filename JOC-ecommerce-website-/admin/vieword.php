<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Just_One_Click</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo.jfif" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   
    <p> 
    <a class="btn hvr-hover"  href="viecart.php?a=<?php $useridd ?>&b=<?php echo no_order ?>"></a>
                       <?php 
                                
                                if(isset($_SESSION["useridd"])) { ?>
                                <a  href='vieword.php' class="btn"
                                 name="My_Cart">Orders</a>

                                <?php }  ?>
                               </p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
           </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    <!-- Start Cart  -->
<div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                    <?php
include('db.php');
$uid=$_SESSION["useridd"];
$r=mysqli_query($con,"select * from addcart where userid='$uid'");?>
                        <table class="table">
                            <thead>
                                
                                <table border='1' cellspacing=0 cellpadding=10 align='center'>
<tr><td>id</td>
        <td>Add category</td>
	   <td>Add sub-category</td>
	   <td>Type</td>
	   <td>Product name</td>
	   <td>Price</td>
	   <td>Description</td>
	   
	   <td>Quantity</td>
      
        
	   <td>Photo</td>
    
      <td>Delete</td>
       
       </tr> 
<?php $count=1;?>
                            </thead>
                            <tbody>
                           <?php
                           $sum=0;
                           while($rows=mysqli_fetch_array($r))
{

    $rr=mysqli_query($con,"select * from product where id='$rows[2]'");
    if($row=mysqli_fetch_array($rr))
    {   
        $sum=$sum+$row[5];
        echo"<tr><td>$count</td>";
        $count++;
        echo"<td>$row[1]</td>";
        echo"<td>$row[2]</td>";
        echo"<td>$row[3]</td>";
        echo"<td>$row[4]</td>";
        echo"<td>$row[5]</td>";
       
        echo"<td>$row[6]</td>";
        echo"<td>$row[11]</td>";
        echo"<td><image src='admin/upload/$row[9]' height=80 width=80></td>
        <td><a href='delcart.php?a=$rows[0]'>Delete</a></td>
        </tr>";	      
    }


}
?>

<script>
    function tol(){
              var price= document.m.price.value;
              var Quantity= document.m.qu.value;
              var Discount= document.m.x.value;
              var Amount= price*Quantity; 
              var Grand_total=Amount-discount;            
             document.m.am.value=Amount;
             document.m.y.value=Grand_total;
   
    }
</script>
<form name="m">
    <table>
           <tr>           
        <td>Total</td>
            <td><input type="text"  onfocus="tol()" value="<?php echo $sum; ?>" name="am"></td>
        </tr>
        <tr>
            <td>Discount</td>
            <td><input type="text" value="150" name="x"></td>

        </tr>
        <tr>
            <td>Grand_total</td>
            <td><input type="text" name="y" onfocus="tol()"  value="<?php echo $dis; ?>"></td>
        </tr>
        <tr>
            </table>
</form>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Place_Order" type="submit">
                    </div>
                </div>
            </div>

               
        </div>
    </div>
    <!-- End Cart -->


   </body>

</html>