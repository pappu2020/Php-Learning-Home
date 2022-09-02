<?php
session_start();
require_once("../../DbConnect/db_connect.php");

$homeUserTitle = $_POST["homeUserTitle"];
$homeUserDescription = $_POST["homeUserDescription"];
$homeUploadBtn = $_POST["homeUploadBtn"];
$afterName;



// $photoUpload = $_POST["photoUpload"];


$flag = false;


if(isset($homeUploadBtn)){

    if ($homeUserTitle) {
        $homeUserTitleOld = $homeUserTitle;
    } else {
        $_SESSION["homeUserTitleError"] = "Title is required";
        $flag = true;
    }

    if ($homeUserDescription) {
        $homeUserDescriptionOld = $homeUserDescription;
    } else {
        $_SESSION["homeUserDescriptionError"] = "Description is required";
        $flag = true;
    }


    if($flag){
        header("location:homeSectionEdit.php");
    }

    else{

        $insertQuearyHomeSec= "INSERT INTO homesection(title,description) VALUES('$homeUserTitle','$homeUserDescription')";

        $insertResultHomeSec = mysqli_query($con, $insertQuearyHomeSec);

        if ($insertResultHomeSec) {
            $_SESSION["insert_HomeSec_success"] = "Insert Success!!";
            $_SESSION["afterName"] = $homeUserTitle;
            $afterName = $homeUserTitle;
            header("location:homeSectionEdit.php");
        }
    }


 $fullPath = $_FILES["photoUpload"]["name"];
 $explode = explode(".",$fullPath);
 $extensionPart = end($explode);



 $fullName = $homeUserTitle.".".$extensionPart;

 $_SESSION["fullNameSession"] = $fullName;

 $tempPath = $_FILES["photoUpload"]["tmp_name"];
 $newPath = "imgHome/".$fullName;

 move_uploaded_file($tempPath, $newPath);

 $updateHomePhoto = "UPDATE homesection SET defaultPhoto='$fullName' WHERE title='$afterName'";
 $updateHomePhotoRes = mysqli_query($con, $updateHomePhoto);

 if( $updateHomePhotoRes){
        $_SESSION["Photo_update_success"] = "Update Success!!";
        
        header("location:homeSectionEdit.php");
 }
}









?>