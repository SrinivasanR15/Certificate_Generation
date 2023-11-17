<!DOCTYPE html>
<html>
<head>
<title> STUDENT RECEIPT</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
 </head>
<body>
<div class="col-md-9">
			<div class=" well bs-component">
				<div class=" jumbotron">

<form name="p1" method="POST" action="printreceipt.php">
	<fieldset>
		<div class="row">
			<div class="col-xs-6" >
					<h2>Receipt</h2>
							<label class="control-label">Admission Number</label>
								<div class="input-group">
								   <input type="text"id="adm_no" name="adm_no" placeholder="Enter Admission Number" required="required" "[0-9]{10,10}" >
								</div><br>
								   <input name="retrive" type="submit" id="receipt" value="RECEIPT" class="btn btn-primary"><br><br>
									<a href="insert.php">Main Page</a><br>
								</div>
							</div>
						<fieldset>	
	
</form>
</html>


