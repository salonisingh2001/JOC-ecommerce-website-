<script>
           
		     function a(e)
		   {
		   var id=(window.event)?event.keyCode:e.which; <!--keyCode return the acsii value of the key-->
		   if((id>=65 && id<=90) || (id>=97 && id<=122))
		   return true;
		   else
		   return false;
		 }
		 function check()
		 {
		    var un= document.m.un.value;
		    var n2= document.m.n2.value;
		    if((un=="saloni")&&(n2=="bhavya"))
			return true;
			if(un=="")
			        {
					  alert("enter user name")
			          return false;
			        }
			
		      if(n2=="")
			        {
					  alert("enter password")
			          return false;
			        }
			else
			alert("wrong user name and password")
			return false;
		 }
</script>
<head>
<link rel="stylesheet" href="sq.css">
</head>
<body>
<form name='m' action='http://localhost/frontend/web/admin.php' method='post' onsubmit='return check()'>
<table border='1' align='center'  cellspacing='0' cellpadding='10' >
<caption>Admin Portal</caption>
<tr><td>Admin name</td>
<td><input type="text" name="un" placeholder="enter user name" value="" onkeypress="return a(event)"></td>
</tr>
<tr><td>Password</td>
<td><input type="password" name="n2" placeholder="enter pass" value="" '></td>
</tr>
<tr >
<td colspan='2' align='center'><input id='cur' type="submit" value='login' ></td>
</tr>
</table>
</form>
</body>