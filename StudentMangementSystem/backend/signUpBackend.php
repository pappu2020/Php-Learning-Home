<?php

session_start();




$name = $_POST["name"];
$phoneNum =$_POST["phoneNum"];
$email= $_POST["email"];
$password = $_POST["password"];
$confirm_pass = $_POST["confirm_pass"];
$fatheName = $_POST["fatheName"];
$motherName = $_POST["motherName"];
$gurdianPhone = $_POST["gurdianPhone"];
$nationalid = $_POST["nationalid"];
$birthRegNum = $_POST["birthRegNum"];
$dob = $_POST["dob"];
$ocupation = $_POST["ocupation"];
$bloodGrp = $_POST["bloodGrp"];
$religion = $_POST["religion"];
$Gender = $_POST["Gender"];
$Howtoknowaboutus = $_POST["Howtoknowaboutus"];
$presentAddress = $_POST["presentAddress"];
$parmanentAddress = $_POST["parmanentAddress"];
$courses = $_POST["courses"];
$flag = false;


if($name){
    if(preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $_SESSION["old_name"] = $name;
    }

    else{
        $_SESSION["name_error"] = "Name is invalid";
        $flag = true;
    }
} else {
    $_SESSION["name_error"] = "Name is Required";
    $flag = true;
}


$phoneNumLength = strlen($phoneNum);

if($phoneNum){

    if($phoneNumLength == 11){
        $_SESSION["old_number"] = $phoneNum;
    }

    else{
        $_SESSION["number_error"] = "Number must be 11 digit";
        $flag = true;
    }
  
} else {
    $_SESSION["number_error"] = "Number is required";
    $flag = true;
}

if($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION["old_email"] = $email;
    } else {
        $_SESSION["email_error"] = "Invalid Email";
        $flag = true;
    }
  
} else {
    $_SESSION["email_error"] = "Email is required";
    $flag = true;
}




if ($password) {
    if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)) {
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

if ($confirm_pass) {
    if ($confirm_pass == $password) {
        $_SESSION["confirmPass_old"] = $confirm_pass;
    } else {
        $_SESSION["confirmPass_error"] = "Password do not matched.Please reenter the password.";
        $flag = true;
    }
} else {
    $_SESSION["confirmPass_error"] = "Please Enter the password again.";
    $flag = true;
}




if ($fatheName) {
    if (preg_match("/^[a-zA-Z-' ]*$/", $fatheName)) {
        $_SESSION["old_fatheName"] = $fatheName;
    } else {
        $_SESSION["fatheName_error"] = "Father Name is invalid";
        $flag = true;
    }
} else {
    $_SESSION["fatheName_error"] = "Father Name is Required";
    $flag = true;
}

if($motherName) {
    if (preg_match("/^[a-zA-Z-' ]*$/", $motherName)) {
        $_SESSION["old_motherName"] = $motherName;
    } else {
        $_SESSION["motherName_error"] = "Mother Name is invalid";
        $flag = true;
    }
} else {
    $_SESSION["motherName_error"] = "Mother Name is Required";
    $flag = true;
}


$phoneNumLengthgur = strlen($gurdianPhone);

if ($gurdianPhone) {
    if ($phoneNumLengthgur == 11) {
        $_SESSION["old_number_gur"] = $gurdianPhone;
    } else {
        $_SESSION["number_error_gur"] = "Number must be 11 digit";
        $flag = true;
    }
} else {
    $_SESSION["number_error_gur"] = "Number is required";
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


if ($ocupation) {

    $_SESSION["old_number_ocupation"] = $ocupation;
        
    
} else {
    $_SESSION["ocupation_error"] = "Ocupation is Required";
    $flag = true;
}


if ($religion  == "Hindu" || $religion == "Muslim" || $religion == "Christian" ||
$religion == "Budhist") {

    $_SESSION["old_number_religion"] = $religion;
} else {
    $_SESSION["religion_error"] = "Religion is Required";
    $flag = true;
}



if (
    $bloodGrp  == "A+" || $bloodGrp == "A-" || $bloodGrp == "B+" ||
    $bloodGrp == "B-" || $bloodGrp == "O+"
) {

    $_SESSION["old_number_bloodGrp"] = $bloodGrp;
} else {
    $_SESSION["bloodGrp_error"] = "Blood Group is Required";
    $flag = true;
}






if ($Gender == "Male" || $Gender == "Female") {

    $_SESSION["old_number_Gender"] = $Gender;
} else {
    $_SESSION["Gender_error"] = "Gender is Required";
    $flag = true;
}


if ($Howtoknowaboutus == "Social media" || $Howtoknowaboutus == "Friends" || $Howtoknowaboutus == "Employees" ||
$Howtoknowaboutus == "others") {

    $_SESSION["old_number_Howtoknowaboutus"] = $Howtoknowaboutus;
} else {
    $_SESSION["Howtoknowaboutus_error"] = "How to know about us is Required";
    $flag = true;
}


if ($courses == "class5" || $courses == "class6" || $courses == "class7" ||
$courses == "class8" || $courses == "class9")  {

    $_SESSION["old_class"] = $courses;
} else {
    $_SESSION["class_error"] = "Class is Required";
    $flag = true;
}




if ($presentAddress) {

    $_SESSION["old_number_presentAddress"] = $presentAddress;
} else {
    $_SESSION["presentAddress_error"] = "Present Address is Required";
    $flag = true;
}

if ($parmanentAddress) {

    $_SESSION["old_number_parmanentAddress"] = $parmanentAddress;
} else {
    $_SESSION["parmanentAddress_error"] = "Parmanent Address is Required";
    $flag = true;
}

if ($dob) {

    $_SESSION["old_number_dob"] = $dob;
} else {
    $_SESSION["dob_error"] = "Date of birth is Required";
    $flag = true;
}



if($flag){
    header("location:../sign-up.php");
}


else{
    $localhost="localhost";
    $username = "root";
    $passwordDb="";
    $db ="student";


    $con  = mysqli_connect($localhost, $username, $passwordDb, $db);

    $emailCheckQueary = "SELECT COUNT(*) AS 'emailCheck' FROM users WHERE email = '$email'";
    $emailCheckQuearyRes = mysqli_query($con,$emailCheckQueary);

    if(mysqli_fetch_assoc($emailCheckQuearyRes)['emailCheck']==1){
        $_SESSION["email_duplicate"] = "This email is already taken.Try another one";
        header("location:../sign-up.php");
    }

    else{
        $insertData= "INSERT INTO users(name,courses,email,password,fatheName,motherName,gurdianPhone,nationalid,birthRegNum,dob,phoneNum,bloodGrp,religion,Gender,Howtoknowaboutus,presentAddress,parmanentAddress,ocupation) VALUES('$name','$courses','$email','$password','$fatheName','$motherName','$gurdianPhone','$nationalid','$birthRegNum','$dob','$phoneNum','$bloodGrp','$religion','$Gender','$Howtoknowaboutus','$presentAddress','$parmanentAddress','$ocupation')";

        $insertDataRes = mysqli_query($con,$insertData);

        if($insertDataRes){
            $_SESSION["insertSuccess"] = "Congratualations!! Your Registration is successfully done.You can Sign In now.";
            header("location:../sign-up.php");
        }
    }
}
