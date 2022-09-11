<?php
session_start();
require_once('../../db.php');
$id = $_GET["id"];

$allEmployeeDelete = "DELETE FROM employees WHERE id='$id'";
$allEmployeeDeleteRes = mysqli_query($con,$allEmployeeDelete);

if($allEmployeeDeleteRes){
    header("location:allEmployeeList.php");
    $_SESSION["Delete_success_allEmployee_list"]="Delete SUCCESS";
}





?>