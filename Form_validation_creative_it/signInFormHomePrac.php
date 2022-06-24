<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="mySignInForm">
            <form action="./HomePageHomePrac.php" method="POST" class="signInForm">

                <div class="mb-3">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="signInEmail" name="signInEmail" placeholder="Enter the Email">

                </div>

                <?php
                if (isset($_SESSION["signInEmail_error"])) {
                ?>

                    <div class="alert alert-danger">
                        <?php echo $_SESSION["signInEmail_error"]  ?>
                    </div>


                <?php
                }


                ?>


                <div class="mb-3">
                    <label for="signInPass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="signInPass" name="signInPass" placeholder="Enter The Password">
                </div>


                <?php
                if (isset($_SESSION["signInpass_error"])) {
                ?>

                    <div class="alert alert-danger">
                        <?php echo $_SESSION["signInpass_error"]  ?>
                    </div>


                <?php
                }


                ?>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="./signupFormclassHomePrac.php" class="btn btn-info">Sign Up</a>
            </form>
        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php session_destroy(); ?>