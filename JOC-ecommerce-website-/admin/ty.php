<?php
   $cat=$_POST["ty"];
   $x=$_POST["category"];
   $y=$_POST["subcatg"];
   
   $con=mysqli_connect("localhost","root","","project");
   $r=mysqli_query($con,"insert into type(category,subcatg,type) 
                    values('$x','$y','$cat')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);
   
?>
 