<?php
session_start();


$Signemail = $_POST["Signemail"];
$Signpassword = $_POST["Signpassword"];



$localhost  = 'localhost';
$username = "root";
$Dbpassword = '';
$db = "home";

$con = mysqli_connect($localhost, $username, $Dbpassword, $db);



$encripted_pass = md5($Signpassword);

$signInCheck = "SELECT COUNT(*) AS 'signCheck' FROM users WHERE email='$Signemail' AND password='$encripted_pass'";

$signInCheckres = mysqli_query($con,$signInCheck);

if(mysqli_fetch_assoc($signInCheckres)['signCheck']==1){
    header("location:userPage.php");

    $_SESSION['signInsuccess'] = "Sign In success!!";
    $_SESSION['userEmail'] = $Signemail;

    $userIdFind = "SELECT id FROM users WHERE email = '$Signemail' AND password='$encripted_pass'";
    $userIdFindRes = mysqli_query($con, $userIdFind);

    $userId = mysqli_fetch_assoc($userIdFindRes)['id'];

    $_SESSION['userId'] = $userId;
}

else{
    header("location:signIn.php");

    $_SESSION['signInFailed'] = "Email or Password did not matched!!!";
}
