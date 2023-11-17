<?php
 //include_once("config/config.php");  
 if(isset($_POST['login'])){
if($_POST['email_id']=="" || $_POST['password']=="")
	 {
	 echo '<script> alert("Please Fill The Details");</script>';
	 }
	 else
	 {
if($_POST['email_id']=="admin" && $_POST['password']=="admin")
	 {
	 echo '<script> alert("LOGIN SUCCESS");</script>';
	 header('location:adminhome.php');
	 }
	 else

	 {
		  echo '<script> alert("LOGIN FAILED");</script>';
	 }
	 }
 }
 



 include_once("Header.php"); 
 

?>
<script type="text/javascript">	
  $(document).ready(function(){
    $("#login_form").validate();
  });
</script>
<div align="center">
	<form action="" name="login_form" id="login_form"  method="post">
	<img src="login.png" width="300" height="200">
	<br />
	<table border="0"  class="displaycontent" bgcolor="#3FA43A" width="500">
	<caption></caption>
	<tr>
		<th colspan="2"><font Size=12>Admin Login</font></th>
	<tr>
	<tr>
		<td class="col"><B>User ID:</B></td>
		<td><input type="text" name="email_id" value="" /></td>
	</tr>
	<tr>
		<td  class="col"><B>Password:</B></td>
		<td><input type="password" name="password" value="" class="required"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="login" value="Login" />
		     	<input type="Reset"  value="Reset" />
			
		</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	<td>
		
		</td>
	</tr>
	</table>
	</form>
<?php include_once("footer.php")?>
</div>
</div>

