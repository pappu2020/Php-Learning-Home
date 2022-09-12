<?php

session_start();
require_once('../../backend/db.php');



$employeeEmail = $_POST["employeeEmail"];

$employeePassword = $_POST["employeePassword"];
$flag = false;


if ($employeeEmail) {
    if (filter_var($employeeEmail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["old_email_employee"] = $employeeEmail;
    } else {
        $_SESSION["email_error_employee"] = "Invalid Email";
        $flag = true;
    }
} else {
    $_SESSION["email_error_employee"] = "Email is required";
    $flag = true;
}

if($employeePassword){
    $_SESSION["old_Password_employee"] = $employeePassword;
} else {
    $_SESSION["password_error_employee"] = "Password is required";
    $flag = true;
}

if($flag){
    header("location:../../sign-in.php");
    
    
}

else{

    $emailCheckEmp = "SELECT COUNT(*) AS 'emailcheckEmp' FROM employees WHERE email='$employeeEmail' AND postion='Admission_Officier'";

    $emailCheckEmpRes = mysqli_query($con, $emailCheckEmp);


    if(mysqli_fetch_assoc($emailCheckEmpRes)["emailcheckEmp"]==1){



        $getEmpAdId = "SELECT id FROM employees WHERE email='$employeeEmail' AND postion='Admission_Officier'";
        $getEmpAdIdRes = mysqli_query($con, $getEmpAdId);

        $getEmpIdFetch = mysqli_fetch_assoc($getEmpAdIdRes)["id"];

        $_SESSION["getEmpIdSession"] = $getEmpIdFetch;


        $getEmpAdname= "SELECT name FROM employees WHERE email='$employeeEmail' AND postion='Admission_Officier'";
        $getEmpAdnameRes = mysqli_query($con, $getEmpAdname);

        $getEmpnameFetch = mysqli_fetch_assoc($getEmpAdnameRes)["name"];

        $_SESSION["getEmpnameSession"] = $getEmpnameFetch;


        $getEmpAdPhoto = "SELECT photo FROM employees WHERE email='$employeeEmail' AND postion='Admission_Officier'";
        $getEmpAdPhotoRes = mysqli_query($con, $getEmpAdPhoto);

        $getEmpPhotoFetch = mysqli_fetch_assoc($getEmpAdPhotoRes)["photo"];

        $_SESSION["getEmpPhotoSession"] = $getEmpPhotoFetch;



        $_SESSION["admin_logIn_success"] = "Login Success";
        header("location:AdofficerDashboard.php");
    }

    else{
        $_SESSION["emp_logIn_fail"] = "Email or Password do not matched!!";
        header("location:../../sign-in.php");
    }

}
