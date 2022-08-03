<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPass = $_POST['confirmPass'];


$localhost = "localhost";
$username="root";
$passwordDb = "";
$db= "home";
$con = mysqli_connect($localhost,$username,$passwordDb,$db);
$insert1= "INSERT INTO users(Name,Email,Password) VALUES('$name','$email','$password')";
$insertResult1 = mysqli_query($con,$insert1);






?>