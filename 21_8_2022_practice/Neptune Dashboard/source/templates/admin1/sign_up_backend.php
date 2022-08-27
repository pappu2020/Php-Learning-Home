<?php 
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_pass = $_POST["confirm_pass"];
$flag = false;

if($name){
    if(preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $_SESSION["name_old"]=$name;
    }
    else{
        $_SESSION["name_error"] = "Invalid name";
        $flag=true;
    }
} else {
    $_SESSION["name_error"] = "Name is required";
    $flag = true;
}


if($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION["email_old"] = $email;
    } else {
        $_SESSION["email_error"] = "Invalid email";
        $flag = true;
    }
    
} else {
    $_SESSION["email_error"] = "Email is required";
    $flag = true;
}


if($password){
    if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)){
        $_SESSION["password_old"] = $password;
    } else {
        $_SESSION["password_error"] = "
        1.at least one lowercase char
        2.at least one uppercase char
        3.at least one digit
        4.at least one special sign of @#-_$%^&+=§!?
        
        ";
        $flag = true;
    }


} else {
    $_SESSION["password_error"] = "password is required";
    $flag = true;
}

if($confirm_pass){
    if($confirm_pass == $password){
        $_SESSION["Confirm_password_old"] = $confirm_pass;
    } else {
        $_SESSION["confirm_password_error"] = "password did not matched";
        $flag = true;
    }
} else {
    $_SESSION["confirm_password_error"] = "Confirm password is required";
    $flag = true;
}



if($flag){
    header("location:sign-up.php");
}

else{
    $localhost="localhost";
    $username="root";
    $passwordDb="";
    $db = "home";
    $encripted_pass = md5($password);

    $con = mysqli_connect($localhost, $username, $passwordDb, $db);

    $emailCheck = "SELECT COUNT(*) AS 'email_check_count' FROM users WHERE email='$email'";
    $emailCheckRes = mysqli_query($con,$emailCheck);


    if(mysqli_fetch_assoc($emailCheckRes)['email_check_count']==1){
        $_SESSION["confirm_password_error"] = "This (".$email ." ) is not available.";
        header("location:sign-up.php");
    }

    else{
        $insertData = "INSERT INTO users(name,email,password) VALUES('$name','$email','$encripted_pass')";
        $insertDataRes = mysqli_query($con, $insertData);

        $_SESSION["signUpSuccess"] = "Congratuations!! Your registration is successfully done";
        header("location:sign-in.php");
    }

}












?>