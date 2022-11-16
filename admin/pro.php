<?php
   $cat=$_POST["type"];
   $x=$_POST["category"];
   $y=$_POST["subcatg"];
   $name=$_POST["nm"];
   $price=$_POST["pri"];
   $d=$_POST["d"];
   $chkbox=$_POST["chk"];
   $dis=$_POST["discount"];
   $size=$_POST["chk1"];
   $Q=$_POST["quantity"];
   
  

   
   //photo
   move_uploaded_file($_FILES["p"]["tmp_name"],
    "upload/".$_FILES["p"]["name"]);
	$photo=$_FILES["p"]["name"];

   $con=mysqli_connect("localhost","root","","project");
   if(isset($_POST['submit']))
{
	$c= implode(",",$chkbox);
    $s= implode(",",$size);
   $r=mysqli_query($con,"insert into product(category,subcatg,type,product_name,price,description,color,discount,photo,size,Q) 
                    values('$x','$y','$cat','$name','$price','$d','$c','$dis','$photo','$s','$Q')");
   if($r)
    echo"<br/>Insert Successfully";
   else
    echo mysqli_error($con);
}
   
?>