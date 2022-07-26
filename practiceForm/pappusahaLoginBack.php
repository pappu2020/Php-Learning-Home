<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

$_SESSION["emailOldForUpdate"]=$email;


$localhost = "localhost";
$username = "root";
$passwordDb = "";
$db = "home";
$encript_password = md5($password);
$con = mysqli_connect($localhost, $username, $passwordDb, $db);

$logInData = "SELECT COUNT(*) AS 'result' FROM users WHERE Email='$email' AND Password='$encript_password' ";

$loginDataResult = mysqli_query($con, $logInData);

$findName = "SELECT Name FROM users WHERE Email='$email' AND Password='$encript_password'";
$ResultUsersName = mysqli_query($con, $findName);


if (mysqli_num_rows($ResultUsersName) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($ResultUsersName)) {
        $_SESSION["UserName"] = $row["Name"];
    }
} else {
    echo "0 results";
}




if (mysqli_fetch_assoc($loginDataResult)['result'] == 1) {
    header("location:userHomePage.php");
    $_SESSION["emailUser"] = $email;
} else {
    header("location:pappusahaLogin.php");
    $_SESSION["wrongUserPass"] = "Wrong User Name or Password";
}
