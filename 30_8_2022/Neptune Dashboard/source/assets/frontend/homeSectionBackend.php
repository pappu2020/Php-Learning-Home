<?php
session_start();
require_once("../../DbConnect/db_connect.php");

$homeUserTitle = trim(htmlentities($_POST["homeUserTitle"]));
$homeUserDescription =trim(htmlentities($_POST["homeUserDescription"]));
$homeUploadBtn = $_POST["homeUploadBtn"];
$homeUploadPictureBtn = $_POST["homeUploadPictureBtn"];
$photoUpload = $_FILES["photoUpload"];
$typeImage = ['jpg','jpeg','png'];
$afterName;





$flag = false;


if (isset($homeUploadBtn)) {

    if ($homeUserTitle) {
        $homeUserTitleOld = $homeUserTitle;
    } else {
        $_SESSION["homeUserTitleError"] = "Title is required";
        $flag = true;
    }

  

    if ($homeUserTitle) {
        $homeUserDescriptionOld = $homeUserDescription;
    } else {
        $_SESSION["homeUserDescriptionError"] = "Description is required";
        $flag = true;
    }

 


    if ($flag) {
        header("location:homeSectionEdit.php");
    } else {
        $insertQuearyHomeSec = "INSERT INTO homesection(title,description) VALUES('$homeUserTitle','$homeUserDescription')";

        $insertResultHomeSec = mysqli_query($con, $insertQuearyHomeSec);

        if ($insertResultHomeSec) {
            $_SESSION["insert_HomeSec_success"] = "Insert Success!!";
            $_SESSION["afterName"] = $homeUserTitle;
            $afterName = $homeUserTitle;
            header("location:homeSectionEdit.php");
            unset($_SESSION["homeUserDescriptionError"]);
            unset($_SESSION["homeUserTitleError"]);
        }


    }
}

if(isset($homeUploadPictureBtn)){

    if ($photoUpload) {
        $fullPath = $_FILES["photoUpload"]["name"];
        $explode = explode(".", $fullPath);
        $extensionPart = end($explode);


        $getName = "SELECT title FROM homesection";
        $getNameRes= mysqli_query($con,$getName);
        $getnameAssoc = mysqli_fetch_assoc($getNameRes)["title"];



        $fullName = $getnameAssoc  ."-".time(). "." . $extensionPart;

        $_SESSION["fullNameSession"] = $fullName;

        $tempPath = $_FILES["photoUpload"]["tmp_name"];
        $newPath = "imgHome/" . $fullName;


        $imageTypeCheck = in_array(strtolower($extensionPart), $typeImage);

        $imageSize = $_FILES["photoUpload"]["size"];
        if ($imageTypeCheck === true) {
            if ($imageSize <= 10000000) {



                move_uploaded_file($tempPath, $newPath);

                $updateHomePhoto = "UPDATE homesection SET defaultPhoto='$fullName' WHERE title='$getnameAssoc'";
                $updateHomePhotoRes = mysqli_query($con, $updateHomePhoto);

                if (
                    $updateHomePhotoRes
                ) {
                    $_SESSION["Photo_update_success"] = "Update Success!!";

                    header("location:homeSectionEdit.php");
                    unset($_SESSION["Photo_Insert_error"]);
                   
                }
            } else {
                $_SESSION["Photo_Insert_error"] = "photo size must be less than or equal to 10mb";

                header("location:homeSectionEdit.php");
            }
        } else {
            $_SESSION["Photo_Insert_error"] = "photo must be jpg/jpeg/png format";

            header("location:homeSectionEdit.php");
        }
    } else {
        $_SESSION["Photo_Insert_error"] = "Banner Photo is required";
        $flag = true;
    }



}



?>


