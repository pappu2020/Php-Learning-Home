<?php
session_start();
$signIn_email = $_POST["signIn_email"];
$signIn_pass = $_POST["signIn_pass"];
$flag = false;

if($signIn_email){
    $_SESSION["SignIn_email_old"] = $signIn_email;
}
else{
    $_SESSION["Sign_email_error"] = "Email is required";
    $flag = true;
}

if ($signIn_pass) {
    $_SESSION["SignIn_pass_old"] = $signIn_pass;
} else {
    $_SESSION["SignIn_pass_error"] = "Password  is required";
    $flag = true;
}

if($flag){
    header("location:sign-in.php");
}

else{
    $localhost = "localhost";
    $username = "root";
    $passwordDb = "";
    $db = "home";
    $encripted_pass_signIn = md5($signIn_pass);

    $con = mysqli_connect($localhost, $username, $passwordDb, $db);

    $signInCheck = "SELECT COUNT(*) AS 'Sign_In_Check' FROM users WHERE email='$signIn_email' AND password='$encripted_pass_signIn'";
    $signInCheckRes = mysqli_query($con, $signInCheck);


    if (mysqli_fetch_assoc($signInCheckRes)['Sign_In_Check'] == 1) {

        $_SESSION["SignIn_Email"]= $signIn_email;

        $allDataQueary = "SELECT id,name FROM users WHERE email='$signIn_email'";
        $allDataQuearyRes = mysqli_query($con, $allDataQueary);

        $nameData = mysqli_fetch_assoc($allDataQuearyRes)['name'];
        $idData = mysqli_fetch_assoc($allDataQuearyRes)['id'];

        $_SESSION['nameDataSession']= $nameData;
        $_SESSION['idDataSession'] = $idData;
        
        header("location:index.php");
    }else{
        header("location:sign-in.php");
        $_SESSION["SignIn_Error"] = "Email or Password is wrong";
    }
}















?>