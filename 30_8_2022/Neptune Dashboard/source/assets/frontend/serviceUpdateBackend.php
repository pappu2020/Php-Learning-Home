<?php
session_start();
require_once("../../DbConnect/db_connect.php");

$updateFormBtn = $_POST["updateFormBtn"];
$update_btn_input = $_POST["update_btn_input"];

$serviceTitleUpdate = $_POST["serviceTitleUpdate"];
$serviceDescriptionUpdate = $_POST["serviceDescriptionUpdate"];
$ServiceStatusUpdate = $_POST["ServiceStatusUpdate"];
$serviceIconUpdate = $_POST["serviceIconUpdate"];
$ServiceUpdateBtn = $_POST["ServiceUpdateBtn"];





// $titleForUpdate = $_SESSION["titleUpdateSession"];
// $descriptionForUpdate = $_SESSION["descriptionUpdateSession"];
// $serviceIconForUpdate = $_SESSION["serviceIconUpdateSession"];
// $serviceIconForUpdate = $_SESSION["serviceStatusUpdateSession"];  


if(isset($updateFormBtn)){
    $_SESSION["update_id_hidden"] = $update_btn_input;
    header("location:serviceupdate.php");
}


if(isset($ServiceUpdateBtn)){

    $idForUpdate = $_SESSION["update_id_hidden"];
   
    $updateServices = "UPDATE services SET serviceTitle='$serviceTitleUpdate',serviceDescription='$serviceDescriptionUpdate',ServiceStatus='$ServiceStatusUpdate',serviceIcon='$serviceIconUpdate' WHERE Id='$idForUpdate'";


    $updateServicesRes = mysqli_query($con, $updateServices);

    header("location:serviceupdate.php");
    $_SESSION["updateSuccessServices"]="update Success";

}








?>