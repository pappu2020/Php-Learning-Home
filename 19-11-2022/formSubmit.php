<?php 
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$Confirmpassword = $_POST["Confirmpassword"];

$flag = false;



if($name){
    if (preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $name_old = $name;
        
    } else {
        $_SESSION["name_error"] = "Enter the valid name";
        $flag = true;
    }

}
else{
    $_SESSION["name_error"] = "Name is required";
    $flag = true;
}


if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_old = $email;
    } else {
        $_SESSION["email_error"] = "Enter the valid email";
        $flag = true;
    }
} else {
    $_SESSION["email_error"] = "email is required";
    $flag = true;
}


if ($password) {
    if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)) {
        $password_old = $password;
    } else {
        $_SESSION["password_error"] = "
        password should be...
        
        at least one lowercase char
        at least one uppercase char
        at least one digit
        sat least one special sign of @#-_$%^&+=§!?

        ";
        $flag = true;
    }
} else {
    $_SESSION["password_error"] = "password is required";
    $flag = true;
}


if($Confirmpassword){
    if($Confirmpassword == $password){
        $Confirmpassword_old = $Confirmpassword;
    }
    else {
    $_SESSION["Confirmpassword_error"] = "password do not matched!!!";
    $flag = true;
}
} else {
    $_SESSION["Confirmpassword_error"] = "confirm password is required";
    $flag = true;
}


if($flag){
    header("location:form.php");
}


else{
    $localhost  = 'localhost';
    $username = "root";
    $Dbpassword= '';
    $db = "home";

    $con = mysqli_connect($localhost,$username,$Dbpassword,$db);

    $emailCheck = "SELECT COUNT(*) AS 'duplicate_eamil' FROM users WHERE email ='$email'";
    $emailCheckRes = mysqli_query($con,$emailCheck);


    if(mysqli_fetch_assoc($emailCheckRes)['duplicate_eamil']==1){
        header("location:form.php");
        $_SESSION["RegSuccessOrNot"] = "This email is already taken";
    }

    else{
        $passwordEncripted = md5($password);
        $insertQueary = "INSERT INTO users(name,email,password) VALUES('$name','$email','$passwordEncripted')";
        $insertRes = mysqli_query($con,$insertQueary);


        if($insertRes){
            header("location:form.php");
            $_SESSION["RegSuccessOrNot"] = "Registration success!!!";
        }
    }
}
