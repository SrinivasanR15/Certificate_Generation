<?php
  include_once("config/config.php");  
 include('Studentheader.php');

?>
<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<div id="right_navi" align="center">
	<br />
	<form action="" name="Addcase"  id="Addcase"  method="post">
	
	
	
	<div align="center">
</br></br>
<h2> REQUEST DETAILS: </h2>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="800" height="120" style="border:10px solid #800000;" align="center">
	<tr>
	    
			<th bgcolor=Black><font color=white size=2>id </font></th>
			<th bgcolor=Black><font color=white size=2>Student name</font></th>
				<th bgcolor=Black><font color=white size=2>Register No</font></th>
			<th bgcolor=Black><font color=white size=2>Date</font></th>
					<th bgcolor=Black><font color=white size=2>Description</font></th>
					<th bgcolor=Black><font color=white size=2>Status</font></td>
					
         
	</tr>
	<?php
	
	$query = "select * from request where Regno='".$_SESSION['login_user']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>

	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Regno']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Stuname']; ?></font></td>
 		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Reqdate']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Description']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><?php echo $row['Status']; ?></font></td>
				  
	</tr>
	<?php }  ?>
	
	</table>
	
	
	</form>

</div>

<?php include("footer.php");?>
