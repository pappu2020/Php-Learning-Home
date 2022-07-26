<?php include("HomePageHomePrac.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1>Welcome To The <?php
                            if (mysqli_num_rows($ResultUsersName) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($ResultUsersName)) {
                                    echo  $row["Name"] . "<br>";
                                }
                            } else {
                                echo "0 results";
                            }
                            ?></h1>
        <a href="./signInFormHomePrac.php" class="btn btn-info">Sign In</a>
        <a href="./signupFormclassHomePrac.php" class="btn btn-info">Sign Up</a>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>