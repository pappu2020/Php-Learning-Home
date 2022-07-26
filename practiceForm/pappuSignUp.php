<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstarp Format</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>
        <div class="myForm">
            <form action="./pappuSignBack.php" method="POST">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">

                    <?php
                    if (isset($_SESSION["name_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["name_error"]  ?>
                        </div>

                    <?php

                    }

                    ?>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email">

                    <?php
                    if (isset($_SESSION["email_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["email_error"]  ?>
                        </div>

                    <?php

                    }

                    ?>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">

                    <?php
                    if (isset($_SESSION["password_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["password_error"]  ?>
                        </div>

                    <?php

                    }

                    ?>
                </div>


                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="Confirm_password">

                    <?php
                    if (isset($_SESSION["Confirm_password_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["Confirm_password_error"]  ?>
                        </div>

                    <?php

                    }

                    ?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="./pappusahaLogin.php" class="btn btn-primary">Sign In</a>
            </form>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php session_destroy(); ?>