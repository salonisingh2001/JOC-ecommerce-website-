<?php
 $con=mysqli_connect("localhost","root","","project");
  $id=$_REQUEST["a"];
  $r=mysqli_query($con,"select * from product where id='$id'");
  $rows=mysqli_fetch_row($r);

?>
<form action='' method='post'  enctype="multipart/form-data">
   <table align='center' cellspacing=0 cellpadding=10 border='1'>
   <tr>
        <td colspan='2'>
		  <input type="hidden" value="<?php echo $row[0]; ?>" name="id">
		</td>
   </tr>
   <tr><td>Category</td>
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
   <td><select name='subcatg' value="<?php echo $row[2]; ?>">
            <?php
			  $con=mysqli_connect("localhost","root","","project");
 
				$r=mysqli_query($con,"select * from subcatg");
				while($row=mysqli_fetch_array($r))
					echo "<option value='$row[2]'>$row[2]</option>";
			?>

    </select>
</td>

</tr>
<tr><td>Type</td>
   <td><select name='type' value="<?php echo $row[3]; ?>">
            <?php
			  $con=mysqli_connect("localhost","root","","project");
 
				$r=mysqli_query($con,"select * from type");
				while($row=mysqli_fetch_array($r))
					echo "<option value='$row[3]'>$row[3]</option>";
			?>

    </select>
</td>
</tr>
<tr>
<td> Product name</td>
<td>
<input type='text' name='nm' value="<?php echo $rows[4]; ?>"></input>
</td>
</tr>
<tr>
<td> Price</td>
<td>
<input type='text' name='pri' value="<?php echo $rows[5]; ?>"></input>
</td>
</tr>
<tr>
<td>Description</td>
<td>
<textarea rows=4 cols=30 name="d" value="<?php echo $rows[6]; ?>"></textarea>
</td>
</tr>
<tr>
<td>Color</td>
<td>
<input type='checkbox' name='chk[]' value="<?php echo $rows[7]; ?>" >
</td>
</td>
</tr>
<tr>
<td>Discount</td>
<td>
<input type='text' name='discount' value="<?php echo $rows[8]; ?>" ></input>
</td>
</tr>
<tr>
<td>Photo</td>
<td>
<input type='file' name='p' value="<?php echo $rows[9]; ?>" ></input>
</td>
</tr>
<tr>
<td>Size</td>
<td>
<input type='checkbox' name='chk1[]' value="<?php echo $rows[9]; ?>">

</td>
</tr>

<tr>
<td colspan='2' align='center'><input type="submit" value='modify' name="up"></td>
</tr>
	</table>

 
</form>
<?php
        if(isset($_REQUEST["up"]))
		{
            $cat=$_POST["type"];
            $x=$_POST["category"];
            $y=$_POST["subcatg"];
            $name=$_POST["nm"];
            $price=$_POST["pri"];
            $d=$_POST["d"];
            $chkbox=$_POST["chk"];
            $dis=$_POST["discount"];
            $size=$_POST["chk1"];
            if(isset($_POST['submit']))
            {
                $c= implode(",",$chkbox);
                $s= implode(",",$size);
	     $r = mysqli_query($con,"update subcatg set category='$x',subcatg='$cat',type='$cat',product_name='$name',price='$price',description='$d',color='$chkbox',discount='$dis',photo='$photo',size='$size'  where id='$id'");
		 if($r)
			 header("location:viewsubcat.php");
				
		}}
		?>
