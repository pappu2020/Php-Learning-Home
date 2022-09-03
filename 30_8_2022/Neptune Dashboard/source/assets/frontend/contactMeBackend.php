<?php
session_start();
require_once("../../DbConnect/db_connect.php");
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$flag = false;

if ($name) {
    if (preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $_SESSION["name_old"] = $name;
    } else {
        $_SESSION["name_error"] = "Invalid name!! Please Enter the valid name.";
        $flag = true;
    }
} else {
    $_SESSION["name_error"] = "Name is requied.Please, Enter the name";
    $flag = true;
}



if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email_old"] = $email;
    } else {
        $_SESSION["email_error"] = "Invalid email!! Please Enter the valid email.";
        $flag = true;
    }
} else {
    $_SESSION["email_error"] = "email is requied.Please, Enter the email";
    $flag = true;
}

if($flag){
    header("location:indexUsers.php");
}

else{
    $insertContactMeform = "INSERT INTO contactmeform(name,email,message) VALUES('$name','$email','$message')";

    $insertResultContactMeForm = mysqli_query($con, $insertContactMeform);

    if ($insertResultContactMeForm) {
        $_SESSION["insert_ContactMeForm_success"] = "Sent!";


        header("location:indexUsers.php");
    }
}



















?>