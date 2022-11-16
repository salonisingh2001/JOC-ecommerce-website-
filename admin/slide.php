<?php
  move_uploaded_file($_FILES["p"]["tmp_name"],
  "upload/".$_FILES["p"]["name"]);
  $photo=$_FILES["p"]["name"];
   
   $con=mysqli_connect("localhost","root","","project");

   $r=mysqli_query($con,"insert into slider(photo) 
                    value('$photo')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);
   
?>
 