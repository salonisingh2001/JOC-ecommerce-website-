<head>
<link rel="stylesheet" href="sq.css">
</head>
<body>
  <form name="nm" action="ty.php" method="post">
<table border='1' align='center'  cellspacing='0' cellpadding='10'>
<caption>Select Type Of Product </caption>
<tr><td>Category</td>
<td><select name="category">
    <?php
    $con=mysqli_connect("localhost","root","","project");

      $r=mysqli_query($con,"select * from category");
      while($row=mysqli_fetch_array($r))
          echo "<option value='$row[1]'>$row[1]</option>";
  ?>
    </select>
</td>
</tr>

<tr><td>Sub-Category</td>
<td><select name="subcatg">
    <?php
    $con=mysqli_connect("localhost","root","","project");

      $r=mysqli_query($con,"select * from subcatg");
      while($row=mysqli_fetch_array($r))
          echo "<option value='$row[2]'>$row[2]</option>";
  ?>
    </select>
</td>
</tr>

<tr><td>type</td>
    <td><input type="text" name="ty" value="" placeholder="enter type">
</td>
</tr>

<tr >
<td colspan='2' align='center'><input type="submit" value='submit'></input></td>
</tr>
</table></form></body>