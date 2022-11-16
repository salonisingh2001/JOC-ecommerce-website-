<?php
 $con=mysqli_connect("localhost","root","","project");
 
 $id=$_REQUEST["b"];
 
 $r=mysqli_query($con,"delete from category where categoryname='$id'");
 
 if($r)
	 header("location:catg.php");
 ?>