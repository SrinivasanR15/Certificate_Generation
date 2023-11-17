<?php
	include("config/config.php");
	$t=time();
	$dt=date("Y-m-d",$t);
	$time=date("h:i:sa");
	$set=$dt.':'.$time;

	if(isset($_GET['select1'])){ 
		
		//$query="select Studentname,student.Regno,Email,Addr,Depart,Fyear,Tyear,Fname,c.date from student s, cc c where c.";
	$query = "select * from student where Regno='".$_GET['select1']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
	}
	}
	

 ?>
<form action="coursecertificateview.php" name="certificationdetails"  id="certificationdetails"  method="post">
<div align="center">
<table border="1" style="border-collapse: collapse;" cellspacing="7" cellpadding="4"  bgcolor="#FFFFFF" class="displaycontent"  width="1200">
	<caption></caption>

	<tr>
<th colspan="2"><font size=4>Date:<?php echo $dt;?> </font></td>
</tr>
	<tr>
		<th colspan="2"> <font size=5> Sri Krishna College Of Engineering And Technology</font></br>
		<font size=3>SRI KRISHNA INSTITUTIONS,</font>
		<font size=3>ANNA UNIVERSITY,</font></br>
		<font size=3>Coimbatore, Tamilnadu</font></th>
	</tr>
	<tr>
		<th colspan="2"> <font size=6>COURSE COMPLETION CERTIFICATE</font></th>
	</tr>
	<br/>
	<tr>
	<td>
	<p><center>This is certify that Mr/Ms. <?php echo $row['Studentname'];?> </center></p>
	<p><center> a bonafide student of this college, has undergone <?php echo $row['Depart'];?> has completed</center></p>
	<p><center>the above course conducted by the SRI KRISHNA COLLEGE OF ENGINEERING AND TECHNOLOGY ,COIMBATORE. With vide Reg.No: <?php echo $row['Regno'];?></center></p>
	</td>
</tr>
</table>
<input class="hide-from-printer" type="button" name="printbtn" onClick="window.print();" value="Print" /><br>
<a href="certification.php">Back</a>
</div>
</form>
