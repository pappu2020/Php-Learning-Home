<?php

use function PHPSTORM_META\type;

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$flexRadioDefault = $_POST["flexRadioDefault"];
// $female = $_POST["female"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$city_Select = $_POST["city_Select"];
$address = $_POST["address"];
$cv = $_POST["cv"];






if ($name && preg_match("/^[a-zA-Z-' ]*$/", $name)) {

    // echo "Name: " . $name;
    // echo "<br>";

    $nameData = $name;
} else {
    $_SESSION['name_error'] = "Name required.Please Enter the valid Name. Do not enter any number";
    header("location: signupformValidation.php");
}




if (intval($name)) {
    $_SESSION['name_error_number'] = "Number name is not allowed.Please Enter the String Name";
    header("location: signupformValidation.php");
}


if ($email) {
    // echo "Email: " . $email;
    // echo "<br>";
    $emailData = $email;
} else {
    $_SESSION['email_error'] = "email required.Please Enter the email";
    header("location: signupformValidation.php");
}



if ($flexRadioDefault) {

    $flexRadioDefaultData = $flexRadioDefault;
} else {
    $_SESSION["flexRadioDefault_error"] = "Please select your gender";
    header("location: signupformValidation.php");
}


// if ($female) {

//     $femaleData = $female;
// } else {
//     $_SESSION["female_error"] = "Please select your gender";
//     header("location: signupformValidation.php");
// }











if ($password) {
    // echo "Password: ". $password;
    // echo "<br>";

    $passwordData = $password;
} else {
    $_SESSION['password_error'] = "password is required.Please Enter the password";
    header("location: signupformValidation.php");
}



if ($confirmPassword && $password == $confirmPassword) {
    // echo "Confirm Password: " . $confirmPassword;
    // echo "<br>";
    $confirmPasswordData = $confirmPassword;
} else {
    $_SESSION['confirmPassword_error'] = "confirm Password is Required.Please Enter the confirm Password or password didn't match";
    header("location: signupformValidation.php");
}




if ($city_Select == "Dhaka" || $city_Select == "Chattogram" || $city_Select == "Khulna" || $city_Select == "Rajshahi" || $city_Select == "Barisal"  || $city_Select == "Sylhet") {
    $city_SelectData = $city_Select;
} else {
    $_SESSION["city_Select_error"] = "Please Select your City";
    header("location: signupformValidation.php");
}








if ($address) {
    // echo "Address: " . $address;
    // echo "<br>";
    $addressData = $address;
} else {
    $_SESSION['address_error'] = "address is Required.Please Enter the address";
    header("location: signupformValidation.php");
}




if ($cv) {
    // echo "Address: " . $address;
    // echo "<br>";
    $cvData = $cv;
} else {
    $_SESSION['cv_error'] = "cv is Required.Please Upload the cv";
    header("location: signupformValidation.php");
}








?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstarp Format</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">


        <div class="myDataTable">



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Password</th>
                        <th scope="col">Confirm Password</th>
                        <th scope="col">City</th>
                        <th scope="col">Address</th>
                        <th scope="col">CV</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $nameData; ?></td>
                        <td><?php echo $emailData; ?></td>
                        <td><?php echo $flexRadioDefaultData; ?></td>
                        <td><?php echo $passwordData; ?></td>
                        <td><?php echo $confirmPasswordData; ?></td>
                        <td><?php echo $city_SelectData; ?></td>

                        <td><?php echo $addressData; ?></td>
                        <td><?php echo $cvData; ?></td>
                    </tr>


                </tbody>
            </table>







        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>