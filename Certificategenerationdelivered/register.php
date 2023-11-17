<?php
include('AdminHeader.php');

 ?>

<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#studentdetails").validate();
  });
</script>
<form action="certification.php" name="certificationdetails"  id="certificationdetails"  method="post">
	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px black;" align="center">
	<caption></caption>
	<tr><h2 align="center"><br/>  STUDENT DETAILS </h2>
<br/><br/>
	<center >

	<tr>
	    
			<th bgcolor=Green><font color=white size=2>Student Name: </font></th>
			<th bgcolor=Green><font color=white size=2>Register no:</font></th>
			<th bgcolor=Green><font color=white size=2>Email: </font></th>
			<th bgcolor=Green><font color=white size=2>Address:</font></th>
			<th bgcolor=Green><font color=white size=2>Department:</font></td>
			<th bgcolor=Green><font color=white size=2>From Year :</font></th>
        	<th bgcolor=Green><font color=white size=2>To Year:</font></th>
			<th bgcolor=Green><font color=white size=2>Mobile:</font></th>
			<th bgcolor=Green><font color=white size=2>Father Name:</font></th>
		   
	</tr>
	
	<?php
include("config/config.php");
$query="select * from student where Depart='".$_POST['Depart']."' and Fyear='".$_POST['Fyear']."' and Tyear='".$_POST['Tyear']."'";
$result1=mysql_query($query);
while($row = mysql_fetch_assoc($result1))
		{
 ?>
	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Studentname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Regno']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Email']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Addr']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><?php echo $row['Depart']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Fyear']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><?php echo $row['Tyear']; ?></font></td>
	    <td bgcolor=white><font color=#000000 size=2><?php echo $row['Mob']; ?></font></td>
	    <td bgcolor=white><font color=#000000 size=2><?php echo $row['Fname']; ?></font></td>
		
	
		
        
	</tr>
	<?php }  ?>
	
	</table>
</form>