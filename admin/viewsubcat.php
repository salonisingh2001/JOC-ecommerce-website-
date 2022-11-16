<?php
 $con=mysqli_connect("localhost","root","","project");
 $r=mysqli_query($con,"select * from subcatg ");
 
 echo"<table border='1' cellspacing=0 cellpadding=10 align='center'>";
echo "<tr><td>id</td>
          <td>categoryname</td>
          <td>subname</td>
		  <td>photo</td>
		  <td>Delete</td>
		  <td>Edit</td>
	 </tr>";
	 while($row=mysqli_fetch_array($r))
{
 echo"<tr><td>$row[0]</td>";
 echo"<td>$row[1]</td>";
 echo"<td>$row[2]</td>";
 echo"<td><image src='upload/$row[3]' height=80 width=80></td>
 
 <td><a href='delsub.php?b=$row[0]'>Delete</a></td>
 <td><a href='updtsub.php?a=$row[0]'>edit</a></td></tr>";	
}echo "</table>";
?>