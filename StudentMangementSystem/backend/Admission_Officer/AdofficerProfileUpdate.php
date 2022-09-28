<?php
session_start();
require_once('../../backend/db.php');
$addOfficerLoginEmailForUpdate  = $_SESSION["getEmpEmailSession"];


if(isset($_POST["addOfficerInfoUpdateBtn"])){

$addOfficerName=$_POST["addOfficerName"];

$addOfficerFatherName=$_POST["addOfficerFatherName"];

$addOfficerMotherName=$_POST["addOfficerMotherName"];

$addOfficerNationalId=$_POST["addOfficerNationalId"];

$addOfficerBirthReg=$_POST["addOfficerBirthReg"];

$addOfficerDob=$_POST["addOfficerDob"];

$addOfficerBloodGrp=$_POST["addOfficerBloodGrp"];

$addOfficerReligion=$_POST["addOfficerReligion"];

$addOfficerGender=$_POST["addOfficerGender"];

$addOfficerHoWTo=$_POST["addOfficerHoWTo"];

$addOfficerPresent=$_POST["addOfficerPresent"];

$addOfficerParmanant=$_POST["addOfficerParmanant"];




$updateAdOfficer = "UPDATE employees SET name='$addOfficerName',fatherName='$addOfficerFatherName',motherName='$addOfficerMotherName',nationalid='$addOfficerNationalId',birthRegNum='$addOfficerBirthReg',dob='$addOfficerDob',bloodGrp='$addOfficerBloodGrp',religion='$addOfficerReligion',Gender='$addOfficerGender',Howtoknowaboutus='$addOfficerHoWTo',presentAddress='$addOfficerPresent',parmanentAddress='$addOfficerParmanant' WHERE email='$addOfficerLoginEmailForUpdate'";


$updateAdOfficerRes = mysqli_query($con,$updateAdOfficer);


if($updateAdOfficerRes){
    $_SESSION["addOfficerUpdateSuccess"]="Update Success!!!";
    header("location:./AdofficerDashboard.php");
}

}


//Profile Picture Update


if(isset($_POST["addoffProfileupBtn"])){




        $addOfficerName = $_SESSION["getEmpnameSession"];
        

        $fullPath = $_FILES["addoffProfileup"]["name"];
        $explodePart = explode(".",$fullPath);
        $extension = end($explodePart);

        $fullName = $addOfficerName."-".time().".". $extension;

        $tempPath = $_FILES["addoffProfileup"]["tmp_name"];
        $newPath = "../../backend/admin/Employee/empImage/".$fullName;

       

        move_uploaded_file($tempPath,$newPath);

        $updateProfileAdOfficer = "UPDATE employees SET photo='$fullName' WHERE email='$addOfficerLoginEmailForUpdate' AND postion='Admission_Officier'";

        $updateProfileAdOfficerRes = mysqli_query($con,$updateProfileAdOfficer);

        header("location:./AdofficerDashboard.php");


        

    
    
}


//Mobile Number Update

if(isset($_POST["adOfficerUpdateBtn"])){
    $mobileNumberAddOfficerInput = $_POST["adOfficerNumberForChange"];
    $updateAddOfficerMobile ="UPDATE employees SET phoneNum='$mobileNumberAddOfficerInput' WHERE email='$addOfficerLoginEmailForUpdate' AND postion='Admission_Officier'";


    $updateAddOfficerMobileRes = mysqli_query($con, $updateAddOfficerMobile);
    $_SESSION["updateAddOfficerMobileSuccess"] = "Update Success!!!";
    header("location:./AdofficerDashboard.php");


}
