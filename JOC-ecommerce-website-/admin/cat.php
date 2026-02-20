<?php
   $cat=$_POST["catg"];
   //echo "Category Name = ",$cat;
   
   $con=mysqli_connect("localhost","root","","project");
   $r=mysqli_query($con,"insert into category(categoryname) 
                    values('$cat')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);
   
?>
 