<?php
session_start();
if ($_SESSION['Permissions'] !== '1') {
    header("location:../login.php");
}

$var1 = $_SESSION['IdUser'];
$var2 = $_SESSION['Name'];
$var3 = $_SESSION['LastName'];
$var4 = $_SESSION['NickName'];
$var5 = $_SESSION['Email'];
$var6 = $_SESSION['ProfilePicture'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    DEVELOPER HOME
    <?
    echo $var1;
    ?>
</body>

</html>