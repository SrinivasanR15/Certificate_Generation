<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fees Information</title>

<?php
 //include_once("config/config.php");  

 error_reporting(0);

?>


	
<div    align="center">
<form action="adminuser.php" name="contactform" class="row" method="post">
<h1 align="center">FEES REPORT<h1>
	<h2>COLLEGE FEES DETAILS: </h2>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<tr>
	   
           <th bgcolor=Orange><font color=white size=2>Date </font></th>
		   <th bgcolor=Orange><font color=white size=2>Recipt No </font></th>
               <th bgcolor=Orange><font color=white size=2>Regno </font></th>
		<th bgcolor=Orange><font color=white size=2>Name</font></th>
		<th bgcolor=Orange><font color=white size=2>Cus</font></td>
		<th bgcolor=Orange><font color=white size=2>Batch</font></th>
        	<th bgcolor=Orange><font color=white size=2>Department</font></th>
		<th bgcolor=Orange><font color=white size=2>Year</font></th>
		<th bgcolor=Orange><font color=white size=2>Sem</font></th>
		<th bgcolor=Orange><font color=white size=2>Adf</font></th>
		<th bgcolor=Orange><font color=white size=2>Amount</font></th>
		
            
	</tr>
	<?php
	mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("student")  or die(mysql_error());
	$query = "select * from det2";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
	
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['data']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['recn']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['regn']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['stdn']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><?php echo $row['cus']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['bat']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><?php echo $row['dpt']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['year']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['sem']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['adf']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['amt']; ?></font></td>
		
        
	</tr>
	<?php }  ?>
	
	</table>


	<h2> HOSTEL FEES DETAILS: </h2>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<tr>
	   
           <th bgcolor=Orange><font color=white size=2>Date </font></th>
		   <th bgcolor=Orange><font color=white size=2>Recipt No </font></th>
               <th bgcolor=Orange><font color=white size=2>Regno </font></th>
		<th bgcolor=Orange><font color=white size=2>Name</font></th>
		<th bgcolor=Orange><font color=white size=2>Cus</font></td>
		<th bgcolor=Orange><font color=white size=2>Batch</font></th>
        	<th bgcolor=Orange><font color=white size=2>Department</font></th>
		<th bgcolor=Orange><font color=white size=2>Year</font></th>
		<th bgcolor=Orange><font color=white size=2>Address</font></th>
		<th bgcolor=Orange><font color=white size=2>Amount</font></th>
		
            
	</tr>
	<?php
	mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("student")  or die(mysql_error());
	$query = "select * from det3";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
	
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['data']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['recn']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['regn']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['stdn']; ?></font></td>
        	<td bgcolor=white><font color=#000000 size=2><?php echo $row['cus']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['bat']; ?></font></td>
        	<td bgcolor=white><font color=#000000 size=2><?php echo $row['dpt']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['year']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['addr']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['amt']; ?></font></td>
		
        
	</tr>
	<?php }  ?>
	
	</table>

		<h2> BUS FEES DETAILS: </h2>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Darkblue;" align="center">
	<tr>
	   
           <th bgcolor=Orange><font color=white size=2>Date </font></th>
		   <th bgcolor=Orange><font color=white size=2>Recipt No </font></th>
               <th bgcolor=Orange><font color=white size=2>Regno </font></th>
		<th bgcolor=Orange><font color=white size=2>Name</font></th>
		<th bgcolor=Orange><font color=white size=2>Cus</font></td>
		<th bgcolor=Orange><font color=white size=2>Batch</font></th>
        	<th bgcolor=Orange><font color=white size=2>Department</font></th>
		<th bgcolor=Orange><font color=white size=2>Year</font></th>
		<th bgcolor=Orange><font color=white size=2>Sem</font></th>
		<th bgcolor=Orange><font color=white size=2>Adf</font></th>
		<th bgcolor=Orange><font color=white size=2>From</font></th>
		<th bgcolor=Orange><font color=white size=2>To</font></th>
         <th bgcolor=Orange><font color=white size=2>Amount</font></th>   
	</tr>
	<?php
	mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("student")  or die(mysql_error());
	$query = "select * from det";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
	
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['data']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['recn']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['regn']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['stdn']; ?></font></td>
        	<td bgcolor=white><font color=#000000 size=2><?php echo $row['cus']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['bat']; ?></font></td>
        	<td bgcolor=white><font color=#000000 size=2><?php echo $row['dpt']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['year']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['sem']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['adf']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['frm']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><?php echo $row['to']; ?></font></td>
		 <td bgcolor=white><font color=#000000 size=2><?php echo $row['amt']; ?></font></td>
	</tr>
	<?php }  ?>
	
	</table>
</form>
</div>	 
<a href="front.php"><b>Back to Home</b></a>
</div>	<!-- End row -->	
</div>

</div>




