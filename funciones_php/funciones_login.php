<?php

namespace Firebase\JWT;

require('../config/connection.php');

$res = array('error' => false);
$action = 'read';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


if ($action === 'login') {
    $user_email = trim($_POST["user_email"]);
    $user_password = trim($_POST["user_password"]);

    $result = $conn->query("SELECT u.*, d.Permissions, d.UserType, t.Token, t.Status 
    FROM users u INNER JOIN usersdetails d on u.IdUser = d.IdUser
    INNER JOIN userstokens t on u.IdUser = t.IdUser
    WHERE Email='$user_email' and Password='$user_password'");

    // $result = $conn->query("SELECT * FROM users  WHERE Email='$user_email' and Password='$user_password'");

    //Finded user
    if ($result->num_rows >= 1) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        //Create JWT
        $jwt = jwt($row['IdUser'], $row['Email']);

        //Update JWT
        if (updateToken($conn, $row['IdUser'], $jwt)) {
            session_start();
            //UserData
            $_SESSION['IdUser'] = $row['IdUser'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['LastName'] = $row['LastName'];
            $_SESSION['NickName'] = $row['NickName'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['ProfilePicture'] = $row['ProfilePicture'];

            //UserDetails
            $_SESSION['Permissions'] = $row['Permissions'];
            $_SESSION['UserType'] = $row['UserType'];

            //UserToken
            $_SESSION['Token'] = $row['Token'];
            $_SESSION['Status'] = $row['Status'];
            $res['error'] = false;
            $res['url'] = $_SESSION['UserType'];
        }
    } else {
        $res['error'] = true;
        $res['message'] = "Alerta! datos incorrectos";
    }
}

function updateToken($conn, $IdUser, $arr)
{
    return $conn->query("UPDATE userstokens SET Token ='" . $arr['jwt'] . "', Status = '" . $arr['exp'] . "' WHERE IdUser = $IdUser");
}

mysqli_close($conn);
header("Content-type: application/json");
echo json_encode($res);
die();
