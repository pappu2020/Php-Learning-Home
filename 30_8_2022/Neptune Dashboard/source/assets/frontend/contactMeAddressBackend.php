<?php
session_start();
require_once("../../DbConnect/db_connect.php");

$contactAddress = $_POST["contactAddress"];
$contactEmail = $_POST["contactEmail"];
$ContactPhone = $_POST["ContactPhone"];
$Contact_Description = $_POST["Contact_Description"];







$flag = false;


if (isset($contactAddress)) {

    if ($contactAddress) {
        $contactAddressOld = $contactAddress;
    } else {
        $_SESSION["contactAddressError"] = "contact Address is required";
        $flag = true;
    }

    if ($contactEmail) {
        $contactEmailOld = $contactEmail;
    } else {
        $_SESSION["contactEmailError"] = "contact Email  is required";
        $flag = true;
    }

    if ($ContactPhone) {
        $ContactPhoneOld = $ContactPhone;
    } else {
        $_SESSION["ContactPhoneError"] = "Contact Phone is required";
        $flag = true;
    }

    if ($Contact_Description) {
        $CContactPhoneOld = $Contact_Description;
    } else {
        $_SESSION["Contact_DescriptionError"] = "Contact Description is required";
        $flag = true;
    }


    if ($flag) {
        header("location:contactMe.php");
    } else {

        $insertContactMeSec = "INSERT INTO contactmeaddress(contactAddress,contactEmail,ContactPhone,Contact_Description) VALUES('$contactAddress','$contactEmail','$ContactPhone','$Contact_Description')";

        $insertResultContactMeSec = mysqli_query($con, $insertContactMeSec);

        if ($insertResultContactMeSec) {
            $_SESSION["insert_ContactMeAddress_success"] = "Insert Success!!";
          
           
            header("location:contactMe.php");
        }
    }


    
}
