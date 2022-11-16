<?php
 $con=mysqli_connect("localhost","root","","project");
  $id=$_REQUEST["a"];
  $r=mysqli_query($con,"select * from subcatg where id='$id'");
  $rows=mysqli_fetch_row($r);

?>
<form action='' method='post'  enctype="multipart/form-data">
   <table align='center' cellspacing=0 cellpadding=10 border='1'>
   <tr>
        <td colspan='2'>
		  <input type="hidden" value="<?php echo $row[0]; ?>" name="id">
		</td>
   </tr>
   <tr><td>Select Your Category</td>
<td><select name='category' value="<?php echo $row[1]; ?>">
            <?php
			  $con=mysqli_connect("localhost","root","","project");
 
				$r=mysqli_query($con,"select * from category");
				while($row=mysqli_fetch_array($r))
					echo "<option value='$row[1]'>$row[1]</option>";
			?>

    </select>
</td>

</tr>
   <tr><td>Sub-Category name</td>
<td><input type="text" name="sub"  value="<?php echo $rows[2]; ?>"></td>
</tr>
<tr>
<td>Photo</td>
<td>
<input type='file' name='p' value="<?php echo $rows[3]; ?>"></input>
</td>
</tr>
<td colspan='2' align='center'><input type="submit" value='modify' name="up"></td>
</tr>
	</table>

 
</form>
<?php
        if(isset($_REQUEST["up"]))
		{
            $cat=$_POST["sub"];
            $x=$_POST["category"];
            $photo=$_POST["p"];
	     $r = mysqli_query($con,"update subcatg set category='$x',subname='$cat',photo='$photo'  where id='$id'");
		 if($r)
			 header("location:viewsubcat.php");
				
		}
		?>
