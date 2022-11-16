<html>
<head>

      <link rel="stylesheet" href="sq.css">
</head>
<form name="nm" action="cat.php" method="post">
<table border='1' align='center'  cellspacing='0' cellpadding='10'>
<caption>Add Category</caption>
<tr><td>Category name</td>
<td><input type="text" name="catg"></td>
</tr>
<tr >
<td colspan='2' align='center'><input type="submit" value='submit'></td>
</tr>
</table>
</form>
</body>
<?php
 $con=mysqli_connect("localhost","root","","project");
 $r=mysqli_query($con,"select * from category ");
 
 echo"<table border='1' cellspacing=0 cellpadding=10 align='center'>";
echo "<tr><td>id</td>
          <td>categoryname</td>
		  <td>Delete</td>
		  <td>Edit</td>
	 </tr>";
	 while($row=mysqli_fetch_array($r))
{
 echo"<tr><td>$row[0]</td>";
 echo"<td>$row[1]</td>
 <td><a href='delcat.php?b=$row[1]'>Delete</a></td>
 <td><a href='catupdate.php?a=$row[0]'>edit</a></td></tr>";	
}echo "</table>";
?>
</html>