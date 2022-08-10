<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];

$_SESSION["pappu"] = $name;










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
    <a href="./second.php">Second Page</a>
    <a href="./third.php">Third Page</a>
</body>

</html>