<?php
session_start();
require_once("../../DbConnect/db_connect.php");

$aboutMeDescription = $_POST["aboutMeDescription"];
$aboutMerYear = $_POST["aboutMerYear"];
$aboutMeDegreeTitle = $_POST["aboutMeDegreeTitle"];
$aboutMePercentage = $_POST["aboutMePercentage"];







$flag = false;




// if ($aboutMeDescription) {
//     $aboutMeDescriptionOld = $aboutMeDescription;
// } else {
//     $_SESSION["aboutMeDescriptionError"] = "Description Title is required";
//     $flag = true;
// }

if ($aboutMerYear) {
    $aboutMerYearOld = $aboutMerYear;
} else {
    $_SESSION["aboutMerYearError"] = "Year is required";
    $flag = true;
}

if ($aboutMeDegreeTitle) {
    $aboutMeDegreeTitleOld = $aboutMeDegreeTitle;
} else {
    $_SESSION["aboutMeDegreeTitleError"] = "DegreeTitle is required";
    $flag = true;
}

if ($aboutMePercentage) {
    $aboutMePercentageOld = $aboutMePercentage;
} else {
    $_SESSION["aboutMePercentageError"] = "Percentage is required";
    $flag = true;
}


if ($flag) {
    header("location:aboutMeSectionEdit.php");
} else {

    $insertQuearyAboutMeSec = "INSERT INTO AboutMe(aboutMeDescription,aboutMerYear,aboutMeDegreeTitle,aboutMePercentage) VALUES('$aboutMeDescription','$aboutMerYear','$aboutMeDegreeTitle','$aboutMePercentage')";

    $insertResultAboutMeSec = mysqli_query($con, $insertQuearyAboutMeSec);

    if ($insertResultAboutMeSec) {
        $_SESSION["insert_AboutMe_success"] = "Insert Success!!";
      
        
        header("location:aboutMeSectionEdit.php");
    }



    
}
