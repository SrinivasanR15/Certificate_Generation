<?php

if(isset($_POST['datafilter'])){
	$datafilter = $_POST['datafilter'];
	// include db connect class
    require_once 'database/dataBaseConnect.php';
	// connecting to db
    $db = new DB_CONNECT();
	if($datafilter=='Admission Fee'){
		$setSql = "SELECT *  FROM `det` where `adf` != 0 OR `adf` != ''; ";
		$setrecn = mysql_query($setSql);
		$sqlCount = mysql_num_rows($setrecn);
		if($sqlCount != 0) {
			while($recn=mysql_fetch_array($setrecn)){
				//data										adf		amt	amtw	
				$data['data'][]  = $recn['data'];
				$data['recn'][]  = $recn['recn'];
				$data['regn'][]  = $recn['regn'];
				$data['stdn'][]  = $recn['stdn'];
				$data['cus'][]  = $recn['cus'];
				$data['amt'][]  = $recn['amt'];
				$data['Count']  = $sqlCount;
				$data['type'] = 'Admission';
				
			}
		}			
	}
	if($datafilter=='Hostel Fee'){
		$setSql = "SELECT *  FROM `det` where (`frm` = 0 OR `frm` = '') AND (`regn` = 0 OR `regn` = ''); ";
		$setrecn = mysql_query($setSql);
		$sqlCount = mysql_num_rows($setrecn);
		if($sqlCount != 0) {
			while($recn=mysql_fetch_array($setrecn)){
				$data['data'][]  = $recn['data'];
				$data['recn'][]  = $recn['recn'];
				$data['stdn'][]  = $recn['stdn'];
				$data['cus'][]  = $recn['cus'];
				$data['regn'][]  = $recn['regn'];
				$data['amt'][]  = $recn['amt'];
				$data['Count']  = $sqlCount;
				$data['type'] = 'Hostel';
			}
		}
	}
	if($datafilter=='Bus Fee'){
		$setSql = "SELECT *  FROM `det` where (`frm` != 0 OR `frm` != '') AND (`regn` = 0 OR `regn` = ''); ";
		$setrecn = mysql_query($setSql);
		$sqlCount = mysql_num_rows($setrecn);
		if($sqlCount != 0) {
			while($recn=mysql_fetch_array($setrecn)){
				$data['data'][]  = $recn['data'];
				$data['recn'][]  = $recn['recn'];
				$data['stdn'][]  = $recn['stdn'];
				$data['cus'][]  = $recn['cus'];
				$data['regn'][]  = $recn['regn'];
				$data['amt'][]  = $recn['amt'];
				$data['Count']  = $sqlCount;
				$data['type'] = 'Bus';
			}
		}
	}
	  echo json_encode($data);
}

?>

