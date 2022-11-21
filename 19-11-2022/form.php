<?php
session_start();
?>

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
        <div class="myform row">
            <div class="col-lg-5 m-auto">

                <h1 class="mb-5">Registration Form</h1>


                <?php

                if (isset($_SESSION["RegSuccessOrNot"])) {
                ?>

                    <div class="alert alert-danger"><?php echo $_SESSION["RegSuccessOrNot"] ?></div>

                <?php
                }

                ?>

                <form action="./formSubmit.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">

                    </div>

                    <?php

                    if (isset($_SESSION["name_error"])) {
                    ?>

                        <div class="alert alert-danger"><?php echo $_SESSION["name_error"] ?></div>

                    <?php
                    }

                    ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="eamil" class="form-control" name="email">
                    </div>

                    <?php

                    if (isset($_SESSION["email_error"])) {
                    ?>

                        <div class="alert alert-danger"><?php echo $_SESSION["email_error"] ?></div>

                    <?php
                    }

                    ?>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <?php

                    if (isset($_SESSION["password_error"])) {
                    ?>

                        <div class="alert alert-danger"><?php echo $_SESSION["password_error"] ?></div>

                    <?php
                    }

                    ?>



                    <div class="mb-3">
                        <label for="Confirmpassword" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" name="Confirmpassword">
                    </div>


                    <?php

                    if (isset($_SESSION["Confirmpassword_error"])) {
                    ?>

                        <div class="alert alert-danger"><?php echo $_SESSION["Confirmpassword_error"] ?></div>

                    <?php
                    }

                    ?>

                    <div class="mb-3">
                        <label for="profileImg" class="form-label">Upload image</label>
                        <input type="file" class="form-control" name="profileImg">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    <p>Already have an account? Please, <a href="./signIn.php">Sign In</a></p>
                </form>

            </div>
        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
session_destroy();
?>