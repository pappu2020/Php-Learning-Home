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

    <link rel="stylesheet" href="./signUpStyle.css">


</head>

<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="sign-in.php">Sign In</a></p>

            <?php
            if (isset($_SESSION["duplicate_email"])) {
            ?>

                <div class="alert alert-danger">
                    <?php echo $_SESSION["duplicate_email"]; ?>
                </div>

            <?php
            }

            ?>





            <form action="./signUpBackend.php" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <label for="signUpUsername" class="form-label">Name</label>
                    <input type="text" class="form-control mb-2" name="name" placeholder="Enter Name" value="<?php

                                                                                                                if (isset($_SESSION["name_old"])) {
                                                                                                                    echo $_SESSION["name_old"];
                                                                                                                }


                                                                                                                ?>" <?php

                                                                                                                    if (isset($_SESSION["name_error"])) {


                                                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                                                                    }
                                                                                                                                                        ?>>

                    <?php
                    if (isset($_SESSION["name_error"])) {
                    ?>

                        <span class="errorIcon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg></span>

                    <?php
                    }

                    ?>


                    <?php
                    if (isset($_SESSION["name_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["name_error"]; ?>
                        </div>

                    <?php
                    }

                    ?>









                    <label for="signUpEmail" class="form-label">Email address</label>
                    <input type="text" class="form-control mb-2" name="email" placeholder="example@neptune.com" value="<?php

                                                                                                                        if (isset($_SESSION["email_old"])) {
                                                                                                                            echo $_SESSION["email_old"];
                                                                                                                        }

                                                                                                                        ?>" <?php

                                                                                                                            if (isset($_SESSION["email_error"])) {


                                                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                                                            }
                                                                                                                                                                ?>>

                    <?php
                    if (isset($_SESSION["email_error"])) {
                    ?>

                        <span class="errorIcon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg></span>

                    <?php
                    }

                    ?>

                    <?php
                    if (isset($_SESSION["email_error"])) {
                    ?>

                        <div class="alert alert-danger">
                            <?php echo $_SESSION["email_error"]; ?>
                        </div>

                    <?php
                    }

                    ?>

                    <label for="signUpPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" <?php

                                                                                                                                                        if (isset($_SESSION["password_error"])) {


                                                                                                                                                        ?> style="border:1px solid red;" <?php
                                                                                                                                                                                        }
                                                                                                                                                                                            ?>>

                    <?php
                    if (isset($_SESSION["password_error"])) {
                    ?>

                        <span class="errorIconPass text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg></span>

                    <?php
                    }

                    ?>


                    <?php
                    if (isset($_SESSION["password_error"])) {
                    ?>

                        <div class="alert alert-danger mt-2">
                            <?php echo $_SESSION["password_error"]; ?>
                        </div>

                    <?php
                    }

                    ?>


                    <label for="signUpPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" <?php

                                                                                                                                                                if (isset($_SESSION["confirmPass_error"])) {


                                                                                                                                                                ?> style="border:1px solid red;" <?php
                                                                                                                                                                                                }
                                                                                                                                                                                                    ?>>

                    <?php
                    if (isset($_SESSION["confirmPass_error"])) {
                    ?>

                        <span class="errorIconPass text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg></span>

                    <?php
                    }

                    ?>


                    <?php
                    if (isset($_SESSION["confirmPass_error"])) {
                    ?>

                        <div class="alert alert-danger mt-2">
                            <?php echo $_SESSION["confirmPass_error"]; ?>
                        </div>

                    <?php
                    }

                    ?>
                </div>

                <div class="auth-submit">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>




            </form>


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