<?php

session_start();

require_once('db.php');




$name = $_POST["name"];

$email = $_POST["email"];
$password = $_POST["password"];
$confirm_pass = $_POST["confirm_pass"];


$flag = false;


if ($name) {
    if (preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $_SESSION["old_name_admin"] = $name;
    } else {
        $_SESSION["name_error_admin"] = "Name is invalid";
        $flag = true;
    }
} else {
    $_SESSION["name_error_admin"] = "Name is Required";
    $flag = true;
}

if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["old_email_admin"] = $email;
    } else {
        $_SESSION["email_error_admin"] = "Invalid Email";
        $flag = true;
    }
} else {
    $_SESSION["email_error_admin"] = "Email is required";
    $flag = true;
}




if ($password) {
    if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)) {
        $_SESSION["password_old_admin"] = $password;
    } else {
        $_SESSION["password_error_admin"] = "
        Password Should be...
        <br>
        1.at least one lowercase char
        <br>
        2.at least one uppercase char
        <br>
        3.at least one digit
        <br>
        4.at least one special sign of @#-_$%^&+=§!?
        
        
        
        
        ";
        $flag = true;
    }
} else {
    $_SESSION["password_error_admin"] = "Password is requied.Please, Enter the Password";
    $flag = true;
}

if ($confirm_pass) {
    if ($confirm_pass == $password) {
        $_SESSION["confirmPass_old_admin"] = $confirm_pass;
    } else {
        $_SESSION["confirmPass_error_admin"] = "Password do not matched.Please reenter the password.";
        $flag = true;
    }
} else {
    $_SESSION["confirmPass_error_admin"] = "Please Enter the password again.";
    $flag = true;
}




if ($flag) {
    header("location:../adminSign-up.php");
}
 else {
   

    $emailCheckAdminQueary = "SELECT COUNT(*) AS 'emailCheckAdmin' FROM admin WHERE email = '$email'";
    $emailCheckAdminQuearyRes = mysqli_query($con, $emailCheckAdminQueary);

    if (mysqli_fetch_assoc($emailCheckAdminQuearyRes)['emailCheckAdmin'] == 1) {
        $_SESSION["email_duplicate_admin"] = "This email is already taken.Try another one";
        header("location:../adminSign-up.php");
    } else {
        $encripted_pass=md5($password);
        $insertDataAdmin = "INSERT INTO admin(name,email,password) VALUES('$name','$email','$encripted_pass')";

        $insertDataAdminRes = mysqli_query($con, $insertDataAdmin);

        if ($insertDataAdminRes) {
            $_SESSION["insertSuccessAdmin"] = "Congratualations!! Your Registration is successfully done.You can Sign In now.";
            header("location:../adminSign-up.php");
        }
    }
}


?>