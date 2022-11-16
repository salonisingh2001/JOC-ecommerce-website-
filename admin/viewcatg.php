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
 <td><a href='delcat.php?b=$row[0]'>Delete</a></td>
 <td><a href='catupdate.php?a=$row[0]'>edit</a></td></tr>";	
}echo "</table>";
?>