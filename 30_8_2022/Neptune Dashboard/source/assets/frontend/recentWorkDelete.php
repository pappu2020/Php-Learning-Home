<?php
require_once("../../DbConnect/db_connect.php");
session_start();
$id= $_GET["id"];



$deleteRecentWork = "DELETE FROM recentworks WHERE Id='$id'";
$deleteRecentWorkRes = mysqli_query($con,$deleteRecentWork);

if($deleteRecentWorkRes){
    $_SESSION["recentWorkDelete"] = "Delete Success!!!";
    header("location:recentWorkViewPage.php");
}









?>