<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleAdminSignUp.css">
</head>

<body>
    <div class="container-fluid">


        <div class="headingDiv">
            <img src="img/logo2.JPG" alt="" width="160px" height="90px" class="headingImg">
        </div>

        <div class="row mainContainer">


            <div class="col-lg-8 regLeftPart">

                <div class="leftPartRegStart">


                    <legend class="myAdminFormLegend">Admin Registration </legend>
                    <form action="backend/adminSign-upBackend.php" method="POST" class="myAdminForm">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name" <?php

                                                                                                                if (isset($_SESSION["name_error"])) {


                                                                                                                ?> style="border:1px solid red;" <?php
                                                                                                                                                }
                                                                                                                                                    ?> value="<?php if (isset($_SESSION["old_name"])) { ?><?php echo $_SESSION["old_name"]; ?><?php } ?>">


                        </div>

                        <?php
                        if (isset($_SESSION["name_error_admin"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["name_error_admin"]; ?>.</h1>


                        <?php
                        }
                        unset($_SESSION["name_error_admin"]);

                        ?>



                        <?php
                        if (isset($_SESSION["number_error_admin"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["number_error_admin"]; ?>.</h1>


                        <?php
                        }
                        unset($_SESSION["number_error_admin"]);
                        ?>

                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter the Email" <?php

                                                                                                                if (isset($_SESSION["email_error"])) {


                                                                                                                ?> style="border:1px solid red;" <?php
                                                                                                                                                }
                                                                                                                                                    ?> value="<?php if (isset($_SESSION["old_email"])) { ?><?php echo $_SESSION["old_email"]; ?><?php } ?>">
                        </div>


                        <?php
                        if (isset($_SESSION["email_error_admin"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["email_error_admin"]; ?>.</h1>


                        <?php
                        }
                        unset($_SESSION["email_error_admin"]);

                        ?>

                        <?php
                        if (isset($_SESSION["email_duplicate_admin"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["email_duplicate_admin"]; ?>.</h1>


                        <?php
                        }
                        unset($_SESSION["email_duplicate_admin"]);

                        ?>








                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter the Password" <?php

                                                                                                                            if (isset($_SESSION["password_error"])) {


                                                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                                                            }
                                                                                                                                                                ?>>
                        </div>


                        <?php
                        if (isset($_SESSION["password_error_admin"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["password_error_admin"]; ?>.</h1>


                        <?php
                        }
                        unset($_SESSION["password_error_admin"]);
                        ?>

                        <div class="mb-3">
                            <label for="confirm_pass" class="form-label">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_pass" placeholder="Enter the Password again" <?php

                                                                                                                                    if (isset($_SESSION["confirmPass_error"])) {


                                                                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                                                                                    }
                                                                                                                                                                        ?>>
                        </div>


                        <?php
                        if (isset($_SESSION["confirmPass_error_admin"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["confirmPass_error_admin"]; ?>.</h1>


                        <?php
                        }
                        unset($_SESSION["confirmPass_error_admin"]);
                        ?>



                        <div class="d-flex bd-highlight submitSec mt-5">
                            <div class=" flex-grow-1 bd-highlight"><a href="./adminSign-in.php" class="text-decoration-none">I have already account | Sign In</a></div>
                            <div class="bd-highlight me-5"><button type="submit" class="btn btn-primary">Submit</button></div>

                        </div>

                        <?php
                        if (isset($_SESSION["insertSuccessAdmin"])) {
                        ?>

                            <h1 class="sessionSuccess"><?php echo $_SESSION["insertSuccessAdmin"]; ?>.</h1>


                        <?php
                        }
                        unset($_SESSION["insertSuccessAdmin"]);
                        ?>






                </div>

            </div>



            </form>
        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php session_destroy(); ?>