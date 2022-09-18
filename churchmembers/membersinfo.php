<?php
	$phoneno 		= 	$_POST['phoneno'];
	$emailaddress 	= 	$_POST['emailaddress'];
	$birthday 		= 	$_POST['birthday'];
	$sex 			= 	$_POST['sex'];
	$fullname 		= 	$_POST['fullname'];
	
	$dbcon	= mysqli_connect("localhost","root","","churchmembers") or die("Database Connection failed");
	
	$sql = "INSERT INTO membersinfo(phoneno,emailaddress,birthday,sex,fullname)VALUES('$phoneno','$emailaddress','$birthday','$sex','$fullname')";
	mysqli_query($dbcon,$sql) or die(mysqli_error($dbcon));
	echo "Record successfully Inserted";
	echo "<br><br>";
	echo "<a href='memberinfo.html'>Back</a>";
?>