<?php
include('AdminHeader.php');
?>
<?php
 include_once("config/config.php"); 
 $t=time();
	$dt=date("Y-m-d",$t);
	$time=date("h:i:sa");
	$set=$dt.':'.$time;
/*	if(isset($_POST['select']))
	{
		if($_POST['status']=='paid' && $_POST['sem']=='paid' && $_POST['hosetl']=='paid' && $_POST['bus']=='paid' && $_POST['library']=='return')
		{
$query1="select Studentname,student.Regno,Email,Addr,Depart,Fyear,Tyear,Mob,Fname,status,sem,hostel,bus,library from student INNER JOIN admin ON							 student.Regno=admin.Regno";
			$result1=mysql_query($query1);
			if(mysql_num_rows($result1)){
			$row1=mysql_fetch_assoc($result1);
//			header("location:register.php");

		}
		else
		{
						$msg="All fields are mandatary.Please fill It";     			
			}
		}
	} */

//	if ($_POST['status'] == 'paid' &&  $_POST['sem']=='paid' && $_POST['hosetl']=='paid' && $_POST['bus']=='paid' && $_POST['library']=='return')    
//	{
	
	
	// and  status='".$_POST['status']."' and sem='".$_POST['sem']."' hostel='".$_POST['hostel']."' and bus='".$_POST['bus']."' library='".$_POST['library']."'";
// $query ="select * from  admin where Regno='".$_GET['select']."'";

	if(isset($_GET['select']))
	{
		//$query ="select * from admin where Regno='".$_GET['select']."' and status='paid' and sem='paid' and hostel='paid' and bus='paid' and library='return'";
		//echo $query;
		//$result = mysql_query($query);
		//if(mysql_num_rows($result))
		//{
			$row = mysql_fetch_assoc($result);
			
			$query1="insert into deliveredtc values('".$_GET['select']."','".$set."')";
			mysql_query($query1);

			$query="select * from admin where Regno='".$_GET['select']."'";
			$result=mysql_query($query);
			header('Location:certificateview.php?select='.$_GET['select'].'');
			exit;
			
		//}
		//else
		//{
		//	$_SESSION['message']='<span class="fail">Not Eligible</span>';
		//	echo "<script>alert('Not Eligible to Provide Certificate');</script>";
		//}
	}
	
	if(isset($_GET['select1']))
	{
	//	$query ="select * from admin where Regno='".$_GET['select1']."' and status='paid' and sem='paid' and hostel='paid' and bus='paid' and library='return'";
		//echo $query;
		//$result = mysql_query($query);
		//if(mysql_num_rows($result))
		//{
			$row = mysql_fetch_assoc($result);
			
			$query1="insert into deliveredcc values('".$_GET['select1']."','".$set."')";
			mysql_query($query1);

			$query="select * from admin where Regno='".$_GET['select1']."'";
			$result=mysql_query($query);
			header('Location:coursecertificateview.php?select1='.$_GET['select1'].'');
			exit;
			
		//}
		//else
		//{
		//	$_SESSION['message']='<span class="fail">Not Eligible</span>';
		//	echo "<script>alert('Not Eligible to Provide Certificate');</script>";
		//}
	}
	//header("location:index.php");
	//exit;
 
 


				//	header("location:index.php");
				//	exit;
	

/*if(isset($_POST['register']))
	{
		if($_POST['Depart']=='' && $_POST['Fyear']=='' && $_POST['Tyear']=='')
		{
			$msg="All fields are mandatary.Please fill It";     
		}
		else
		{
			$query="select * from student where Depart='".$_POST['Depart']."' and Fyear='".$_POST['Fyear']."' and Tyear='".$_POST['Tyear']."'";  
			echo $query;
			$result1=mysql_query($query);
			if(mysql_num_rows($result1)){
			$row1=mysql_fetch_assoc($result1);
			header("location:register.php");
			}
		}
	} */
	/*  if(isset($_REQUEST['select']))
  {
   $delete = $_REQUEST['select'];
   $query = mysql_query("SELECT * FROM student WHERE Regno= '$delete'")or   die(mysql_error());
   echo "Deleted";
} */
if(isset($_POST['submit'])){
$query="select * from student where Regno='".$_POST['Regno']."'";
echo $query;
$result=mysql_query($query);
if(mysql_num_rows($result)){
$row = mysql_fetch_assoc($result);
}}
if(isset($_POST['fees'])){
$query1 = "INSERT INTO `admin`(`Regno`,`status`,`sem`,`hostel`,`bus`,`library`)VALUES 
('".$_POST['Regno']."', '".$_POST['status']."','".$_POST['sem']."','".$_POST['hostel']."','".$_POST['bus']."','".$_POST['library']."')";
$result1=mysql_query($query1);
}

?>
<div align="center">
<form action="register.php" name="certificationdetails"  id="certificationdetails"  method="post">
<br/>
<br/>
	 <table border="0" cellspacing="4" cellspadding="4"  bgcolor="#3FA43A" class="displaycontent"  width="500">
	<caption></caption>
	<tr>

		<th colspan="2"> <font size=8>Certification Details</font></th>
	</tr>
	<td>&nbsp;</td>
	<tr>
	<td class="col"><b>Department:</b></td>
	<td><select name="Depart" onchange="myFunction()">
    <option value="CSE">CSE</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
	 <option value="Mech">Mech</option>
	  <option value="Civil">Civil</option>
</select>
</td>
	</tr>
	<tr>
	<td class="col"  ><b>From Year :</b></td>
	<td><select name="Fyear" onchange="myfunction()">
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
	 <option value="2013">2013</option>
	  <option value="2014">2014</option>
	    <option value="2015">2015</option>
		  <option value="2016">2016</option>
		    <option value="2017">2017</option>
			  <option value="2018">2018</option>
			    <option value="2019">2019</option>
				<option value="2020">2020</option>
</select>
</td>
	</tr>
	<tr>
		<td class="col"><b>To Year:</b></td>
		<td><select name="Tyear" onchange="myfunction()" >
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
</select>
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="submit" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>
	</table>
	</form>
	</div>

	<div align="center">
	<form action="classtransfer.php" name="certificationdetails"  id="certificationdetails"  method="post">
 <table border="0" cellspacing="4" cellspadding="4"  bgcolor="#3FA43A" class="displaycontent"  width="500">
 <caption></caption>
	<tr>
		<th colspan="2"> <font size=8>Register Details</font></th>
	</tr>
	<tr>
	<td class="col"  ><b>Register Number :</b></td>
	<td><input type="text" name="Regno" value="" /></td>
	</tr>
<tr>
<td>&nbsp;</td>
<td>
<input type="submit" name="submit" value="submit"/>
<input type="Reset" value="Reset"/>
</td>
</tr>
</table>
</form>
</div>
<div align="center">
<form action="certification.php" name="certificationdetails"  id="certificationdetails"  method="post">

</form>
</div>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#certificationdetails").validate();
  });
</script>

	<br/>
		<br/>
</div>
  <form>
<table>
	<caption></caption>
	<tr><h2 align="center"><br/> OVERALL STUDENT DETAILS </h2>
<br/><br/>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="1200" style="border:10px black;" align="center">
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
		    <th bgcolor=Green><font color=white size=2>Transfer certificate</font></th> 
			<th bgcolor=Green><font color=white size=2>Course Completion</font></th> 
	</tr>
	
	<?php

	$query = "select * from student";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
	
  //Now here on Hyperlink click event we will delete the associated data.


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
		<td bgcolor=white><font color=#000000 size=2><a href="?select=<?php echo $row['Regno'];?>">TC</a></font></td>
		<td bgcolor=white><font color=#FFFFFF size=2><a href="?select1=<?php echo $row['Regno'];?>">CC</a></font></td>
     
	</tr>
			<?php }  ?>
			
			        </div>
    </body>
	</table>
</form>
</div>
<?php
include('footer.php');
?>
