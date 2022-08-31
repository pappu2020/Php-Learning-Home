<?php
session_start();
require_once("../../DbConnect/db_connect.php");
$serviceTitle = $_POST["serviceTitle"];
$serviceDescription = $_POST["serviceDescription"];
$ServiceStatus = $_POST["ServiceStatus"];
$serviceIcon = $_POST["serviceIcon"];
$statusChange = $_POST["statusChange"];
$statusInsertBtn = $_POST["statusInsertBtn"];
$serviceTitleUpdate = $_POST["serviceTitleUpdate"];
$statusUpdateBtn = $_POST["statusUpdateBtn"];
$flag = false;

if (isset($statusInsertBtn)) {
if($serviceTitle){
    $serviceTitleOld = $serviceTitle;  
}

else{
    $_SESSION["serviceTitleError"]= "Title is required";
    $flag = true;
}

if ($serviceDescription) {
    $serviceDescriptionOld = $serviceDescription;
} else {
    $_SESSION["serviceDescriptionError"] = "Service Description is required";
    $flag = true;
}

if ($ServiceStatus == 'Active' || $ServiceStatus == 'Deactive' ) {
    $ServiceStatusOld = $ServiceStatus;
} else {
    $_SESSION["ServiceStatusError"] = "Service Status is required";
    $flag = true;
}

if ($serviceIcon) {
    $serviceIconOld = $serviceIcon;
} else {
    $_SESSION["serviceIconError"] = "service Icon is required";
    $flag = true;
}


if($flag){
    header("location:services.php");
}

else{
    
    $insertQuearyServices = "INSERT INTO services(serviceTitle,serviceDescription,ServiceStatus,serviceIcon) VALUES('$serviceTitle','$serviceDescription','$ServiceStatus','$serviceIcon')";

    $insertResultServices = mysqli_query($con, $insertQuearyServices);

    if ($insertResultServices) {
        $_SESSION["insert_Services_success"] = "Insert Success!!";
        header("location:services.php");
    }
}


}


if(isset($statusUpdateBtn)){
    $updateStatusQueary= "UPDATE services SET ServiceStatus='$statusChange' WHERE serviceTitle='$serviceTitleUpdate'";
    $updateStatusQuearyRes = mysqli_query($con, $updateStatusQueary);
    $_SESSION["Update_Status_success"] = "Update Success!!";
    header("location:services.php");

}
