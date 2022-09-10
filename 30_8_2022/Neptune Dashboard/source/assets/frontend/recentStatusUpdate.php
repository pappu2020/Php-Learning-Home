<?php
require_once("../../DbConnect/db_connect.php");
$id = $_GET["id"];

$getStatus = "SELECT status FROM recentworks WHERE Id='$id'";
$getStatusRes = mysqli_query($con,$getStatus);
$getStatusFetch = mysqli_fetch_assoc($getStatusRes)["status"];

if($getStatusFetch == "Active"){
    $updateStatus = "UPDATE recentworks SET status='Deactive' WHERE Id='$id'";
    $updateStatusRes = mysqli_query($con,$updateStatus);

    if($updateStatusRes){
        $_SESSION["recentWorkStatusUpdate"] = "Status Change Successfully!!";
        header("location:recentWorkViewPage.php");
    }
}

if ($getStatusFetch == "Deactive") {
    $updateStatus = "UPDATE recentworks SET status='Active' WHERE Id='$id'";
    $updateStatusRes = mysqli_query($con, $updateStatus);

    if ($updateStatusRes) {
        $_SESSION["recentWorkStatusUpdate"] = "Status Change Successfully!!";
        header("location:recentWorkViewPage.php");
    }
}






?>