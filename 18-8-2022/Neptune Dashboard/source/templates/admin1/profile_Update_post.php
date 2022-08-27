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




//password Change 
$old_password =md5($_POST['old_password']);
$new_password =md5($_POST['new_password']);
$confirm_password =md5($_POST['confirm_password']);
$password_change =md5($_POST['password_change']);

$userId =  $_SESSION['idDataFromDbSession'];

if(isset($password_change)){
    
    
    if($old_password){
        if($new_password){
           if($confirm_password){

                if($new_password == $confirm_password) {
                    $oldPasswordCheck = "SELECT COUNT(*) AS 'old_pass_check' FROM users WHERE password='$old_password'";

                    $oldPasswordCheckRes = mysqli_query($con, $oldPasswordCheck);

                    if (mysqli_fetch_assoc($oldPasswordCheckRes)['old_pass_check'] == 1) {
                        $updatePass = "UPDATE users SET password='$new_password' WHERE id='$userId' AND email='$updateEmail'";

                        $updatePassRes = mysqli_query($con, $updatePass);

                        if ($updatePassRes) {
                            $_SESSION['PasswordUpdateSuccess'] = "Password Changed Successfully";
                            header("location:profile.php");
                        } else {
                            $_SESSION['PasswordUpdateFail'] = "Error!!";
                            header("location:profile.php");
                        }
                    } else {
                        $_SESSION['PasswordUpdateDuplicate'] = "Password not Found.Please Enter the old password";
                        header("location:profile.php");
                    }
                } else {
                    $_SESSION['PasswordUpdateMatched'] = "Password do not matched";
                    header("location:profile.php");
                }
 
           } else {
                $_SESSION['PasswordCheck'] = "Confirm Password is Required";
                header("location:profile.php");
            }
        } else {
            $_SESSION['PasswordCheck'] = "New Password is Required";
            header("location:profile.php");
        }
    }

    else{
        $_SESSION['PasswordCheck'] = "Old Password is Required";
        header("location:profile.php");
    }
}
