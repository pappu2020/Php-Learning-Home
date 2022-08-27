<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/neptune.png" />

</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>


            <?php
            if (isset($_SESSION["insert_data_success"])) {
            ?>

                <div class="alert alert-success mt-3">
                    <?php echo $_SESSION["insert_data_success"]; ?>
                </div>

            <?php
            }

            ?>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="sign-up.php">Sign Up</a></p>
            <form action="signInbackend.php" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control m-b-md" name="signInEmail" placeholder="example@neptune.com">


                    <?php
                    if (isset($_SESSION["email_SignIn_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["email_SignIn_error"]; ?>
                        </div>

                    <?php
                    }

                    ?>







                    <label for="signInPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">


                    <?php
                    if (isset($_SESSION["password_SignIn_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["password_SignIn_error"]; ?>
                        </div>

                    <?php
                    }

                    ?>

                    <div class="auth-submit">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </div>
            </form>


            <?php
            if (isset($_SESSION["signIn_error"])) {
            ?>

                <div class="alert alert-danger">
                    <?php echo $_SESSION["signIn_error"]; ?>
                </div>

            <?php
            }

            ?>


        </div>
    </div>

    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/plugins/pace/pace.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
    <script src="../../assets/js/custom.js"></script>
</body>

</html>

<?php session_destroy(); ?>