<?php
include('AdminHeader.php');
error_reporting(0);
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
<form action="studentdetails.php" name="studentdetails"  id="studentdetails"  method="post">
	
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="#3FA43A" class="displaycontent"  width="500">
	<caption></caption>
	<tr>
		<th colspan="2"> <font size=8>Student Details</font></th>
	<tr>
	
	<tr>
		<td class="col"><b>Student Name:</b></td>
		<td><input type="text" name="Stu_name"  value="" onkeypress="return letters(event);"/></td>
	</tr>

	<tr>
		<td class="col"><b>Register no:</b></td>
		<td><input type="text" name="Regno" value="" class="required" /></td>
	</tr>
	<tr>
		<td class="col"><b>Email:</b></td>
		<td><input type="text" name="email_id" value="" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Address:</b></td>
		<td><input type="text" name="address" value="" class="required"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Department:</b></td>
			<td><select name="Depart">
    <option value="CT">CT</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
	 <option value="Mech">Mech</option>
	  <option value="Civil">Civil</option>
</select>
</td>
	</tr>
	<tr>
		<td class="col"  ><b>From Year :</b></td>
		<td><select name="Fyear">
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
		<td class="col"  ><b>To Year:</b></td>
		<td><select name="Tyear">
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
		<td class="col"  ><b>Mobile:</b></td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="mobile" value="" /></td>
	</tr>
	<tr>
		<td class="col"><b>Father Name:</b></td>
		<td><input type="text" class="required"  name="Fname" value="" onkeypress="return letters(event);"/></td>
	</tr>
<tr>
		<td class="col"><b>Password:</b></td>
		<td><input type="Password" class="required"  name="pwd" value="" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="submit" value="Register" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>

	
		
	
	</table>

	
		
	</form>

</div>


<?php
 include_once("config/config.php");  
 if(isset($_POST['submit'])){
	 if($_POST['Stu_name']=="" || $_POST['Regno']=="" || $_POST['email_id']=="" || $_POST['address']=="" || $_POST['mobile']=="" || $_POST['Fname']=="")
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `student` (`Studentname`, `Regno`, `Email`, `Addr`, `Depart`, `Fyear`, `Tyear`, `Mob`, `Fname`,`pwd`)"; 		
	$query .= " VALUES ('".$_POST['Stu_name']."', '".$_POST['Regno']."', '".$_POST['email_id']."', '";
	$query .=  $_POST['address']."', '".$_POST['Depart']."', '".$_POST['Fyear']."', '".$_POST['Tyear']."', '";
	$query .= $_POST['mobile']."', '".$_POST['Fname']."','".$_POST['pwd']."')";
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:studentdetails.php");
	exit;
 }
 }

?>

<form>

<table>

	<caption></caption>

	<tr><h2 align="center"><br/> OVERALL STUDENT DETAILS </h2>
<br/><br/>
	<center >

	<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px black;" align="center">
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
		            <th bgcolor=Green><font color=white size=2>Password: </font></th>
	</tr>
	
	<?php

	$query = "select * from student";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
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
		
     <td bgcolor=white><font color=#000000 size=2><?php echo $row['pwd']; ?></font></td>
		<!--?select=<?php echo $row['sno'];?>">Select</a></font></td>-->
		
        
	</tr>
	<?php }  ?>
	
	</table>
</form>

<?php
include('footer.php');
?>
