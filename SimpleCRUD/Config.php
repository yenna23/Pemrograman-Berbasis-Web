<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="modul5";
	
	$conn= mysqli_connect($server, $username, $pass, $dbname);
	if (!$conn) {
		die ("Conncetion failed: ".mysqli_connect_error());
	}
	//echo "Connceted Successfully";
?>

</body>
</html>