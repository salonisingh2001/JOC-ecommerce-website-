<script>
          function a(e)
		   {
		   var id=(window.event)?event.keyCode:e.which; //keyCode return the acsii value of the key
		   if((id>=65 && id<=90) || (id>=97 && id<=122))
		   return true;
		   else
		   return false;
		 }
		 function check(){
		               var u=document.m.un.value;
					   var p=document.m.pn.value;
					   if(u=="")
			        {
					  alert("enter user name")
			          return false;
			        }
			
		           if(p=="")
			        {
					  alert("enter password")
			          return false;
			        }
					 }
</script>
<head>
        
</head>
<form name='m' action='login1.php' method='post' onsubmit='return check()'>
      <table border='1' align='center'  cellspacing='0' cellpadding='10'>
	    <caption>User Login</caption>
	          <tr>
			       <td>Email</td>
				   <td><input type="text" name="un" placeholder="enter user name" ></td>
			  </tr>
			  <tr>
				   <td>Password</td>
				   <td><input type="password" name="pn" placeholder="enter password"></td>
			  </tr>
			  <tr>
				   
				   <td colspan='2' align='center'><input type="submit" name="s" value="login"></td>
			  </tr>
	  </table>
</form>