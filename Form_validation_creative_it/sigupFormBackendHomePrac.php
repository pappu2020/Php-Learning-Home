<?php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];


// $servername = "localhost";
// $username = "pappu";
// $password = "password";
// $dbname = "neptune";
// $con = mysqli_connect($servername, $username, $password, $dbname);

// if (!$con) {
//     die("Connection Failed: " . mysqli_connect_error());

//     header("location:signupFormclassHomePrac.php");
// }



if ($name) {

    if (preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        // echo "Name : " . $name;
        $nameData = $name;
        echo "<br>";
        $_SESSION["name_old"] = $name;
        // $sql = "INSERT INTO users (Name) VALUES ('$nameData')";
    } else {
        $_SESSION["name_error"] = " Please Enter the valid Name";
        header("location:signupFormclassHomePrac.php");
    }
} else {
    $_SESSION["name_error"] = "Name is required.";
    header("location:signupFormclassHomePrac.php");
}


if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // echo "Email : " . $email;
        $emailData = $email;
        echo "<br>";
        $_SESSION["email_old"] = $email;
        // $sql = "INSERT INTO users (Email) VALUES ('$emailData')";
    } else {
        $_SESSION["email_error"] = "Email is not valid";
        header("location:signupFormclassHomePrac.php");
    }
} else {
    $_SESSION["email_error"] = "Email is required. Please Enter the valid Email";
    header("location:signupFormclassHomePrac.php");
}


if ($password) {
    if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)) {
        // echo "Password : " . $password;
        $passwordData = $password;
        echo "<br>";
        $_SESSION["password_old"] = $password;
        // $sql = "INSERT INTO users (Password) VALUES ('$passwordData')";
    } else {
        $_SESSION["password_error"] = "
           
    
    1.At least one lowercase char.
    2.At least one uppercase char.
    3.At least one digit.
    4.At least one special sign of @#-_$%^&+=§!?
    5.Minimum 8 digit length.
    
    
        ";
        header("location:signupFormclassHomePrac.php");
    }
} else {
    $_SESSION["password_error"] = "
       
    Password Should be...<br>
    1.At least one lowercase char.<br>
    2.At least one uppercase char.<br>
    3.At least one digit.<br>
    4.At least one special sign of @#-_$%^&+=§!?<br>
    5.Minimum 8 digit length.
    
    
    ";
    header("location:signupFormclassHomePrac.php");
}


if ($confirm_password) {
    if ($password == $confirm_password) {
        // echo "Confirm_password : " . $confirm_password;
        echo "<br>";
        $_SESSION["confirm_password_old"] = $confirm_password;
    } else {
        $_SESSION["confirm_password_error"] = "Password is not match.Reenter the password";
        header("location:signupFormclassHomePrac.php");
    }
} else {
    $_SESSION["confirm_password_error"] = "Confirm password is required";
    header("location:signupFormclassHomePrac.php");
}



// if (mysqli_multi_query($con, $sql)) {
//     $_SESSION["database"] = "Congratulations!! Your registration has been completed successfully!";
//     $_SESSION["name_old"] = "";
//     $_SESSION["email_old"] = "";
//     $_SESSION["password_old"] = "";
//     $_SESSION["confirm_password_old"] = "";

//     header("location:signupFormclassHomePrac.php");
// } else {
//     $_SESSION["database_error"] = mysqli_error($con);
//     header("location:signupFormclassHomePrac.php");
// }

// mysqli_close($con);




if($name && preg_match("/^[a-zA-Z-' ]*$/", $name) ){
    if($email && filter_var($email, FILTER_VALIDATE_EMAIL)){
        if($password && preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)){
            if($confirm_password && $password == $confirm_password){
                // database start 
                


                $servername = "localhost";
                $username = "pappu";
                $password = "password";
                $dbname = "neptune";


                // create Connection

                $con = mysqli_connect($servername, $username, $password, $dbname);

                // check connection

                if (!$con) {
                    die("Connection Failed: " . mysqli_connect_error());

                    header("location:signupFormclassHomePrac.php");
                }

                $sql = "INSERT INTO users (Name,Email,Password) VALUES ('$nameData', '$emailData', '$passwordData')";

                if (mysqli_query($con, $sql)) {
                    $_SESSION["database"] = "Congratulations!! Your registration has been completed successfully!";
                    $_SESSION["name_old"] = "";
                    $_SESSION["email_old"] = "";
                    $_SESSION["password_old"] = "";
                    $_SESSION["confirm_password_old"] = "";

                    header("location:signupFormclassHomePrac.php");
                } else {
                    $_SESSION["database_error"] = mysqli_error($con);
                    header("location:signupFormclassHomePrac.php");
                }

                mysqli_close($con);
            }
        }
    }
} 
