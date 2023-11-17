<?php
include('AdminHeader.php');
?>
<?php
include_once("config/config.php");
?>
<div>
 <form>
<table>
	<caption></caption>
	<tr><h2 align="center"><br/> TRANSFER CERTIFICATE DETAILS </h2>
<br/><br/>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="1200" style="border:10px black;" align="center">
	<tr>
	    
			
			<th bgcolor=Green><font color=white size=2>Register no:</font></th>
			<th bgcolor=Green><font color=white size=2>Date:</font></th>
			
	</tr>
	
	<?php

	$query = "select * from deliveredtc";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
	
  //Now here on Hyperlink click event we will delete the associated data.


 ?>
	<tr>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Regno']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['ddate']; ?></font></td>
	</tr>
	<?php } ?>
	 </div>
    </body>
	</table>
</form>
</div>
<div>
 <form>
<table>
	<caption></caption>
	<tr><h2 align="center"><br/> COURSE CERTIFICATE DETAILS </h2>
<br/><br/>
	<center >
	<table border="2" cellspacing="6" class="displaycontent" width="1200" style="border:10px black;" align="center">
	<tr>
	    
			
			<th bgcolor=Green><font color=white size=2>Register no:</font></th>
			<th bgcolor=Green><font color=white size=2>Date:</font></th>
			
	</tr>
	
	<?php

	$query = "select * from deliveredcc";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
	
  //Now here on Hyperlink click event we will delete the associated data.


 ?>
	<tr>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Regno']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['ddate']; ?></font></td>
	</tr>
	<?php } ?>
	 </div>
    </body>
	</table>
</form>
</div>
<?php
include('footer.php');
?>
