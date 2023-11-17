<?php
error_reporting(0);
session_start();
include('header.php');
include_once("config/config.php");
 if(isset($_POST['submit']))
 {
	$query ="select * from  student where Regno='".$_POST['user_name']."' and pwd ='".$_POST['password']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
	
			$row = mysql_fetch_assoc($result);
			$_SESSION['login_user'] = $_POST['user_name'];
			//echo '<script> alert("Login success");</script>'; 
			header("location:Studentrhome.php");
	}
	else
	 {
	
	echo '<script> alert("Login failed");</script>';
	 }
 }
?>
<br>
<br>

<form action="studentlogin.php" method="post" >
<center>
<table border="0" cellpadding="5" cellspacing="0" width="150" Height="40" align="center" class="details_single">
<tr>
  <td colspan="2"><b>STUDENT LOGIN</b> </td>
</tr>
</table>
<table border="0" cellpadding="5" cellspacing="0" width="310" Height="110" align="center" class="details_single">
<tr>
	<td >Register No </td>
	<td ><input type="text" name="user_name" id="user_name" />
	</td>
</tr>
<tr>
	<td >Password </td>
	<td ><input type="password" name="password" id="password" />
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="Login" />
	<input type="reset" name="reset" value="reset" />
	</td>
</tr>
</table>
</center>
</form>
</div>
<br>
<br>


<?php 
include('footer.php');
?>

