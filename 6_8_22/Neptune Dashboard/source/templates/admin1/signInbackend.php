<?php
session_start();

$signInEmail = $_POST["signInEmail"];
$signInPassword = $_POST["signInPassword"];

$flag = false;



if ($signInEmail) {
    $_SESSION["email_old_signIn"] = $signInEmail;
} 

else {
    $_SESSION["email_SignIn_error"] = "email is requied.Please, Enter the email";
    $flag = true;
}

if ($signInPassword) {
    $_SESSION["password_old_signIn"] = $signInPassword;
} else {
    $_SESSION["password_SignIn_error"] = "password is requied.Please, Enter the password";
    $flag = true;
}

if($flag){
    header("location:sign-in.php");
}

else{
    $localhost = "localhost";
    $username = "root";
    $passwordDb = "";
    $db = "home";
    $encripted_password = md5($signInPassword);

    $con = mysqli_connect($localhost, $username, $passwordDb, $db);

    $signInCheck = "SELECT COUNT(*) AS 'signInResult' FROM users WHERE email ='$signInEmail' AND password='$encripted_password'";
    $signInCheckRes = mysqli_query($con, $signInCheck);

    if (mysqli_fetch_assoc($signInCheckRes)['signInResult'] == 1) {
        header("location:index.php");
        $_SESSION["signInEmailUser"]=$signInEmail;
        $idDataSql = "SELECT id FROM users WHERE email='$signInEmail'";
        $idDataResult = mysqli_query($con, $idDataSql);

        $idData = mysqli_fetch_assoc($idDataResult)['id'];

        $nameDataSql = "SELECT name FROM users WHERE email='$signInEmail'";
        $nameDataResult = mysqli_query($con, $nameDataSql);

        $nameData = mysqli_fetch_assoc($nameDataResult)['name'];
       

        

        $_SESSION["idDataFromDbSession"] = $idData;
        $_SESSION["nameDataFromDbSession"] = $nameData;
      
    }

    else{
        $_SESSION["signIn_error"] ="Email or Password is Wrong!!";
        header("location:sign-in.php");
    }
}








































?>