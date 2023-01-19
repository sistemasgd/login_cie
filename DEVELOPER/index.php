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
    <?php include '../components/includes_css.php'; ?>
</head>

<body>
    <?php include '../components/nav.php'; ?>
    <h1>BIENVENIDO <?= $var2 ?></h1>
    DEVELOPER HOME


    <?php include '../components/includes_js.php'; ?>
</body>

</html>