<html>
<head>
</head>
<body>
<?php
	$dbhost='localhost';
	$user='root';
	$password='';
	$conn=mysql_connect($dbhost,$user,$password);
	if(! $conn)
		{
			die('Could not connect:' .mysql_error());
		}
	mysql_select_db("student",$conn);
	if (isset($_POST['update']))
	{
		$updatequery = "UPDATE register SET adm_no='$_POST[adm_no]',fname='$_POST[fname]',lname='$_POST[lname]',
	dob='$_POST[dob]',email='$_POST[email]',cno='$_POST[cno]',preadr='$_POST[preadr]',peradr='$_POST[peradr]',
	tenbranch='$_POST[tenbranch]',tenins='$_POST[tenins]',tenyop='$_POST[tenyop]',tenper='$_POST[tenper]',
	twelvebranch='$_POST[twelvebranch]',twelveins='$_POST[twelveins]',twelveyop='$_POST[twelveyop]',
	twelveper='$_POST[twelveper]',ugbranch='$_POST[ugbranch]',ugins='$_POST[ugins]',ugyop='$_POST[ugyop]',
	ugper='$_POST[ugper]',pgbranch='$_POST[pgbranch]',pgins='$_POST[pgins]',pgyop='$_POST[pgyop]',pgper='$_POST[pgper]',
	mphilbranch='$_POST[mphilbranch]',mphilins='$_POST[mphilins]',mphilyop='$_POST[mphilyop]',mphilper='$_POST[mphilper]',
	phdbranch='$_POST[phdbranch]',phdins='$_POST[phdins]',phdyop='$_POST[phdyop]',phdper='$_POST[phdper]',
	fathername='$_POST[fathername]',fathercont='$_POST[fathercont]',fatheroccu='$_POST[fatheroccu]',
	mothername='$_POST[mothername]',mothercont='$_POST[mothercont]',motheroccu='$_POST[motheroccu]',guardname='$_POST[guardname]',guardcont='$_POST[guardcont]',
	Religion='$_POST[Religion]',Community='$_POST[Community]',Caste='$_POST[Caste]',
	Nationality='$_POST[Nationality]' WHERE  adm_no='$_POST[hidden]'";
	mysql_query($updatequery,$conn);		

	};
	
	
	$sql = "SELECT * FROM register";
	$myData = mysql_query($sql,$conn);
	echo "<table border=1>
	<tr>
	<th>Admission Number</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Date of Birth</th>
	<th>Email</th>
	<th>Contact Number</th>
	<th>Present Address</th>
	<th>Permanent Address</th>
	<th>Tenth Branch</th>
	<th>Tenth Institution</th>
	<th>Tenth Year Of Passing</th>
	<th>Tenth Percentage</th>
	<th>Twelve Branch</th>
	<th>Twelve Institution</th>
	<th>Twelve Year Of passing</th>
	<th>Twelve Percentage</th>
	<th>UG Branch</th>
	<th>UG Institution</th>
	<th>UG Year Of passing</th>
	<th>UG Percentage</th>
	<th>PG Branch</th>
	<th>PG Institution</th>
	<th>PG Year of passing</th>
	<th>PG Percentage</th>
	<th>Mphil Branch</th>
	<th>Mphil Institution</th>
	<th>Mphil Year of Passing</th>
	<th>Mphil Percentage</th>
	<th>Phd Branch</th>
	<th>Phd Institution</th>
	<th>Phd Year of Passing</th>
	<th>Phd Percentage</th>
	<th>Father Name</th>
	<th>Father Contact Number</th>
	<th>Father Occupation</th>
	<th>Mother Name</th>
	<th>Mother Contact Number</th>
	<th>Mother Occupation</th>
	<th>Guardian Name</th>
	<th>Guardian Number</th>
	<th>Religion</th>
	<th>Community</th>
	<th>Caste</th>
	<th>Nationality</th>
	<th>Date of admission</th>
		
	</tr>";

	
		while($record  =  mysql_fetch_array($myData))
		{
		echo "<form action=update.php method=post>";
		echo "<tr>";
		echo "<td>"  . "<input type=text  name=adm_no value="  .  $record['adm_no'] . " </td>";
		echo "<td>"  . "<input type=text  name=fname value="  .  $record['fname'] . " </td>";
		echo "<td>"  . "<input type=text  name=lname value=" .  $record['lname'] . " </td>";
		echo "<td>"  . "<input type=text  name=dob value=" .  $record['dob'] . " </td>";
		echo "<td>"  . "<input type=text  name=email value=" .  $record['email'] . " </td>";
		echo "<td>"  . "<input type=text  name=cno value=" .  $record['cno'] .">". " </td>";
		echo "<td>"  . "<textarea  name=preadr >" .  $record['preadr'] . "</textarea>"."</td>";
		echo "<td>"  . "<textarea  name=peradr >" .  $record['peradr'] ."</textarea>". " </td>";
		echo "<td>"  . "<input type=text  name=tenbranch value=" .  $record['tenbranch'] . " </td>";
		echo "<td>"  . "<input type=text  name=tenins value=" .  $record['tenins'] . " </td>";
		echo "<td>"  . "<input type=text  name=tenyop value=" .  $record['tenyop'] . " </td>";
		echo "<td>"  . "<input type=text  name=tenper value=" .  $record['tenper'] . " </td>";
		
		echo "<td>"  . "<input type=text  name=twelvebranch value=" .  $record['twelvebranch'] . " </td>";
		echo "<td>"  . "<input type=text  name=twelveins value=" .  $record['twelveins'] . " </td>";
		echo "<td>"  . "<input type=text  name=twelveyop value=" .  $record['twelveyop'] . " </td>";
		echo "<td>"  . "<input type=text  name=twelveper value=" .  $record['twelveper'] . " </td>";

		echo "<td>"  . "<input type=text  name=ugbranch value=" .  $record['ugbranch'] . " </td>";
		echo "<td>"  . "<input type=text  name=ugins value=" .  $record['ugins'] . " </td>";
		echo "<td>"  . "<input type=text  name=ugyop value=" .  $record['ugyop'] . " </td>";
		echo "<td>"  . "<input type=text  name=ugper value=" .  $record['ugper'] . " </td>";

		echo "<td>"  . "<input type=text  name=pgbranch value=" .  $record['pgbranch'] . " </td>";
		echo "<td>"  . "<input type=text  name=pgins value=" .  $record['pgins'] . " </td>";
		echo "<td>"  . "<input type=text  name=pgyop value=" .  $record['pgyop'] . " </td>";
		echo "<td>"  . "<input type=text  name=pgper value=" .  $record['pgper'] . " </td>";
		
		echo "<td>"  . "<input type=text  name=mphilbranch value=" .  $record['mphilbranch'] . " </td>";
		echo "<td>"  . "<input type=text  name=mphilins value=" .  $record['mphilins'] . " </td>";
		echo "<td>"  . "<input type=text  name=mphilyop value=" .  $record['mphilyop'] . " </td>";
		echo "<td>"  . "<input type=text  name=mphilper value=" .  $record['mphilper'] . " </td>";

		echo "<td>"  . "<input type=text  name=phdbranch value=" .  $record['phdbranch'] . " </td>";
		echo "<td>"  . "<input type=text  name=phdins value=" .  $record['phdins'] . " </td>";
		echo "<td>"  . "<input type=text  name=phdyop value=" .  $record['phdyop'] . " </td>";
		echo "<td>"  . "<input type=text  name=phdper value=" .  $record['phdper'] . " </td>";

		echo "<td>"  . "<input type=text  name=fathername value="  .  $record['fathername'] . " </td>";
		echo "<td>"  . "<input type=text  name=fathercont value="  .  $record['fathercont'] . " </td>";
		echo "<td>"  . "<input type=text  name=fatheroccu value=" .  $record['fatheroccu'] . " </td>";
		echo "<td>"  . "<input type=text  name=mothername value="  .  $record['mothername'] . " </td>";
		echo "<td>"  . "<input type=text  name=mothercont value="  .  $record['mothercont'] . " </td>";
		echo "<td>"  . "<input type=text  name=motheroccu value=" .  $record['motheroccu'] . " </td>";
		echo "<td>"  . "<input type=text  name=guardname value=" .  $record['guardname'] . " </td>";
		echo "<td>"  . "<input type=text  name=guardcont value="  .  $record['guardcont'] . " </td>";
		echo "<td>"  . "<input type=text  name=Religion value="  .  $record['Religion'] . " </td>";
		echo "<td>"  . "<input type=text  name=Community value=" .  $record['Community'] . " </td>";
		echo "<td>"  . "<input type=text  name=Caste value=" .  $record['Caste'] . " </td>";
		echo "<td>"  . "<input type=text  name=Nationality value=" .  $record['Nationality'] . " </td>";
		echo "<td>"  . "<input type=text  name=doadm value=" .  $record['doadm'] . " </td>";
		
		echo "<td>"  . "<input type=hidden  name=hidden value="  .  $record['adm_no'] . " </td>";
		
		echo "<td>"  . "<input type=submit  name=update value=update"  . " </td>";
		
		echo  "</form>";
	}
	echo "</table>";
	mysql_close($conn );
?>
</body>
</html>

	
	
	
	