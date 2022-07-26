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

        <h1>SIGN IN</h1>

        <form action="./pappusahaLoginBack.php" method="POST">

            <?php
            if (isset($_SESSION["signUpSuccess"])) {

            ?>

                <div class="alert alert-success">
                    <?php echo $_SESSION["signUpSuccess"]; ?>
                </div>

            <?php

            }
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email">


            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">


            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="./pappuSignUp.php" class="btn btn-primary">Sign Up</a>

            <?php
            if (isset($_SESSION["wrongUserPass"])) {

            ?>

                <div class="alert alert-danger">
                    <?php echo $_SESSION["wrongUserPass"]; ?>
                </div>

            <?php

            }
            ?>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php session_destroy(); ?>