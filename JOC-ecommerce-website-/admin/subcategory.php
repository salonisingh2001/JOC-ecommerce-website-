<head>
<link rel="stylesheet" href="sq.css">
</head>
<body>
<form name="f" action="subcat.php" method="post">
<table border='1' align='center'  cellspacing='0' cellpadding='10'>
<caption>Select Category</caption>
<tr><td>Select Your Category</td>
<td><select name='category'>
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
<td><input type="text" name="sub"></td>
</tr>
<tr>
<td>Photo</td>
<td>
<input type='file' name='p' ></input>
</td>
</tr>
<tr >
<td colspan='2' align='center'><input type="submit" value='submit'></input></td>
</tr>

</table>
</form></body>