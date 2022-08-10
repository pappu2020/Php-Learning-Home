<?php
session_start();
$nameChange = $_POST['nameChange'];
$nameChangeButton = $_POST['nameChangeButton'];

$emailChange = $_POST['emailChange'];
$emailChangeButton = $_POST['emailChangeButton'];

$localhost = "localhost";
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

    $nameCheckForUpdate = "SELECT COUNT(*) AS 'duplicatenameForUpdate' FROM users WHERE name ='$nameChange'";
    $nameCheckForUpdateRes = mysqli_query($con, $nameCheckForUpdate);

    if (mysqli_fetch_assoc($nameCheckForUpdateRes)['duplicatenameForUpdate'] == 1) {
        header("location:profile.php");
        $_SESSION["duplicate_name"] = "Sorry!! This( " . $nameChange . " ) Name is already exits.Try another one";
    } else {

        $sqlUpdateName = "UPDATE users SET name='$nameChange' WHERE email='$updateEmail'";

    if (mysqli_query($con, $sqlUpdateName)) {
        header("location:profile.php");
        $_SESSION["updateSuccess"] = "Update Success.";
    }
    }
}





















if (isset($emailChangeButton)) {

        $emailCheckForUpdate = "SELECT COUNT(*) AS 'duplicateEmailForUpdate' FROM users WHERE email ='$emailChange'";
        $emailCheckForUpdateRes = mysqli_query($con, $emailCheckForUpdate);

        if (mysqli_fetch_assoc($emailCheckForUpdateRes)['duplicateEmailForUpdate'] == 1) {
            header("location:profile.php");
            $_SESSION["duplicate_email"] = "Sorry!! This( " . $emailChange . " ) email is already exits.Try another one";
        }

        else{

            $sqlUpdateEmail = "UPDATE users SET email='$emailChange' WHERE email='$updateEmail'";

            if (mysqli_query($con, $sqlUpdateEmail)) {
                header("location:profile.php");
                $_SESSION["updateSuccessEmail"] = "Update Success.";
            }

        } 


    
}
