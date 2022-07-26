<?php
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);

$localhost = "localhost";
$username = "root";
$password = "";
$db = "nat_boltu";

$con = mysqli_connect($localhost, $username, $password, $db);

$sqlSignIn = "SELECT COUNT(*) AS 'result' FROM users WHERE email='$email'";

$sqlSignResult = mysqli_query($con,$sqlSignIn);

if(mysqli_fetch_assoc($sqlSignResult)['result']==1){
    
    $sqlNameId="SELECT id,name FROM users WHERE email='$email'";

    $sqlNameIdResult = mysqli_query($con,$sqlNameId);

    $sqlNameResult = mysqli_fetch_assoc($sqlNameIdResult)['name'];
    $sqlIdResult = mysqli_fetch_assoc($sqlNameIdResult)['id'];

    $_SESSION["nameDbSession"] = $sqlNameResult;
    $_SESSION["idDbSession"] = $sqlIdResult;
    
    $_SESSION['db_email'] = $email;
    header('location: backend/dashboard.php');
}

else{
    $_SESSION['login_error'] = "Email Or Password Not Match";
    header('location: signin.php');
}



?>




<!-- SELECT COUNT(*) AS 'result' FROM users WHERE email='ameena@live.com'; -->