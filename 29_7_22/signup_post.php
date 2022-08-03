<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];


$localhost = "localhost";
$username = "root";
$password = "";
$db = "home";

$con = mysqli_connect($localhost, $username, $password, $db);
$insert = "INSERT INTO users(Name,Email) VALUES('$name','$email')";
$insertResult = mysqli_query($con, $insert);



$selectQuery = "SELECT Id,Name,Email FROM users";
$selectQueryResult = mysqli_query($con, $selectQuery);






?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstarp Format</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .firstDiv {
            padding: 15px;
            background-color: seagreen;
            color: white;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="fst-italic fs-2 fw-bold text-primary">Users List</h1>
        <ul class="list-group">

            <?php
            foreach ($selectQueryResult as $users) {



            ?>

                <li class="list-group-item">

                    <div class="d-flex flex-row bd-highlight ">
                        <div class="bd-highlight firstDiv rounded-circle"><?php print_r($users["Id"]); ?></div>

                        <div class=" bd-highlight">

                            <div class="d-flex flex-column bd-highlight ">
                                <div class="bd-highlight"><?php print_r($users["Name"]); ?></div>
                                <div class="bd-highlight"><?php print_r($users["Email"]); ?></div>

                            </div>

                        </div>

                    </div>
                </li>

            <?php } ?>

        </ul>

       


        

        


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>