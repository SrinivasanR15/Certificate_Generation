<?php
	include("config/config.php");

	$t=time();
	$dt=date("Y-m-d",$t);
	$time=date("h:i:sa");
	$set=$dt.':'.$time;

	if(isset($_GET['select'])){ 
		
		//$query="select Studentname,student.Regno,Email,Addr,Depart,Fyear,Tyear,Fname,c.date from student s, cc c where c.";
	$query = "select * from student where Regno='".$_GET['select']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
	}
	}
 ?>


  <div align="center">
    <script type="text/javascript">
        function print_page() {
            var ButtonControl = document.getElementById("printbtn");
            ButtonControl.style.visibility = "hidden";
            window.print();
        }

    </script>
<style type="text/css">
@media print {
  /* style sheet for print goes here */
  .hide-from-printer{  display:none; }
}
</style>


<form action="certificateview.php" name="certificationdetails"  id="certificationdetails"  method="post">
<div align="center">
<table border="1" style="border-collapse: collapse;" cellspacing="7" cellpadding="4"  bgcolor="#FFFFFF" class="displaycontent"  width="700">
	<caption></caption>
	
	<tr>
		<th colspan="2"> <font size=5> Sri Krishna College Of Engineering And Technology </font></br>
		<font size=3>SRI KRISHNA INSTITUTIONS,</font>
		<font size=3>ANNA UNIVERSITY,</font></br>
		<font size=3>Coimbatore, Tamilnadu</font></th>
	</tr>
<tr>
<th colspan="2"><font size=4>Date:<?php echo $dt;?> </font></td>
</tr>
	<tr>
		<th colspan="2"> <font size=6>Transfer Certificate</font></th>
	</tr>
<br/>
<br/>
<tr>
		<td align="right">Full Name :  </td>
		<td ><?php echo $row['Studentname']; ?></td>
	</tr>

	<tr>
		 <td align="right">Registration Number : </font></td>
		 <td bgcolor=white><?php echo $row['Regno']; ?></font></td>
	</tr>
	<tr>
		 <td align="right">Email : </font></td>
		 <td bgcolor=white><font color=#000000 size=2><?php echo $row['Email']; ?></font></td>
	</tr>
	<tr>
			<td align="right">Address : </font></td>
			<td bgcolor=white><?php echo $row['Addr']; ?></font></td>
	</tr>
	<tr>
 <td align="right">Department :</font></td>
	 <td bgcolor=white><?php echo $row['Depart']; ?></font></td>
	</tr>
	<tr>
		<td align="right">From Year :</font></td>
			<td bgcolor=white><?php echo $row['Fyear']; ?></font></td>
</td>
	</tr>
	<tr>
	<td align="right">To Year : </font></td>
		    <td bgcolor=white><?php echo $row['Tyear']; ?></font></td>
	</tr>
	<tr>
		<td align="right">Father Name : </font></td>
		<td bgcolor=white><?php echo $row['Fname']; ?></font></td>
	</tr>
	</table>
</br>
	<input class="hide-from-printer" type="button" name="printbtn" onClick="window.print();" value="Print" /></br>
	<a href="certification.php">Back</a>
	</div>
	</form>
