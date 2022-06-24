<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1>Welcome To The Home Page</h1>
        <a href="./signInFormHomePrac.php" class="btn btn-info">Sign In</a>
        <a href="./signupFormclassHomePrac.php" class="btn btn-info">Sign Up</a>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php

$signInEmail = $_POST["signInEmail"];
$signInPass = $_POST["signInPass"];



$servername = "localhost";
$username = "pappu";
$password = "password";
$dbname = "neptune";


// create Connection

$conSignIn = mysqli_connect($servername, $username, $password, $dbname);

// check connection

if (!$conSignIn) {
    die("Connection Failed: " . mysqli_connect_error());

    header("location:signInFormHomePrac.php");
}


$sqlEmail = "SELECT * FROM users WHERE Email = '$signInEmail'  ";
$resultEmail = mysqli_query($conSignIn, $sqlEmail);
$checkEmail = mysqli_fetch_array($resultEmail);

$sqlpassword = "SELECT * FROM users WHERE Email = '$signInEmail' AND Password = '$signInPass'  ";
$resultpassword = mysqli_query($conSignIn, $sqlpassword);
$checkpassword = mysqli_fetch_array($resultpassword);



if ($signInEmail) {

    if (isset($checkEmail)) {
        $SignInemailData = $signInEmail;

        $_SESSION["signInEmail_old"] = $signInEmail;
    } else {
        $_SESSION["signInEmail_error"] = "Email Not Found";
        header("location:signInFormHomePrac.php");
    }
} else {
    $_SESSION["signInEmail_error"] = "Email is required. Please Enter the valid Email";
    header("location:signInFormHomePrac.php");
}


if($signInPass){
    if(isset($checkpassword)){
        $signInPassData = $signInPass;
        $_SESSION["signInPass_old"] = $signInPass;
    } else {
        $_SESSION["signInpass_error"] = "Password not match";
        header("location:signInFormHomePrac.php");
    }
} else {
    $_SESSION["signInpass_error"] = "Password is required. Please Enter the Password";
    header("location:signInFormHomePrac.php");
}


mysqli_close($conSignIn);
?>