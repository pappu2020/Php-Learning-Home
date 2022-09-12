<?php
session_start();
require_once('../../db.php');
$id = $_GET["id"];

$teacherDelete = "DELETE FROM employees WHERE id='$id'";
$teacherDeleteRes = mysqli_query($con, $teacherDelete);

if($teacherDeleteRes){
    header("location:teacherListView.php");
    $_SESSION["Delete_success_teacher_list"]="Delete SUCCESS";
}
