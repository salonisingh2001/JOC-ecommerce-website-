<?php
 $con=mysqli_connect("localhost","root","","project");
 $r=mysqli_query($con,"select * from product order by id desc");
 
 echo"<table border='1' cellspacing=0 cellpadding=10 align='center'>";
echo "<tr><td>id</td>
        <td>Add category</td>
	   <td>Add sub-category</td>
	   <td>Type</td>
	   <td>Product name</td>
	   <td>Price</td>
	   <td>Description</td>
	   <td>Color</td>
	   <td>Discount</td>
        <td>Size</td>
		<td>Quantity</td>
	   <td>photo</td>
      <td>Delete</td>
       <td>Edit</td>
       </tr>"; 
	  
while($row=mysqli_fetch_array($r))
{
 echo"<tr><td>$row[0]</td>";
 echo"<td>$row[1]</td>";
 echo"<td>$row[2]</td>";
 echo"<td>$row[3]</td>";
 echo"<td>$row[4]</td>";
 echo"<td>$row[5]</td>";
 echo"<td>$row[6]</td>";
 echo"<td>$row[7]</td>";
 echo"<td>$row[8]</td>";
 echo"<td>$row[10]</td>";
 echo"<td>$row[11]</td>";
 echo"<td><image src='upload/$row[9]' height=80 width=80></td>
 <td><a href='delpro.php?a=$row[0]'>Delete</a></td>
 <td><a href='updproduct.php?a=$row[0]'>edit</a></td></tr>";	
}
echo "</table>";
  ?>