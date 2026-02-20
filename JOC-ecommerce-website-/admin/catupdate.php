<?php
 $con=mysqli_connect("localhost","root","","project");
  $id=$_REQUEST["a"];
  $r=mysqli_query($con,"select * from category where no='$id'");
  $row=mysqli_fetch_row($r);

?>
<form action='' method='post'  enctype="multipart/form-data">
   <table align='center' cellspacing=0 cellpadding=10 border='1'>
   <tr>
        <td colspan='2'>
		  <input type="hidden" value="<?php echo $row[0]; ?>" name="id">
		</td>
   </tr>
   <tr><td>Category name</td>
<td><input type="text" name="catg" value="<?php echo $row[1]; ?>"></td>
</tr>
<tr >
<td colspan='2' align='center'><input type="submit" value='modify' name="up"></td>
</tr>
	</table>

 
</form>
<?php
        if(isset($_REQUEST["up"]))
		{
            $cat=$_POST["catg"];
	     $r = mysqli_query($con,"update category set categoryname='$cat' where no='$id'");
		 if($r)
			 header("location:viewcatg.php");
				
		}
		?>
