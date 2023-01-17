<?php
	
$servername = "143.244.178.105";
$dataBase = "CIEtesting";
$username = "administrador";
$password = "admin1234";

$conn = mysqli_connect($servername, $username, $password, $dataBase);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";



//mysqli_close($conn);