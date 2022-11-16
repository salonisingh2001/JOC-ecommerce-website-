<?php
   $cat=$_POST["sub"];
   $x=$_POST["category"];
   $photo=$_POST["p"];
   $con=mysqli_connect("localhost","root","","project");
   $r=mysqli_query($con,"insert into subcatg(category,subname,photo) 
                    values('$x','$cat','$photo')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);
   
?>
 