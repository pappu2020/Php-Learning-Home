<?php

session_start();
require_once('db.php');

$emailAdmin = $_POST["emailAdmin"];
$passwordAdmin = $_POST["passwordAdmin"];
$flag = false;


if ($emailAdmin) {
    if (filter_var($emailAdmin, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["old_email_admin"] = $emailAdmin;
    } else {
        $_SESSION["email_error_admin"] = "Invalid Email";
        $flag = true;
    }
} else {
    $_SESSION["email_error_admin"] = "Email is required";
    $flag = true;
}

if($passwordAdmin){
    $_SESSION["old_Password_admin"] = $passwordAdmin;
} else {
    $_SESSION["password_error_admin"] = "Password is required";
    $flag = true;
}

if($flag){
    header("location:../adminSign-in.php");
}

else{

    $emailCheck = "SELECT COUNT(*) AS 'emailcheck' FROM admin WHERE email='$emailAdmin'";

    $emailCheckRes = mysqli_query($con,$emailCheck);


    if(mysqli_fetch_assoc($emailCheckRes)["emailcheck"]==1){
        $_SESSION["admin_logIn_success"] = "Login Success";
        header("location:adminDashboard.php");
    }

    else{
        $_SESSION["admin_logIn_fail"] = "Email or Password do not matched!!";
        header("location:../adminSign-in.php");
    }

}
















?>