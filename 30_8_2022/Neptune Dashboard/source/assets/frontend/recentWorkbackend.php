<?php
session_start();
require_once("../../DbConnect/db_connect.php");


$recentIcon = $_POST["recentIcon"];
$recentNumber = $_POST["recentNumber"];
$recentDescription = $_POST["recentDescription"];
$flag = false;




    if ($recentIcon) {
        $recentIconOld = $recentIcon;
    } else {
        $_SESSION["recentIconError"] = "Icon is required";
        $flag = true;
    }

    if ($recentNumber) {
        $recentNumberOld = $recentNumber;
    } else {
        $_SESSION["recentNumberError"] = "Number  is required";
        $flag = true;
    }

    if ($recentDescription) {
        $recentDescriptionOld = $recentDescription;
    } else {
        $_SESSION["recentDescriptionError"] = "Description is required";
        $flag = true;
    }

    if($flag){
    header("location:recentWorkEdit.php");
    }


    else{
    $insertQuearyRecent = "INSERT INTO recentworks(recentIcon,recentNumber,recentDescription) VALUES('$recentIcon ','$recentNumber','$recentDescription')";

    $insertResultRecent = mysqli_query($con, $insertQuearyRecent);

    if ($insertResultRecent) {
        $_SESSION["insert_Recent_success"] = "Insert Success!!";
        header("location:recentWorkEdit.php");
    }
    }
