<?php
   $name=$_POST["name"];
   
   $email=$_POST["email"];
   
	
	$sub=$_POST["sub"];
   
   $msg=$_POST["msg"];

   $con=mysqli_connect("localhost","root","","project");
   $r=mysqli_query($con,"insert into feedback(name,email,subject,message) 
                    values('$name','$email','$sub','$msg')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);
   
   
   
   
   
   
?>