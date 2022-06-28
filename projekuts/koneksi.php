<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
$mysql_user="root";
$mysql_password="";
$mysql_database="bukutamu";
$mysql_host="localhost";
$koneksi_db = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_database);
mysqli_select_db($koneksi_db, $mysql_database);
?>
	
</body>
</html>