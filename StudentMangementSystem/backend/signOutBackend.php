<?php 


$id=$_GET["id"];

if($id==100){
    session_start();
    session_destroy();
    header("location:../sign-in.php");
    
}

if ($id == 200) {
    session_start();
    session_destroy();
    header("location:../adminSign-in.php");
}






?>