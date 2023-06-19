<?php
include '../controller/UserC.php';
$UserC = new UserC();
$UserC->deleteUser($_GET["idUser"]);
if(isset($_POST["idUser"])){
    $id=$_POST["idUser"];
    $UserC->deleteUser($id);}
header('Location:show.php');

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
    <form action="" class="sign-up-form" method="POST">
    <input type="number" name="idUser">
    <input type="submit" class="btn" value="Sign up" />
    </form>
</body>
</html>