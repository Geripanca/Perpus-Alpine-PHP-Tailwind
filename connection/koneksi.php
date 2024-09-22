<?php
$username = "root";
$password = "";
$hostname = "127.0.0.1";  
$port = 3306;


$dbConnect = mysqli_connect($hostname, $username, $password, "", $port)
or die("Gagal tersambung ke MySQL");

echo "Connected to MySQL";
echo "<br>";

$dbSelect = mysqli_select_db($dbConnect, "db_perpustakaan")
or die("Could not select database");
echo "Sambungan berhasil";
?>
