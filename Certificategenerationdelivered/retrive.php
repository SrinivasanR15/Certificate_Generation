<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'student');
define('DB_USER','root'); 
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
if (isset($_POST['report']))
{
$query = mysql_query("SELECT * FROM register");
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

<h1>REPORT</h1>
<table width="800" border="1" cellspacing="2" cellpadding="2">
<tr>
<td>Admission number</td>
<td>First Name</td>
<td>Last Name</td>
<td>Contact Number</td>
<td>Father Name</td>
<td>Fathers Contact Number</td>
<td>Guardian Name</td>
<td>Guardian Contact no</td>
<td>Course</td>
<td>Year</td>

</tr>

<?php
WHILE($rows = mysql_fetch_array($query))
 {    
?>
<tr>
 <td><?php echo $adm_no = $rows['adm_no'] ?></td>
<td><?php echo $fname = $rows['fname'] ?></td>
<td> <?php echo $lname = $rows['lname'] ?></td>
<td> <?php echo $cno = $rows['cno']?></td>
<td> <?php echo $fathername = $rows['fathername']?></td>
<td> <?php echo $fathercont = $rows['fathercont']?></td>
<td> <?php echo $guardname = $rows['guardname']?></td>
<td> <?php echo $guardcont = $rows['guardcont'] ?></td>
<td> <?php echo $Course = $rows['Course']?></td>
<td> <?php echo $Year = $rows['Year'] ?></td>


</tr>

<?php } 
mysql_close($con);
}?>
</table><input class="hide-from-printer" type="button" name="printbtn" onClick="window.print();" value="Print" />

	</div>







