<?php
session_start();
require_once("../../DbConnect/db_connect.php");

$CustomerTitle = $_POST["CustomerTitle"];
$CustomerSubTitle = $_POST["CustomerSubTitle"];
$CustomerDescription = $_POST["CustomerDescription"];
$CustomerUploadBtn = $_POST["CustomerUploadBtn"];
$afterCustomerName;



// $photoUpload = $_POST["photoUpload"];


$flag = false;


if(isset($CustomerUploadBtn)){

    if ($CustomerTitle) {
        $CustomerTitleOld = $CustomerTitle;
    } else {
        $_SESSION["CustomerTitleError"] = "Customer Title is required";
        $flag = true;
    }

    if ($CustomerSubTitle) {
        $CustomerTitleOld = $CustomerSubTitle;
    } else {
        $_SESSION["CustomerSubTitleError"] = "Customer position  is required";
        $flag = true;
    }

    if ($CustomerDescription) {
        $CustomerDescriptionOld = $CustomerDescription;
    } else {
        $_SESSION["CustomerDescriptionError"] = "Customer Description is required";
        $flag = true;
    }


    if($flag){
        header("location:customerQuotes.php");
    }


    

    else{

        $insertQuearyCustomerSec= "INSERT INTO customerquotes(CustomerTitle,CustomerSubTitle,CustomerDescription) VALUES('$CustomerTitle','$CustomerSubTitle','$CustomerDescription')";

        $insertResultCustomerSec = mysqli_query($con, $insertQuearyCustomerSec);

        if ($insertResultCustomerSec) {
            $_SESSION["insert_CustomerSec_success"] = "Insert Success!!";
            $_SESSION["afterCustomerName"] = $CustomerTitle;
            $afterCustomerName = $CustomerTitle;
            header("location:customerQuotes.php");
        }
    }


 $fullPathCustomer = $_FILES["CustomerphotoUpload"]["name"];
 $explodeCustomer = explode(".", $fullPathCustomer);
 $extensionPartCustomer = end($explodeCustomer);



 $fullNameCustomer = $CustomerTitle.".". $extensionPartCustomer;

 $_SESSION["fullNameSessionCustomer"] = $fullNameCustomer;

 $tempPathCustomer = $_FILES["CustomerphotoUpload"]["tmp_name"];
 $newPathCustomer = "imgCustomer/".$fullNameCustomer;

 move_uploaded_file($tempPathCustomer, $newPathCustomer);

 $updateCustomerPhoto = "UPDATE customerquotes SET defaultPhoto='$fullNameCustomer' WHERE CustomerTitle='$afterCustomerName'";
 $updateCustomerPhotoRes = mysqli_query($con, $updateCustomerPhoto);

 if( $updateCustomerPhotoRes){
        $_SESSION["Photo_update_success_Customer"] = "Update Success!!";
        
        header("location:customerQuotes.php");
 }
}
