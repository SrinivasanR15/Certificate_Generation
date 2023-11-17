<?php
include('Studentheader.php');
 include_once("config/config.php");  
error_reporting(0);
session_start();

	$query ="select * from  student where Regno='".$_SESSION['login_user']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
		$row = mysql_fetch_assoc($result);
	
		$stuname = $row['Studentname'];
		//echo $stuname;
		}

if(isset($_GET['select']))
{
	$adno = $_GET['select'];
}
 ?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#studentdetails").validate();
  });
</script>
<form action="Requestdetails.php" name="Requestdetails"  id="Requestdetails"  method="post">
	
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="#3FA43A" class="displaycontent"  width="500">
	<caption></caption>
	<tr>
		<th colspan="2"> <font size=8>Request</font></th>
	<tr>
	
	<tr>
		<td class="col"><b>Student Name:</b></td>
		<td><input type="text" name="Stu_name"  value="<?php echo $row['Studentname']; ?>" /></td>
	</tr>

	<tr>
		<td class="col"><b>Register no:</b></td>
		<td><input type="text" name="Regno" value="<?php echo $_SESSION['login_user']; ?>" class="required" /></td>
	</tr>
	<tr>
		<td class="col"><b>Date:</b></td>
		<td><input type="text" name="RDate" value="<?php echo date("d-m-Y");?>" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Description:</b></td>
		<td><textarea rows="4" cols="40" name="desc" id="desc"> </textarea></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="submit" value="Register" />
		     
		</td>
	</tr>

	
		
	
	</table>

	
		
	</form>

</div>


<?php

 if(isset($_POST['submit'])){
	 if($_POST['Stu_name']=="" || $_POST['Regno']=="" || $_POST['RDate']=="" || $_POST['desc']=="")
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `request` (`Id`,`Regno`, `Stuname`, `Reqdate`, `Description`, `Status`)"; 		
	$query .= " VALUES ('Null', '".$_POST['Regno']."','".$_POST['Stu_name']."','".$_POST['RDate']."', '";
	$query .=  $_POST['desc']."','Request')";
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	//header("location:Requestdetails.php");
	exit;
 }
 }

?>


<?php
include('footer.php');
?>
