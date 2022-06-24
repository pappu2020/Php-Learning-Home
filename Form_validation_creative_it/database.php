<?php

// database start 

$servername = "localhost";
$username = "pappu";
$password = "password";
$dbname = "neptune";


// create Connection

$con = mysqli_connect($servername,$username,$password,$dbname);

// check connection

if(!$con){
   die("Connection Failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO users (Name,Email,Password) VALUES ('pappu','sha','232')";
if(mysqli_query($con,$sql)){
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($con);



?>