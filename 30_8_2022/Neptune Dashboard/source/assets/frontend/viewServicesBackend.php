<?php
session_start();
require_once("../../DbConnect/db_connect.php");



//Delete

$viewServiceDelete = $_POST["viewServiceDelete"];
$delete_btn_input = $_POST["delete_btn_input"];

if (isset($viewServiceDelete)) {
    $DeleteQueary = "DELETE FROM services WHERE Id='$delete_btn_input'";
    $DeleteQuearyRes = mysqli_query($con, $DeleteQueary);

    if ($DeleteQuearyRes) {
        header("location:viewServices.php");
    }
}




















?>