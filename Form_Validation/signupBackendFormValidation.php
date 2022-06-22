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
    // $nameWrite = "NAME: ";
    $nameData = $name;
    $_SESSION["name_old"] = $name;
    // $myfile = fopen("data.txt", "a");
    // fwrite($myfile, $nameWrite . $nameData . "\n");



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
    // $emailWrite = "Email: ";
    $emailData = $email;
    $_SESSION["email_old"] = $email;
    // $myfile = fopen("data.txt", "a");
    // fwrite($myfile,
    //     $nameWrite . $emailData . "\n"
    // );
} else {
    $_SESSION['email_error'] = "email required.Please Enter the email";
    header("location: signupformValidation.php");
}



if ($flexRadioDefault) {
    // $genderWrite = "Gender: ";
    $flexRadioDefaultData = $flexRadioDefault;
    $_SESSION["flexRadioDefaultData_old"] = $flexRadioDefaultData;
    // $myfile = fopen("data.txt", "a");
    // fwrite(
    //     $myfile,
    //     $genderWrite . $flexRadioDefaultData . "\n"
    // );
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
    // $passWrite = "Password: ";
    $passwordData = $password;
    $_SESSION["password_old"] = $password;
    // $myfile = fopen("data.txt", "a");
    // fwrite(
    //     $myfile,
    //     $passWrite . $passwordData . "\n"
    // );
} else {
    $_SESSION['password_error'] = "password is required.Please Enter the password";
    header("location: signupformValidation.php");
}



if ($confirmPassword && $password == $confirmPassword) {
    // echo "Confirm Password: " . $confirmPassword;
    // echo "<br>";
    // $confirmPassWrite = "Confirm Password: ";
    $confirmPasswordData = $confirmPassword;
    $_SESSION["confirmPassword_old"] = $confirmPassword;
    // fwrite(
    //     $myfile,
    //     $confirmPassWrite . $confirmPasswordData . "\n"
    // );
} else {
    $_SESSION['confirmPassword_error'] = "confirm Password is Required.Please Enter the confirm Password or password didn't match";
    header("location: signupformValidation.php");
}




if ($city_Select == "Dhaka" || $city_Select == "Chattogram" || $city_Select == "Khulna" || $city_Select == "Rajshahi" || $city_Select == "Barisal"  || $city_Select == "Sylhet") {
    $city_SelectData = $city_Select;
    // $selectWrite = "City: ";
    $_SESSION["city_Select_old"] = $city_Select;
    // $myfile = fopen("data.txt", "a");
    // fwrite(
    //     $myfile,
    //     $selectWrite . $city_SelectData . "\n"
    // );
} else {
    $_SESSION["city_Select_error"] = "Please Select your City";
    header("location: signupformValidation.php");
}








if ($address) {
    // echo "Address: " . $address;
    // echo "<br>";
    // $addressWrite = "Address: ";
    $addressData = $address;
    $_SESSION["addressData_old"] = $address;
    // $myfile = fopen("data.txt", "a");
    // fwrite(
    //     $myfile,
    //     $addressWrite . $addressData . "\n"
    // );
} else {
    $_SESSION['address_error'] = "address is Required.Please Enter the address";
    header("location: signupformValidation.php");
}




if ($cv) {
    // echo "Address: " . $address;
    // echo "<br>";
    // $cvWrite = "CV: ";
    $cvData = $cv;
    $_SESSION["cv_old"] = $cv;
    // $myfile = fopen("data.txt", "a");
    // fwrite(
    //     $myfile,
    //     $cvWrite . $cvData . "\n\n"
    // );
} else {
    $_SESSION['cv_error'] = "cv is Required.Please Upload the cv";
    header("location: signupformValidation.php");
}



if (($name && preg_match("/^[a-zA-Z-' ]*$/", $name))) {
    if ($email) {
        if ($flexRadioDefault) {
            if ($password) {
                if ($confirmPassword && $password == $confirmPassword) {
                    if ($city_Select == "Dhaka" || $city_Select == "Chattogram" || $city_Select == "Khulna" || $city_Select == "Rajshahi" || $city_Select == "Barisal"  || $city_Select == "Sylhet") {
                        if ($address) {
                            if ($cv) {

                                $nameWrite = "NAME: ";
                                $emailWrite = "Email: ";
                                $genderWrite = "Gender: ";
                                $passWrite = "Password: ";
                                $confirmPassWrite = "Confirm Password: ";
                                $addressWrite = "Address: ";
                                $selectWrite = "City: ";
                                $cvWrite = "CV: ";
                                $myfile = fopen("data.txt", "a");
                                fwrite($myfile, $nameWrite . $nameData . "\n");
                                fwrite($myfile, $emailWrite . $emailData . "\n");
                                fwrite($myfile, $genderWrite . $flexRadioDefaultData . "\n");
                                fwrite($myfile, $passWrite . $passwordData . "\n");
                                fwrite($myfile, $confirmPassWrite . $confirmPasswordData . "\n");
                                fwrite($myfile, $addressWrite . $addressData . "\n");
                                fwrite($myfile, $selectWrite . $city_SelectData . "\n");
                                fwrite($myfile, $cvWrite . $cvData . "\n\n");
                                fclose($myfile);

                                // $myfile2 = fopen("data.txt", "a");
                                // fwrite($myfile2, $nameWrite . $nameData . "\n");
                                // fwrite($myfile2, $emailWrite . $emailData . "\n");
                                // fwrite($myfile2, $genderWrite . $flexRadioDefaultData . "\n");
                                // fwrite($myfile2, $passWrite . $passwordData);
                                // fwrite($myfile2, $confirmPassWrite . $confirmPasswordData . "\n");
                                // fwrite($myfile2, $addressWrite . $addressData . "\n");
                                // fwrite($myfile2, $selectWrite . $city_SelectData . "\n");
                                // fwrite($myfile2, $cvWrite . $cvData . "\n");






                            }
                        }
                    }
                }
            }
        }
    }
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