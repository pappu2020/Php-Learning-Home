<?php

use function PHPSTORM_META\type;

session_start();
?>
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
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />


</head>

<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container myForm">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="./signInFormHomePrac.php">Sign In</a></p>

            <form action="./sigupFormBackendHomePrac.php" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <!-- Name Part  -->


                    <label class="form-label">Name</label>
                    <input type="text" class="form-control m-b-md" placeholder="Enter Name" name="name" value="<?php if (isset($_SESSION["name_old"])) {
                                                                                                                    echo $_SESSION["name_old"];
                                                                                                                } ?>" pattern="*([a-z])(*[A-Z])">

                    <?php

                    if (isset($_SESSION["name_error"])) {
                    ?>

                        <div class="nameError alert alert-danger p-2 text-center">
                            <?php
                            echo $_SESSION["name_error"];

                            ?>
                        </div>



                    <?php
                    }

                    ?>



                    <!-- Email Part  -->
                    <label class="form-label">Email address</label>
                    <input type="text" class="form-control m-b-md" placeholder="example@neptune.com" name="email" id="email" value="<?php
                                                                                                                                    if (isset($_SESSION["email_old"])) {
                                                                                                                                        echo  $_SESSION["email_old"];
                                                                                                                                    }

                                                                                                                                    ?>">




                    <?php

                    if (isset($_SESSION["email_error"])) {
                    ?>

                        <div class="email_error alert alert-danger  p-2 text-center">
                            <?php
                            echo $_SESSION["email_error"];

                            ?>
                        </div>



                    <?php
                    }

                    ?>




                    <!-- Password Start  -->
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control mb-3" placeholder="Enter Your Password" name="password" value="<?php

                                                                                                                                if (isset($_SESSION["password_old"])) {
                                                                                                                                    echo  $_SESSION["password_old"];
                                                                                                                                }



                                                                                                                                ?>">


                    <?php

                    if (isset($_SESSION["password_error"])) {
                    ?>

                        <div class="password_error alert alert-danger  p-2 text-center">
                            <?php
                            echo $_SESSION["password_error"];

                            ?>
                        </div>



                    <?php
                    }

                    ?>










                    <!-- Confirm Password  -->
                    <label class="form-label mt-3">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" value="<?php

                                                                                                                                if (isset($_SESSION["confirm_password_old"])) {
                                                                                                                                    echo  $_SESSION["confirm_password_old"];
                                                                                                                                }


                                                                                                                                ?>">


                    <?php

                    if (isset($_SESSION["confirm_password_error"])) {
                    ?>

                        <div class="confirm_password_error alert alert-danger  p-2 text-center">
                            <?php
                            echo $_SESSION["confirm_password_error"];

                            ?>
                        </div>



                    <?php
                    }

                    ?>





                </div>




                <div class="auth-submit">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                </div>

                <?php

                if (isset($_SESSION["database"])) {
                ?>

                    <div class="database_Success alert alert-success mt-3 mb-3">
                        <?php echo $_SESSION["database"] ?>
                    </div>

                <?php
                }


                ?>

                <?php

                if (isset($_SESSION["database_error"])) {
                ?>

                    <div class="database_error alert alert-danger">
                        <?php echo $_SESSION["database_error"] ?>
                    </div>

                <?php
                }


                ?>

            </form>
            <div class="divider"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
<?php

session_destroy();

?>