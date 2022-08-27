<?php
session_start();
// $serverDataProfile = $_SERVER['PHP_SELF'];
// $serverDataProfileVar=explode('/', $serverDataProfile)[8];
// $_SESSION['serverDataProfileSession'] = $serverDataProfileVar; 







$nameChange = $_POST['nameChange'];
$nameChangeButton = $_POST['nameChangeButton'];

$emailChange = $_POST['emailChange'];
$emailChangeButton = $_POST['emailChangeButton'];

$delete = $_POST['delete'];
$deleteBtn = $_POST['deleteBtn'];


$username = "root";
$passwordDb = "";
$db = "home";


$con = mysqli_connect($localhost, $username, $passwordDb, $db);


$updateEmail = $_SESSION["signInEmailUser"];
$userid =  $_SESSION['idDataFromDbSession'];




// if(isset($nameChangeButton)){
//     $sqlUpdateName = "UPDATE users SET name='$nameChange' WHERE email='$updateEmail'";

//     if (mysqli_query($con, $sqlUpdateName)) {
//         header("location:profile.php");
//         $_SESSION["updateSuccess"] = "Update Success.";
//     }
// }



    if (isset($nameChangeButton)) {
    if ($nameChange) {

        $nameCheckForUpdate = "SELECT COUNT(*) AS 'duplicatenameForUpdate' FROM users WHERE name ='$nameChange'";
        $nameCheckForUpdateRes = mysqli_query($con, $nameCheckForUpdate);

        if (mysqli_fetch_assoc($nameCheckForUpdateRes)['duplicatenameForUpdate'] == 1) {
            header("location:profile.php");
            $_SESSION["duplicate_name"] = "Sorry!! This( " . $nameChange . " ) Name is already exits.Try another one";
        } else {

            $sqlUpdateName = "UPDATE users SET name='$nameChange' WHERE email='$updateEmail'";

            if (mysqli_query($con, $sqlUpdateName)) {
                header("location:profile.php");
                // $_SESSION["updatedName"] = $nameChange;
                $_SESSION['nameDataFromDbSession'] = $nameChange;
                $_SESSION["updateSuccess"] = "Update Success.";
                header("location:profile.php");
            }
        }
    } else {
        $_SESSION["updateErrorName"] = "Please Enter the Name";
        header("location:profile.php");
    }
}
 































    if (isset($emailChangeButton)) {
    if ($emailChange) {

        $emailCheckForUpdate = "SELECT COUNT(*) AS 'duplicateEmailForUpdate' FROM users WHERE email ='$emailChange'";
        $emailCheckForUpdateRes = mysqli_query($con, $emailCheckForUpdate);

        if (mysqli_fetch_assoc($emailCheckForUpdateRes)['duplicateEmailForUpdate'] == 1) {
            header("location:profile.php");
            $_SESSION["duplicate_email"] = "Sorry!! This( " . $emailChange . " ) email is already exits.Try another one";
        } else {

            $sqlUpdateEmail = "UPDATE users SET email='$emailChange' WHERE email='$updateEmail'";

            if (mysqli_query($con, $sqlUpdateEmail)) {
                $_SESSION["signInEmailUser"] = $emailChange;
                $_SESSION["updateSuccessEmail"] = "Update Success.";
                header("location:profile.php");
            }
        }
    } 
    else {
        $_SESSION["updateErrorEmail"] = "Please Enter the Email";
        header("location:profile.php");
    }
}












if (isset($deleteBtn)) {

    if ($delete) {

        $idCheckForDelete = "SELECT COUNT(*) AS 'deleteCountId' FROM users WHERE id='$delete'";
        $idCheckForDeleteRes = mysqli_query($con, $idCheckForDelete);


        if (mysqli_fetch_assoc($idCheckForDeleteRes)['deleteCountId'] == 1) {
            $deleteQueary = "DELETE FROM users WHERE id='$delete'";
            $deleteResult = mysqli_query($con, $deleteQueary);

            if ($deleteResult) {
                $_SESSION['DeleteData'] = "Delete successfully done";
                header("location:profile.php");
            }
        } else {
            $_SESSION['DeleteData'] = "Id Not Found";
            header("location:profile.php");
        }
    } else {
        $_SESSION["DeleteFieldNull"] = "Please Enter the Id";
        header("location:profile.php");
    }
}








//photo upload section

// $photoUpload = $_POST["photoUpload"];
$photoUploadBtn = $_POST["photoUploadBtn"];


if(isset($_POST["photoUploadBtn"])){
    $namingPart = $_FILES["photoUpload"]["name"];
    $explodePart = explode(".", $namingPart);

    $extention = end($explodePart);
    $fullName = $userid.".". $extention;

    

    $tempLocation = $_FILES["photoUpload"]["tmp_name"];

    $newLocation = "uploads/profile/". $fullName;

    move_uploaded_file($tempLocation, $newLocation);


    $update_profile_pic = "UPDATE users SET default_profile_pic='$fullName' WHERE id='$userid'";

    if(mysqli_query($con,$update_profile_pic)){
        $_SESSION["UpdateProfileSuccess"] = "Profile Picture Updated";
        header("location:profile.php");
    }


    
}
