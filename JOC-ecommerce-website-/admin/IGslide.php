<?php
  move_uploaded_file($_FILES["IG"]["tmp_name"],
  "upload/".$_FILES["IG"]["name"]);
  $photo=$_FILES["IG"]["name"];
   
   $con=mysqli_connect("localhost","root","","project");

   $r=mysqli_query($con,"insert into IG(photo) 
                    values('$photo')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);
   
?>
 