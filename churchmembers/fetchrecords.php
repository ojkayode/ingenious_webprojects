
<table border="1">
	<tr>
		<td>S/NO</td>
		<td>NAME</td>
		<td>SEX</td>
		<td>PHONE NUMBER</td>
		<td>BIRTH DAY</td>
		<td>EMAIL ADDRESS</td>
	</tr>
	<?php
		$dbcon	= mysqli_connect("localhost","root","","churchmembers") or die("Database Connection failed");
		
		$sql 	= 	"SELECT * FROM membersinfo";
		$query 	=	mysqli_query($dbcon,$sql) or die(mysqli_error($dbcon));
		$sn = 0;
		while($row=mysqli_fetch_assoc($query)){
			$sn++;
			$phoneno 		= 	$row['phoneno'];
			$emailaddress 	= 	$row['emailaddress'];
			$birthday 		= 	$row['birthday'];
			$sex 			= 	$row['sex'];
			$fullname 		= 	$row['fullname'];		
			echo "
			<tr>
				<td>$sn</td>
				<td>$fullname</td>
				<td>$sex</td>
				<td>$phoneno</td>
				<td>$birthday</td>
				<td>$emailaddress</td>
			</tr>";
		}
	?>	
</table>
<br><br>
<a href='memberinfo.html'>Back</a>