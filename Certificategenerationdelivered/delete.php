<html>
<head>
	<title>
Delete
	</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
<body>
<?php
	
	if(isset($_POST['delete']))
	{
		$dbhost='localhost';
		$user='root';
		$password='';
		$conn=mysql_connect($dbhost,$user,$password);
		if(! $conn)
		{
			die('Could not connect:' .mysql_error());
		}
		
		$adm_no=$_POST['adm_no'];
		
		
		 $sql = "DELETE  FROM register ".  "WHERE adm_no= $adm_no";
		
		mysql_select_db('student');
		$retval=mysql_query($sql,$conn);
		if(! $retval)
		{
			die('Could not enter data:' .mysql_error());
		}
		echo "Deleted data successfully";
		mysql_close($conn);
	}
	
else
	{
?>

		<div class="col-md-9">
			<div class=" well bs-component">
				<div class=" jumbotron">
					<form method="post" action="<?php $_PHP_SELF ?>" class="form-horizontal">
					
						<fieldset>
							<div class="row">
								<div class="col-xs-6">
									<h2>Delete Record</h2>
									<label class="control-label">Admission Number</label>
									<div class="input-group">
										<input type="text"id="adm_no" name="adm_no" placeholder="Enter Admission Number" required="required">
									</div><br>
									<input name="delete" type="submit" id="delete" value="SUBMIT" class="btn btn-primary"><br><br>
										<a href="insert.php"> Go back to main page</a>
								</div>
							</div>
						<fieldset>
					
					</form>
	<?php
	}
	?>
				</div>
			</div>
		</div>
</body>
</html>
	
		
