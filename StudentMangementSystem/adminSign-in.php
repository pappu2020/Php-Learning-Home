<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleAdminSignIn.css">
</head>

<body>
    <div class="container">


        <div class="containerMain">
            <div class="row">
                <div class="col-lg-4 signInleftForm">
                    <h5 class="topHeading">Admin Sign In</h5>
                    <div class="logo">
                        <img src="img/logo2.JPG" alt="" width="160px" height="90px" class="logoImg">
                    </div>





                    <div class="mySignInForm">
                        <form action="backend/adminSignInBackend.php" method="POST">


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="emailAdmin">
                                <?php
                                if (isset($_SESSION["email_error_admin"])) {
                                ?>

                                    <h1 class="sessionError"><?php echo $_SESSION["email_error_admin"]; ?>.</h1>


                                <?php
                                }
                                unset($_SESSION["email_error_admin"]);

                                ?>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="passwordAdmin">
                                <?php
                                if (isset($_SESSION["password_error_admin"])) {
                                ?>

                                    <h1 class="sessionError"><?php echo $_SESSION["password_error_admin"]; ?>.</h1>


                                <?php
                                }
                                unset($_SESSION["password_error_admin"]);

                                ?>

                            </div>


                            <div class="d-flex bd-highlight ">
                                <div class=" flex-grow-1 bd-highlight"><a href="./adminSign-up.php" class="text-decoration-none">I have no account</a></div>
                                <div class="bd-highlight me-3 "><button type="submit" class="btn btn-primary">Sign In</button></div>

                            </div>
                            <?php
                            if (isset($_SESSION["admin_logIn_fail"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["admin_logIn_fail"]; ?>.</h1>


                            <?php
                            }
                            unset($_SESSION["admin_logIn_fail"]);

                            ?>


                        </form>
                    </div>















                </div>

                <div class="col-lg-4 signInRightPart">

                    <div class="bgImgRight">
                        <div class="signInRightText">

                        </div>
                    </div>

                    <div class="text">
                        <p class="para1">Mastermind Better.</p>
                        <p class="para2">Succeed Together.</p>
                        <p class="para3">Get meaningful results with essential tools </p>
                        <p class="para4">for brainstroming, goal setting and accountability.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>