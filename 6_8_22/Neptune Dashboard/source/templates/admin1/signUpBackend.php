<?php 
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$flag= false;

if($name){
    if(preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $_SESSION["name_old"]=$name;
    }
    else{
        $_SESSION["name_error"] = "Invalid name!! Please Enter the valid name.";
        $flag=true;
    }
}

else{
    $_SESSION["name_error"] = "Name is requied.Please, Enter the name";
    $flag = true;
}



if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email_old"] = $email;
    } else {
        $_SESSION["email_error"] = "Invalid email!! Please Enter the valid email.";
        $flag = true;
    }
} else {
    $_SESSION["email_error"] = "email is requied.Please, Enter the email";
    $flag = true;
}



if($password){
    if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)){
        $_SESSION["password_old"] = $password;
    } else {
        $_SESSION["password_error"] = "
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
    $_SESSION["password_error"] = "Password is requied.Please, Enter the Password";
    $flag = true;
}

if($confirmPassword){
    if($confirmPassword == $password){
        $_SESSION["confirmPass_old"] = $confirmPassword;
    }

    else{
        $_SESSION["confirmPass_error"]="Password do not matched.Please reenter the password.";
        $flag = true;
    }
}

else{
     $_SESSION["confirmPass_error"]="Please Enter the password again.";
    $flag = true;
}


if($flag){
    header("location:sign-up.php");
}

else{
    $localhost = "localhost";
    $username= "root";
    $passwordDb = "";
    $db = "home";
    $encripted_password = md5($password);

    $con = mysqli_connect($localhost,$username,$passwordDb,$db);

    $emailCheck = "SELECT COUNT(*) AS 'duplicateEmail' FROM users WHERE email ='$email'";
    $emailCheckRes = mysqli_query($con,$emailCheck);

    if(mysqli_fetch_assoc($emailCheckRes)['duplicateEmail']==1){
        header("location:sign-up.php");
        $_SESSION["duplicate_email"] = "Sorry!! This( ".$email. " ) email is already exits.Try another one";

    }

    else{
        $insertQueary = "INSERT INTO users(name,email,password) VALUES('$name','$email','$encripted_password')";
        $insertResult = mysqli_query($con,$insertQueary);

        if($insertResult){
            $_SESSION["insert_data_success"] = "Congratuations!! Your registration is successfully done.";
            header("location:sign-in.php"); 
        }

       
    }
}
