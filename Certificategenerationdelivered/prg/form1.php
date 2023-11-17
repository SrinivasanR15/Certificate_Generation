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
		
		$insert = "INSERT INTO `det2`(`data`, `recn`, `regn`, `stdn`, `cus`, `bat`,`dpt`, `year`,`sem`,`adf`, `amt`, `amtw`) VALUES ('".$_POST['data']."', '".$_POST['recn']."', '".$_POST['regn']."', '".$_POST['stdn']."', '".$_POST['cus']."','".$_POST['bat']."', '".$_POST['dpt']."', '".$_POST['year']."','".$_POST['sem']."' ,'".$_POST['adf']."', '".$_POST['amt']."', '".$_POST['amtw']."')";
		mysql_query($insert);
	}
	if(isset($_POST['delete']) && $_POST['delete']='delete') {
		$delete = "DELETE FROM `det2` WHERE `recn` ='".$_POST['recn']."'; ";
		mysql_query($delete);
	
	}


}
$setSql = "SELECT recn  FROM `det2` ; ";
$setrecn = mysql_query($setSql);
$sqlCount = mysql_num_rows($setrecn);
if($sqlCount != 0) {
	while($recn=mysql_fetch_array($setrecn)){
		$recn_no  = $recn['recn'];
	}
	$recn_no++;
		
}else{
	$recn_no=1000;
}

$setSql = "SELECT regn  FROM `det2` ; ";
$setregn = mysql_query($setSql);
$sqlCount = mysql_num_rows($setregn);
if($sqlCount != 0) {
	while($regn=mysql_fetch_array($setregn)){
		$regn_no  = $regn['regn'];
	}
	$regn_no++;
		
}else{
	$regn_no=1000;
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
.recn {
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

<body background="1.jpg">
<form id="forms" name="forms" method="post" action="form1.php" enctype="multipart/form-data">
<table width="447" height="402" border="1" align="center">
     <tr>
       <td width="248" height="45" class="Date">Date</td>
       <td width="183"><!--<form id="form1" name="form1" method="post" action="">
         <label for="textfield10"></label>
         <input type="text" name="data" id="textfield10" required/>-->
		 <div class="controls input-append date form_date" data-date="" name="date" id="textfield10" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input size="16" type="text" value="" name="data" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                </div>
				
      <!-- </form>--></td>
     </tr>
     <tr>
       <td class="recn">Receipt No</td>
       <td><!--<form id="form2" name="form2" method="post" action="">-->
         <label for="recn"></label>
         <input type="text" name="recn" id="textfield2" value="<?php echo $recn_no; ?>" style="border:0px;" required/>
		 
      <!-- </form>--></td>
     </tr>
     <tr>
       <td class="regn">Register No</td>
       <td><!--<form id="form3" name="form3" method="post" action="">-->
         <label for="textfield3"></label>
        <input type="text" name="regn" id="textfield2" value="<?php echo $regn_no; ?>" style="border:0px;" required/>
		
       <!--</form>--></td>
     </tr>
     <tr>
       <td class="stdn">Student Name</td>
       <td><!--<form id="form5" name="form5" method="post" action="">-->
         <label for="stdn"></label>
         <input type="text" name="stdn" id="textfield5"/>
       <!--</form>--></td>
     </tr>
     <tr>
       <td class="cur">Course</td>
       <td><!--<form id="form6" name="form6" method="post" action="">-->
         <label for="textfield6"></label>
         <label for="select"></label>
         <select name="cus" id="select">
           <option value="MCA">Mca</option>
           <option value="Msc(CS)">Msc(CS)</option>
           <option value="Msc(Micro)">Msc(Micro)</option>
           <option value="Msc(BioChem)">Msc(Biochem)</option>
           <option value="Mcom(CA)">Mcom(CA)</option>
           <option value="BCA">Bca</option>
           <option value="Bsc(CS)">Bsc(Cs)</option>
           <option value="Bsc(Micro)">Bsc(Micro)</option>
           <option value="Bsc(Biochem)">Bsc(Biochem)</option>
           <option value="Bcom(CA)">Bcom(CA)</option>
         </select>
       <!--</form>--></td>
     </tr>
<tr>
       <td class="bat">Batch</td>
       <td><!--<form id="form4" name="form4" method="post" action="">-->
         <input type="radio" name="bat" id="radio" value="I"/>
         <span class="I">I </span>
         <input type="radio" name="bat" id="radio2" value="II" />
         <span id="II">II
                  </span>
       <!--</form>--></td>
     </tr>
     <tr>
       <td class="dpt">Department</td>
       <td><!--<form id="form7" name="form7" method="post" action="">-->
         <label for="textfield7"></label>
         <label for="select"></label>
         <select name="dpt" id="select">
           <option value="CS">Computer Science</option>
           <option value="Commerce">commerce</option>
           <option value="Microbiology">MicroBiology</option>
           <option value="Bichemistry">Bichemistry</option>
           <option value="Maths">Maths</option>
           <option value="English">English</option>
           <option value="Tamil">Tamil</option>
           <option value="Management">Management</option>
           </select>
       <!--</form>--></td>
     </tr>
     <tr>
       <td class="y">Year</td>
       <td><!--<form id="form8" name="form8" method="post" action="">-->
         <label for="textfield8"></label>
         <input type="text" name="year" id="textfield8"/>
      <!-- </form>--></td>
     </tr>
<tr>
       <td class="sem">Semester</td>
       <td><!--<form id="form8" name="form8" method="post" action="">-->
         <label for="textfield8"></label>
       <label for="select"></label>
         <select name="sem" id="select">
           <option value="I">I</option>
           <option value="II">II</option>
           <option value="III">III</option>
           <option value="IV">IV</option>
           <option value="V">V</option>
           <option value="VI">VI</option>
           </select>    
      <!-- </form>--></td>
     </tr>
<tr>
       <td class="adf">Admission Fee</td>
       <td><!--<form id="form8" name="form8" method="post" action="">-->
         <label for="textfield8"></label>
         <input type="text" name="adf" id="textfield8"/>
      <!-- </form>--></td>
     </tr>
     <tr>
       <td class="amt">Amount</td>
       <td><!--<form id="form4" name="form4" method="post" action="">-->
         <input type="radio" name="amt" id="radio" value="radio" />
         <span class="dd">DD</span>
         <input type="radio" name="amt" id="radio2" value="radio2" />
         <span id="cas">Cash
         <label for="textfield4"></label>
         </span>
<input type="text" name="amt" id="textfield4"/>
       <!--</form>--></td>
     </tr>
<tr>
       <td class="amtw">Amount In Word</td>
       <td><!--<form id="form9" name="form9" method="post" action="">-->
         <label for="textfield9"></label>
         <input type="text" name="amtw" id="textfield9"/>
       <!--</form>--></td>
     </tr>
<tr>
       <td class="but" align="center" width="200">  <input name="Submit" type="Submit" value="Submit"/> 
          <input name="delete" type="Submit" value="Delete" /> 
           <input name="clear" type="Submit" value="Clear" />  <input type="button" name="button5" id="button5" value="Print"  onclick="print()"/></td>
  </tr>
</table>
<p align="center"><a href="front.php">Home</a></p>
<!--<form id="form10" name="form10" method="post" action="" >-->
</form>
   <p>&nbsp;</p>
</fieldset>
 </body>
 <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_date').datetimepicker({
       weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>
</html>
</body>
   