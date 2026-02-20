<html>
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


<style>
         .header{
		          background-color: #c58fa2;
		        }
		.container{
		           margin:30px;
				   padding:20px;
				   
		          }
		
		  
			 
		   .nav img{width:80px;
		            height:80px;
					margin-right:8px;
					
				   }
		    .nav{
			       margin-top: 10px;
				   display: flex;
				   flex-basis: 50%;
			    }
		   .nav{
         padding-left: 200px;
       }
			.small{
			 font-size: 30px;
			 display:flex;
			 flex-wrap:wrap;
			 padding: 20px;
			 margin-right: 10px;}
		
		    .dropbtn {
  background-color: #0000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
/* drop down*/
.dropdown {
  position: relative;
  display: inline-block;
  flex-direction: column;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  font-size: 20px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #e2abc0;}
		
</style>
</head>
<body>
       <div class="header">
	   <div class="container">
	   <div class="nav">
	   <img src="logo.jfif" >
	   <div class="nave">
	   <div class="dropdown">
  <button class="dropbtn">Product</button>
  <div class="dropdown-content">
    <a href="addpro.php">Create</a>
    <a href="proview.php">Modify </a>
    <a href="">Delete</a>
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Categories</button>
  <div class="dropdown-content">
    <a href="catg.php">create</a>
    <a href="catg.php">modify</a>
    <a href="catg.php">delete</a>
    <a href="catg.php">view</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Sub-Categories</button>
  <div class="dropdown-content">
    <a href="subcategory.php">create</a>
    <a href="viewsubcat.php">modify</a>
    <a href="">delete</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Type</button>
  <div class="dropdown-content">
    <a href="type.php">create</a>
    <a href="viewty.php">modify</a>
    <a href="viewty.php">delete</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Slider</button>
  <div class="dropdown-content">
    <a href="slider.php">main page</a>
    <a href="IG.php">Instagramer</a>
    
  </div>
</div>
 <div class="dropdown">
  <button class="dropbtn">Sales</button>
	   
	   
	   </div>
	   </div>
	   </div>
	   </div></div>
     <div class="content">

     </div>

      <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
        <?php
                          include('db.php');
                          $r=mysqli_query($con,"select * from slider ");
                          while($row=mysqli_fetch_array($r)){
                          
                        ?>
            <li class="text-center">
            <img class="img-fluid" src="admin/upload/<?php echo $row[1]; ?>"  style="height:300px ; width:300px"   alt="Image" />
                       
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Feed your<br> Wardrobe</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php } ?> 
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

</body>
</html>