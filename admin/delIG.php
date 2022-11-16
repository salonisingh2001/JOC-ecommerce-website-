<?php
 $con=mysqli_connect("localhost","root","","project");
 
 $id=$_REQUEST["b"];
 
 $r=mysqli_query($con,"delete from IG where id='$id'");
 
 if($r)
	 header("location:IG.php");
 ?>