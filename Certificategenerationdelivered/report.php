<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
.Heading {
	text-align: center;
	font-size: 36px;
}

</style>
<?php
error_reporting(0);
// include db connect class
    require_once 'database/dataBaseConnect.php';
	// connecting to db
    $db = new DB_CONNECT();
	
if(isset($_POST) && !empty($_POST)) {
	
	if(isset($_POST['Submit']) && $_POST['Submit']='Submit') {
		
		$insert = "INSERT INTO `det`(`data`, `recn`, `regn`, `stdn`, `cus`, `bat`,`dpt`, `year`,`sem`,`adf`, `amt`, `amtw`) VALUES ('".$_POST['date']."', '".$_POST['recno']."', '".$_POST['regn']."', '".$_POST['stdn']."', '".$_POST['cus']."','".$_POST['bat']."', '".$_POST['dpt']."', '".$_POST['year']."','".$_POST['sem']."' ,'".$_POST['adf']."', '".$_POST['amt']."', '".$_POST['amtw']."')";
		mysql_query($insert);
	}
	if(isset($_POST['delete']) && $_POST['delete']='delete') {
		$delete = "DELETE FROM `det2` WHERE `recn` ='".$_POST['recno']."'; ";
		mysql_query($delete);
	
	}


}
$setSql = "SELECT recn  FROM `det` ; ";
$setrecn = mysql_query($setSql);
$sqlCount = mysql_num_rows($setrecn);
if($sqlCount != 0) {
	while($recn=mysql_fetch_array($setrecn)){
		$recn_no  = $recn['recn'];
	}
	$recn_no++;
}else{
	$recn_no = 1000;
}


?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fee Information</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
<h1 align="center"><font face="Times New Roman">SRI RAMKRISHNA COLLEGE OF
<p align="center">ARTS AND SCIENCE FOR WOMEN</p>
<p align="center">395,Sarojini Naidu Road,Coimbatore-641044,Ph:0422-2243624</p>
<p align="center">COLLEGE FEE</p>
</h1>
<style type="text/css">
.Date {
	font-family: "Times New Roman", Times, serif;
	font-size: 24px;
}
.line {
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
}
.recen {
	font-family: "Times New Roman", Times, serif;
	font-size: 24px;
}
.regn {
	font-size: 24px;
}
.stdn {
	font-size: 24px;
}
.cur {
	font-size: 24px;
}
.bat{
	font-size:24px;
}

.dpt {
	font-size: 24px;
}
.y {
	font-size: 24px;
}
.sem{
	font-size:24px;
}
.amt {
	font-size: 24px;
}
.amtw {
	font-size: 24px;
}
.dd {
	font-size: 24px;
}
.adf{
	font-size:24px;
}
body p {
	font-size: 36px;
}
#cas {
	font-size: 24px;
}

</style>
</head>

<body >
<form id="forms" name="forms" method="post" action="form1.php" enctype="multipart/form-data">
<table width="200" height="20" border="1" align="center">
     <tr>
       <td width="200" height="15" class="Date">Filter </td>
       <td width="200">
		 <select name="filter" id="filter">
			<option>Admission Fee</option>
			<option>Hostel Fee</option>
			<option>Bus Fee</option>
		</select>
		</td>
     </tr>
</table>
<div class="mytable"></div>
<p align="justify"><a href="front.php">Back</a></p>
<!--<form id="form10" name="form10" method="post" action="" >-->
</form>
<form action="val.php" method="post" name="validate"  id="validate" enctype="multipart/form-data">
<input type="hidden" name="datafilter" id="datafilter"/>
</form>
   <p>&nbsp;</p>
</fieldset>
 </body>
 <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$("#filter").on("change",function(){
		var v = $(this).val();
		$("#datafilter").val(v);
		$("#validate").submit();
	});
	$("#validate").submit(function(){
		var valu = $('#validate').serialize();
            $.ajax({
                type: 'POST',
                url: 'val.php',
                data: valu,
                dataType: 'json',
                success: function(json) {
                    if(json.type == 'Hostel'){
                        $('.mya').remove();
						var d = "<div class='mya'> <table width='600'  border='1' align='center'><tr width='248' ><th width='183'>Sno</th><th>Receipt No</th><th>Register No</th><th>Student Name</th><th>Course</th><th>Date</th><th>Amount</th><th>PRINT</th></tr>";
                       for(var i=0; i < json.Count; i++){
						   j = i+1;
							d += "<tr><td> "+j+" </td><td> "+json.recn[i]+" </td><td> "+json.regn[i]+" </td><td> "+json.stdn[i]+" </td><td> "+json.cus[i]+" </td><td> "+json.data[i]+" </td><td> "+json.amt[i]+" </td><td> <a href='print.php?id="+json.recn[i]+"&type=Hostel'>Print</a> </td></tr>";
					   }
					   d += "</table></div>";
					   $(".mytable").append(d);
					}
					if(json.type == 'Admission'){

                        $('.mya').remove();
						var d = "<div class='mya'> <table width='600'  border='1' align='center'><><tr width='248' ><th>Sno</th><th>Receipt No</th><th>Register No</th><th>Student Name</th><th>Course</th><th>Date</th><th>Amount</th><th>Print</th></tr>";
                       for(var i=0; i < json.Count; i++){
						   j = i+1;
							d += "<tr><td> "+j+" </td><td> "+json.recn[i]+" </td><td> "+json.regn[i]+" </td><td> "+json.stdn[i]+" </td><td> "+json.cus[i]+" </td><td> "+json.data[i]+" </td><td> "+json.amt[i]+" </td><td> <a href='print.php?id="+json.recn[i]+"&type=Admission'>Print</a> </td></tr>";
					   }
					   d += "</table></div>";
					   $(".mytable").append(d);
					}
					if(json.type == 'Bus'){
                        $('.mya').remove();
						var d = "<div class='mya'> <table width='600'  border='1' align='center'><tr width='248' ><th>Sno</th><th>Receipt No</th><th>Register No</th><th>Student Name</th><th>Course</th><th>Date</th><th>Amount</th><th>Print</th></tr>";
                       for(var i=0; i < json.Count; i++){
						   j = i+1;
							d += "<tr><td> "+j+" </td><td> "+json.recn[i]+" </td><td> "+json.regn[i]+" </td><td> "+json.stdn[i]+" </td><td> "+json.cus[i]+" </td><td> "+json.data[i]+" </td><td> "+json.amt[i]+" </td><td> <a href='print.php?id="+json.recn[i]+"&type=Bus'>Print</a> </td></tr>";
					   }
					   d += "</table></div>";
					   $(".mytable").append(d);
					}
				}
               });
             return false;
        });

	
});
    
</script>


</html>
</body>
   