<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signInStyle.css">
</head>

<body>
    <div class="container">


        <div class="containerMain">
            <div class="row">
                <div class="col-lg-4 signInleftForm">
                    <div class="logo">
                        <img src="img/logo2.JPG" alt="" width="160px" height="90px" class="logoImg">
                    </div>





                    <div class="mySignInForm">
                        <form action="./backend/Admission_Officer/AdOfficerSignInBackend.php" method="POST">


                            <div class="mb-">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="employeeEmail">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>

                            <?php
                            if (isset($_SESSION["email_error_employee"])) {

                            ?>

                                <div class="alert alert-danger">
                                    <?php echo $_SESSION["email_error_employee"]; ?>
                                </div>

                            <?php }
                            unset($_SESSION["email_error_employee"]) ?>
                            <div class="mb-1">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="employeePassword">
                            </div>


                            <?php
                            if (isset($_SESSION["password_error_employee"])) {

                            ?>

                                <div class="alert alert-danger">
                                    <?php echo $_SESSION["password_error_employee"]; ?>
                                </div>

                            <?php }
                            unset($_SESSION["password_error_employee"]) ?>


                            <div class="d-flex bd-highlight ">

                                <div class="bd-highlight me-3 "><button type="submit" class="btn btn-primary">Sign In</button></div>

                            </div>

                            <?php
                            if (isset($_SESSION["emp_logIn_fail"])) {

                            ?>

                                <div class="alert alert-danger">
                                    <?php echo $_SESSION["emp_logIn_fail"]; ?>
                                </div>

                            <?php }
                            unset($_SESSION["emp_logIn_fail"]) ?>

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