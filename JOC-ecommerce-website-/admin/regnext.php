<?php
   $name=$_POST["name"];
   
   $email=$_POST["email"];
  
	
	$password=$_POST["password"];
    
   
   $gender=$_POST["gender"];

   $contact=$_POST["contact"];
   
   
   
   
   $con=mysqli_connect("localhost","root","","project");
   $r=mysqli_query($con,"insert into registration(name,email,password,gender,contact) 
                    values('$name','$email','$password','$gender','$contact')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);	
?>