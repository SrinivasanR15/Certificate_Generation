 
<?php

$host="localhost";
$databasename="student";
$user="root";
$pass="";
$conn=mysql_connect($host,$user,$pass);

if($conn)
{
$db_selected = mysql_select_db($databasename, $conn);
if (!$db_selected) {
    die ('Cant use foo : ' . mysql_error());
}
}
else
{
    die('Not connected : ' . mysql_error());
}
?>