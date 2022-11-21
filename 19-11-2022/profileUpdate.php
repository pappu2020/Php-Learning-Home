<?php
session_start();

$localhost  = 'localhost';
$username = "root";
$Dbpassword = '';
$db = "home";

$con = mysqli_connect($localhost, $username, $Dbpassword, $db);

$userId = '';
$userEmail = '';

if (isset($_SESSION['userId']) && isset($_SESSION['userEmail'])) {
    $userId = $_SESSION['userId'];
    $userEmail = $_SESSION['userEmail'];
}



if(isset($_POST["nameChageBtn"])){
    $nameUpdate = $_POST["nameUpdate"];
    $updateName = "UPDATE users SET name ='$nameUpdate' WHERE id='$userId' AND email='$userEmail'";
    $updateNameRes = mysqli_query($con,$updateName);

    if($updateNameRes){
        header("location:userPage.php");

        $_SESSION['updateName'] = "Update success!!!";
    }
}


if(isset($_POST["imgChageBtn"])){
    $naming_part = $_FILES["imgUpload"]["name"];
    $explode_part = explode(".",$naming_part);
    $extension = end($explode_part);

    $fileName = $userId."-".time().".".$extension;

    $tempName = $_FILES["imgUpload"]["tmp_name"];

    $location = "uploads/profile/".$fileName;

    move_uploaded_file($tempName, $location);

    $updateImage = "UPDATE users SET default_profile_pic ='$fileName' WHERE id='$userId' AND email='$userEmail'";
    $updateImageRes = mysqli_query($con, $updateImage);

    if ($updateImageRes) {
        header("location:userPage.php");

        $_SESSION["updateImg"] = "Update success!!!";
    }
}


?>