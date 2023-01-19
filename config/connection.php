<?php

namespace Firebase\JWT;

require_once '../vendor/autoload.php';

$servername = "143.244.178.105";
$dataBase = "CIEtesting";
$username = "administrador";
$password = "admin1234";

$conn = mysqli_connect($servername, $username, $password, $dataBase);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


function jwt($idUser, $Email)
{
    // Token data
    $time = time();
    $key = 'abc123!';
    $token = array(
        "iat" => $time, // Tiempo que inicia el token
        "exp" => $time + (60 * 60 * 24), //Tiempo de expiracion de token 1 dia
        "data" => [
            'id' => $idUser,
            "email" => $Email
        ]
    );
    $jwt = JWT::encode($token, $key, 'HS256');

    return $jwt;
}



//echo "Connected successfully";



//mysqli_close($conn);