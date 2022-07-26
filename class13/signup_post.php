<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;
$preg_matchs= preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password);

if ($name) {
 
    if (ctype_alpha($name)) {
         $_SESSION ['old_name'] =$name;
    }
    else{
        $flag = true;
        $_SESSION ['name_error'] = "Name Is Invalid!";
    }

  
}
else {
    $flag = true;
    $_SESSION ['name_error'] = "Name Is Required!";
}
// Name End 

if ($email) {
   if ( filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION ['old_email'] =$email;
   }
   else{
    $flag = true;
    $_SESSION ['email_error'] = "Email Is Invalid!";
   }
   
}
else {
    $flag = true;
    $_SESSION ['email_error'] = "Email Is Required!";
}


// Email End 
if ($password) {
   if ( strlen($password)>= 8) {
   
   }
   else{
    $flag = true;
    $_SESSION ['password_error'] = "Password Should Be More Than 8 Chr";
   }
}
else {
    $flag = true;
    $_SESSION ['password_error'] = "Password Is Required!";
}
if ($confirm_password) {
   
}
else {
    $flag = true;
    $_SESSION ['confirm_password_error'] = "Confirm Password Is Required!";
    
}

if ($password != $confirm_password) {
    $_SESSION ['password_error'] = "Password Not Matched!";
}
if($preg_matchs!=1){
    $_SESSION ['password_error'] = "Password Should Be S,N,l,L";
}

if ($flag) {
    header('location: signup.php');
}
else{
   
    $encript_password = md5($password);
   $localhost = "localhost";
   $username = "root";
   $password="";
   $db = "nat_boltu";

   $con = mysqli_connect($localhost,$username,$password,$db);
   $insertQueary="INSERT INTO users(name,email,password) VALUES('$name','$email','$encript_password')";
   mysqli_query($con,$insertQueary);
    $_SESSION ['signup_success'] = "Your Account Created Successfully!";
    header('location: signin.php');

    
}

?>





