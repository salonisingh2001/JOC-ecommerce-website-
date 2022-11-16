<?php
 $con=mysqli_connect("localhost","root","","project");
 $r=mysqli_query($con,"select * from type ");
 
 echo"<table border='1' cellspacing=0 cellpadding=10 align='center'>";
echo "<tr><td>id</td>
          <td>categoryname</td>
          <td>subname</td>
		  <td>type</td>
		  <td>Delete</td>
		  <td>Edit</td>
	 </tr>";
	 while($row=mysqli_fetch_array($r))
{
 echo"<tr><td>$row[0]</td>";
 echo"<td>$row[1]</td>
 <td>$row[2]</td>
 <td>$row[3]</td>
 <td><a href='delty.php?b=$row[3]'>Delete</a></td>
 <td><a href='updtsub.php?a=$row[3]'>edit</a></td></tr>";	
}echo "</table>";
?>