<head>
<link rel="stylesheet" href="sq.css">
</head>
<body>
<form action='pro.php' method='post'  enctype="multipart/form-data">
<table border='2' align='center'  cellspacing='0' cellpadding='10'>
<caption>Add Product </caption>
<tr><td>Add-Category</td>
<td><select name="category">
        <?php
        $con=mysqli_connect("localhost","root","","project");
    
          $r=mysqli_query($con,"select * from category");
          while($row=mysqli_fetch_array($r))
              echo "<option value='$row[1]'>$row[1]</option>";
      ?>
        </select>


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

<tr><td>Type</td>
<td><select name="type">
<?php
    $con=mysqli_connect("localhost","root","","project");

      $r=mysqli_query($con,"select * from type");
      while($row=mysqli_fetch_array($r))
          echo "<option value='$row[3]'>$row[3]</option>";
  ?>

    </select>
</td>
<tr>
<td> Product name</td>
<td>
<input type='text' name='nm' placeholder='product name' ></input>
</td>
</tr>
<tr>
<td> Price</td>
<td>
<input type='text' name='pri' placeholder='enter price' ></input>
</td>
</tr>
<tr>
<td>Description</td>
<td>
<textarea rows=4 cols=30 name="d"></textarea>
</td>
</tr>
<tr>
<td>Color</td>
<td>
<input type='checkbox' name='chk[]' value='red'>red
<input type='checkbox' name='chk[]' value='pink'>pink
<input type='checkbox' name='chk[]' value='black'>black
<input type='checkbox' name='chk[]' value='white'>white
<input type='checkbox' name='chk[]' value='yellow'>yellow
<input type='checkbox' name='chk[]' value='orange'>orange
</td>
</td>
</tr>
<tr>
<td>Discount</td>
<td>
<input type='text' name='discount' placeholder='enter discount' ></input>
</td>
</tr>
<tr>
<td>Photo</td>
<td>
<input type='file' name='p' ></input>
</td>
</tr>
<tr>
<td>Size</td>
<td>
<input type='checkbox' name='chk1[]' value='S'>S
<input type='checkbox' name='chk1[]' value='M'>M
<input type='checkbox' name='chk1[]' value='L'>L
<input type='checkbox' name='chk1[]' value='XL'>XL
</td>
</tr>
<tr>
<td>quantity</td>
<td>
<input type='text' name='quantity' placeholder='enter quantity' value="1" ></input>
</td>
</tr>

<tr >
<td colspan='2' align='center'><input type="submit" name="submit" value='Add'></input></td>
</tr>
</table>
</form></body>