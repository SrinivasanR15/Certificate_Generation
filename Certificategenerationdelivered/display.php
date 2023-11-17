 

<?php
include("mysqlconnect.php");
$select_query = "SELECT images_path FROM  images_tabl ORDER by images_id DESC LIMIT 1";
$sql = mysql_query($select_query) or die(mysql_error());	
while($row = mysql_fetch_array($sql,MYSQL_BOTH)){
?>
<table style="border-collapse: collapse; font: 15px Tahoma;" border="1" cellspacing="6" cellpadding="6">
<tbody><tr>
<td>
<img src="<?php echo $row["images_path"]?>" width="300px" height="300px" />
</td>
</tr>
</tbody></table>
<?php
}
?>
