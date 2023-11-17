<link href="jsDatePick_ltr.min.css" type="text/css" rel="stylesheet"  />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"Pdate",
			dateFormat:"%d-%M-%Y",
			selectedDate:{		
				day:31,		
				month:1,
				year:2017
			},
			yearsRange:[1984,2996],
			limitToToday:false,
			//cellColorScheme:"beige",
			dateFormat:"%d-%m-%Y",
			//imgPath:"img/",
			weekStartDay:1

		});

	
}


</script>
<script type="text/javascript">
function sum() {
      var txtFirstNumberValue = document.getElementById('amt').value;
      var txtSecondNumberValue = document.getElementById('noticket').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('tamt').value = result;
      }
}
</script>
<?php
error_reporting(0);

 include_once("config/config.php");  
if(isset($_GET['select'])){

$query2 = "select * from request where Id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
//echo $query2;
?>

<?php
include('AdminHeader.php');

 ?>

<div align="center">

<script type="text/javascript">	
  $(document).ready(function(){
    $("#Allocatetomanager").validate();
  });
</script>
<div class="content">
    <div class="content_resize">

    
<form action="Statusupdate.php" name="Statusupdate" id="Statusupdate"   method="post">
<br>
<div align="center">
<br>
<br>
<h2> Update Status </h2>
	<center >
	</table>
	
	<br>
<br>
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="Orange" class="displaycontent"  width="600" height="450">
	<caption></caption>
		<tr>
		<td class="col"><b>id:</b></td>
		<td><input type="text" name="Sid" value="<?php echo $row['Id']; ?>" class="required email" readonly /></td>
	</tr>
	
	
	<tr>
		<td class="col"><b>Register No:</b></td>
		<td><input type="text" name="Regno" value="<?php echo $row['Regno']; ?>" class="required" readonly/></td>
	</tr>
	<tr>
		<td class="col"><b>Student Name:</b></td>
		<td><input type="text" name="sname" value="<?php echo $row['Stuname']; ?>" class="required" readonly/></td>
	</tr>
	<tr>
		<td class="col"><b>Date:</b></td>
		<td><input type="text" name="Rdate" value="<?php echo $row['Reqdate']; ?>" class="required" readonly/></td>
	</tr>

	<tr>
		<td class="col"><b>Description:</b></td>
		<td><input type="text" name="desc" id="amt" value="<?php echo $row['Description']; ?>" class="required" width="300" height="70"  readonly/></td>
	</tr>

	
	<tr>
		<td class="col"><b>Status:</b></td>
		<td><textarea rows="4" cols="40" name="sta" id="sta"> </textarea></td>
	
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Update" />
		     	
		</td>
	</tr>

	
		
	
	</table>

	</form>
</div>
    </div>
</div>


<?php
 
if(isset($_POST['register']))
	
	{

	 if($_POST['sta']=="")
		{
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
		}
	
	else
		{

		$query = "UPDATE request SET Status='".$_POST['sta']."'  WHERE Id='".$_POST['Sid']."'";  
		if(mysql_query($query))
		{
		echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
		}
		else
		{
		echo 'NOT REGISTERD';
		}
	header("location:Viewrequest.php");
	//exit;
		
		}
 
 }

?>


<?php
include('footer.php');
?>
 

