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

// $sql = "INSERT INTO users (Name,Email,Password) VALUES ('pappu','sha','232')";
// if(mysqli_query($con,$sql)){
//     echo "New record created successfully";
// }
// else{
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


$sql2 = "SELECT Name, Email, Password FROM users";
$result2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result2)) {
        echo "Email: ". $row["Email"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($con);



?>