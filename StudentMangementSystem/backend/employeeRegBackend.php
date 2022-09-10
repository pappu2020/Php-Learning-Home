<?php

session_start();






$nameEmployee = $_POST["nameEmployee"];
$phoneNumEmployee = $_POST["phoneNumEmployee"];
$emailEmployee = $_POST["emailEmployee"];
$passwordEmployee = $_POST["passwordEmployee"];
$confirm_passEmployee = $_POST["confirm_passEmployee"];
$fatherNameEmployee = $_POST["fatherNameEmployee"];
$motherNameEmployee = $_POST["motherNameEmployee"];
$gurdianPhoneEmployee = $_POST["gurdianPhoneEmployee"];
$nationalidEmployee = $_POST["nationalidEmployee"];
$birthRegNumEmployee = $_POST["birthRegNumEmployee"];
$dobEmployee = $_POST["dobEmployee"];
$ocupationEmployee = $_POST["ocupationEmployee"];
$bloodGrpEmployee = $_POST["bloodGrpEmployee"];
$religionEmployee = $_POST["religionEmployee"];
$GenderEmployee = $_POST["GenderEmployee"];
$HowtoknowaboutusEmployee = $_POST["HowtoknowaboutusEmployee"];
$presentAddressEmployee = $_POST["presentAddressEmployee"];
$parmanentAddressEmployee = $_POST["parmanentAddressEmployee"];
$postion = $_POST["postion"];
$flag = false;


if ($nameEmployee ) {
    if (preg_match("/^[a-zA-Z-' ]*$/", $nameEmployee )) {
        $_SESSION["old_nameEmployee "] = $nameEmployee ;
    } else {
        $_SESSION["name_errorEmployee "] = "Name is invalid";
        $flag = true;
    }
} else {
    $_SESSION["name_errorEmployee "] = "Name is Required";
    $flag = true;
}


$phoneNumLength = strlen($phoneNumEmployee);

if ($phoneNumEmployee) {

    if ($phoneNumLength == 11) {
        $_SESSION["old_number"] = $phoneNumEmployee;
    } else {
        $_SESSION["number_errorEmployee"] = "Number must be 11 digit";
        $flag = true;
    }
} else {
    $_SESSION["number_errorEmployee"] = "Number is required";
    $flag = true;
}

if ($emailEmployee) {
    if (filter_var($emailEmployee, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["old_emailEmployee"] = $emailEmployee;
    } else {
        $_SESSION["email_errorEmployee"] = "Invalid Email";
        $flag = true;
    }
} else {
    $_SESSION["email_errorEmployee"] = "Email is required";
    $flag = true;
}




if ($passwordEmployee) {
    if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $passwordEmployee)) {
        $_SESSION["password_oldEmployee"] = $passwordEmployee;
    } else {
        $_SESSION["password_errorEmployee"] = "
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
    $_SESSION["password_errorEmployee"] = "Password is requied.Please, Enter the Password";
    $flag = true;
}

if ($confirm_passEmployee) {
    if ($confirm_passEmployee == $passwordEmployee) {
        $_SESSION["confirmPass_oldEmployee"] = $confirm_passEmployee;
    } else {
        $_SESSION["confirmPass_errorEmployee"] = "Password do not matched.Please reenter the password.";
        $flag = true;
    }
} else {
    $_SESSION["confirmPass_errorEmployee"] = "Please Enter the password again.";
    $flag = true;
}




if ($fatherNameEmployee) {
    if (preg_match("/^[a-zA-Z-' ]*$/", $fatherNameEmployee)) {
        $_SESSION["old_fatheNameEmployee"] = $fatherNameEmployee;
    } else {
        $_SESSION["fatheName_errorEmployee"] = "Father Name is invalid";
        $flag = true;
    }
} else {
    $_SESSION["fatheName_errorEmployee"] = "Father Name is Required";
    $flag = true;
}

if ($motherNameEmployee) {
    if (preg_match("/^[a-zA-Z-' ]*$/", $motherNameEmployee)) {
        $_SESSION["old_motherNameEmployee"] = $motherNameEmployee;
    } else {
        $_SESSION["motherName_errorEmployee"] = "Mother Name is invalid";
        $flag = true;
    }
} else {
    $_SESSION["motherName_errorEmployee"] = "Mother Name is Required";
    $flag = true;
}


$phoneNumLengthgur = strlen($gurdianPhoneEmployee);

if ($gurdianPhoneEmployee) {
    if ($phoneNumLengthgur == 11) {
        $_SESSION["old_number_gurEmployee"] = $gurdianPhoneEmployee;
    } else {
        $_SESSION["number_error_gurEmployee"] = "Number must be 11 digit";
        $flag = true;
    }
} else {
    $_SESSION["number_error_gurEmployee"] = "Number is required";
    $flag = true;
}






// $Lengthnationalid = strlen($nationalid);

// if ($nationalid) {
//     if ($Lengthnationalid == 10) {
//         $_SESSION["old_number_nationalId"] = $nationalid;
//     } else {
//         $_SESSION["number_error"] = "National Id number must be 10 digit";
//         $flag = true;
//     }
// } else {
//     $_SESSION["number_error"] = "Number is required";
//     $flag = true;
// }




// $LengthbirthRegNum = strlen($birthRegNum);

// if ($birthRegNum) {
//     if ($LengthbirthRegNum== 17) {
//         $_SESSION["old_number_nationalId"] = $birthRegNum;
//     } else {
//         $_SESSION["number_error"] = "Birth reg Id number must be 17 digit";
//         $flag = true;
//     }
// } else {
//     $_SESSION["number_error"] = "Number is required";
//     $flag = true;
// }




if (
    $religionEmployee  == "Hindu" || $religionEmployee == "Muslim" || $religionEmployee == "Christian" ||
    $religionEmployee == "Budhist"
) {

    $_SESSION["old_number_religionEmployee"] = $religionEmployee;
} else {
    $_SESSION["religion_errorEmployee"] = "Religion is Required";
    $flag = true;
}



if (
    $bloodGrpEmployee  == "A+" || $bloodGrpEmployee == "A-" || $bloodGrpEmployee == "B+" ||
    $bloodGrpEmployee == "B-" || $bloodGrpEmployee == "O+"
) {

    $_SESSION["old_number_bloodGrpEmployee"] = $bloodGrpEmployee;
} else {
    $_SESSION["bloodGrp_errorEmployee"] = "Blood Group is Required";
    $flag = true;
}






if ($GenderEmployee == "Male" || $GenderEmployee == "Female") {

    $_SESSION["old_number_GenderEmployee"] = $GenderEmployee;
} else {
    $_SESSION["Gender_errorEmployee"] = "Gender is Required";
    $flag = true;
}


if (
    $HowtoknowaboutusEmployee == "Social media" || $HowtoknowaboutusEmployee == "Friends" || $HowtoknowaboutusEmployee == "Employees" ||
    $HowtoknowaboutusEmployee == "others"
) {

    $_SESSION["old_number_HowtoknowaboutusEmployee"] = $HowtoknowaboutusEmployee;
} else {
    $_SESSION["Howtoknowaboutus_errorEmployee"] = "How to know about us is Required";
    $flag = true;
}


if (
    $postion == "Teacher" || $postion == "Admission_Officier" || $postion == "Maintenance_Technician" ||
    $postion == "Security_Gourd" || $postion == "Cleaner_Person"
) {

    $_SESSION["old_postion"] = $courses;
} else {
    $_SESSION["postion_error"] = "postion is Required";
    $flag = true;
}




if ($presentAddressEmployee) {

    $_SESSION["old_number_presentAddressEmployee"] = $presentAddressEmployee;
} else {
    $_SESSION["presentAddress_errorEmployee"] = "Present Address is Required";
    $flag = true;
}

if ($parmanentAddressEmployee) {

    $_SESSION["old_number_parmanentAddressEmployee"] = $parmanentAddress;
} else {
    $_SESSION["parmanentAddress_errorEmployee"] = "Parmanent Address is Required";
    $flag = true;
}

if ($dobEmployee) {

    $_SESSION["old_number_dobEmployee"] = $dob;
} else {
    $_SESSION["dob_errorEmployee"] = "Date of birth is Required";
    $flag = true;
}



if ($flag) {
    header("location:../employeeReg.php");
} else {
    $localhost = "localhost";
    $username = "root";
    $passwordDb = "";
    $db = "student";


    $con  = mysqli_connect($localhost, $username, $passwordDb, $db);

    $emailCheckQuearyemp = "SELECT COUNT(*) AS 'emailCheck' FROM employees WHERE email = '$email'";
    $emailCheckQuearyempRes = mysqli_query($con, $emailCheckQuearyemp);

    if (mysqli_fetch_assoc($emailCheckQuearyempRes)['emailCheck'] == 1) {
        $_SESSION["email_duplicateEmployee"] = "This email is already taken.Try another one";
        header("location:../employeeReg.php");
    } else {
        $insertDataemp = "INSERT INTO employees(name,postion,email,password,fatherName,motherName,gurdianPhone,nationalid,birthRegNum,dob,phoneNum,bloodGrp,religion,Gender,Howtoknowaboutus,presentAddress,parmanentAddress) VALUES('$nameEmployee','$postion','$emailEmployee','$passwordEmployee','$fatherNameEmployee','$motherNameEmployee','$gurdianPhoneEmployee','$nationalidEmployee','$birthRegNumEmployee','$dobEmployee','$phoneNumEmployee','$bloodGrpEmployee','$religionEmployee','$GenderEmployee','$HowtoknowaboutusEmployee','$presentAddressEmployee','$parmanentAddressEmployee')";

        $insertDataempRes = mysqli_query($con, $insertDataemp);

        if ($insertDataempRes) {
            $_SESSION["EmployeeinsertSuccess"] = "Employees Add Successfully";
            header("location:./admin/Employee/employeeManagement.php");
        }
    }
}
