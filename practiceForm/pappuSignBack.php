<?php
session_start();
$email = $_POST["email"];
$name=$_POST["name"];
$password = $_POST["password"];
$Confirm_password=$_POST["Confirm_password"];
$flag = false;

if($name){
    if(preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $_SESSION["name_old"]=$name;
    }
    else{
        $_SESSION["name_error"] = "Name format is not valid";
        $flag = true;
    }
} else {
    $_SESSION["name_error"] = "Name Is Required";
    $flag = true;
}

if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email_old"] = $email;
    } else {
        $_SESSION["email_error"] = "Email format is not valid";
        $flag = true;
    }
} else {
    $_SESSION["email_error"] = "Email Is Required";
    $flag = true;
}

if($password){
    if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)){
        $_SESSION["password_old"] = $password;
    } else {
        $_SESSION["password_error"] = "Password Should Be
        <br>
        1.at least one lowercase charecter.<br>
        2.at least one uppercase charecter.<br>
        3.at least one digit.<br>
        4.at least one special sign of @#-_$%^&+=§!?.
        
        
        ";
        $flag = true;
    }
}

else{
    $_SESSION["password_error"] = "Password is required";
    $flag = true;
}

if($Confirm_password){
    if($Confirm_password==$password){
        $_SESSION["Confirm_password_old"] = $Confirm_password;
    }

    else{
        $_SESSION["Confirm_password_error"] = "Password not matched";
        $flag = true;
    }


}

else{
    $_SESSION["Confirm_password_error"] = "Confirm Password is required";
    $flag = true;
}


if($flag){
    header("location:pappuSignUp.php");
}

else{
   $localhost="localhost";
   $username="root";
   $passwordDb="";
   $db="home";
   $encript_password = md5($password);
   $con = mysqli_connect($localhost, $username, $passwordDb, $db);
   $sql = "INSERT INTO users(Name,Email,Password) VALUES('$name','$email','$encript_password')";
   $result = mysqli_query($con,$sql);
    $_SESSION["signUpSuccess"] = "Congratualations!! Your Registration Successfully Done!";
   header("location:pappusahaLogin.php");
   
}




?>