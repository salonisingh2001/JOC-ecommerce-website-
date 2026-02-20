<html>
<head>

      <link rel="stylesheet" href="sq.css">
</head>
<body>
<form name="nm" action="slide.php" method="post" enctype="multipart/form-data">
<table border='1' align='center'  cellspacing='0' cellpadding='10'>
<caption>ADD Photo For Slider </caption>
<tr><td>photo</td>
<td><input type='file' name='p'></td>
</tr>
<tr>
<td colspan='2' align='center'><input type='submit' value='submit'></td>
</tr>
</table>
</form>
</body>
<?php
 $con=mysqli_connect("localhost","root","","project");
 $r=mysqli_query($con,"select * from slider ");
 
 echo"<table border='1' cellspacing=0 cellpadding=10 align='center'>";
echo "<tr><td>id</td>
          <td>photo</td>
		  <td>Delete</td>
		  <td>Edit</td>
	 </tr>";
	 while($row=mysqli_fetch_array($r))
{
 echo"<tr><td>$row[0]</td>";
 echo"<td><image src='upload/$row[1]' height=80 width=80></td>
 <td><a href='delslide.php?b=$row[0]'>Delete</a></td>
 <td><a href='updateslider.php?a=$row[0]'>edit</a></td></tr>";	
}echo "</table>";
?>
</html>