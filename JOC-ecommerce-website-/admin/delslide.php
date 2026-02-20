<?php
 $con=mysqli_connect("localhost","root","","project");
 
 $id=$_REQUEST["b"];
 
 $r=mysqli_query($con,"delete from slider where id='$id'");
 
 if($r)
	 header("location:slider.php");
 ?>