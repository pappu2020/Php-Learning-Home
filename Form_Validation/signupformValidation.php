<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./styleFormValidation.css">
</head>

<body>
    <div class="container">



        <div class="myForm">


            <div class="row">
                <div class="col-lg-8 m-auto">

                    <form action="./signupBackendFormValidation.php" method="POST" class="w-50 border border-dark mt-5 p-3">

                        <legend>Registration Form</legend>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name: " id="nameValidation" pattern="*([a-z])(*[A-Z])">

                        </div>

                        <div id="nameShow" class="alert alert-success p-2">
                            <p class="fst-italic text-dark">Name is Correct</p>
                        </div>

                        <div id="nameShowInvalid" class="alert alert-danger p-2">
                            <p class="fst-italic text-dark">Name is Incorrect</p>
                        </div>

                        <?php

                        if (isset($_SESSION['name_error'])) {

                        ?>

                            <div class="nameError alert alert-danger p-3">

                                <?php

                                echo $_SESSION['name_error'];

                                ?>

                            </div>



                        <?php


                        }


                        ?>



                        <?php

                        if (isset($_SESSION['name_error_number'])) {

                        ?>

                            <div class="nameError alert alert-danger p-3">

                                <?php

                                echo $_SESSION['name_error_number'];

                                ?>

                            </div>



                        <?php


                        }


                        ?>


                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter the Email: ">

                        </div>


                        <?php

                        if (isset($_SESSION['email_error'])) {

                        ?>

                            <div class="emailError alert alert-danger p-3">

                                <?php

                                echo $_SESSION['email_error'];

                                ?>

                            </div>



                        <?php


                        }


                        ?>




                        <div class="gender mt-2 mb-2">

                            <label for="gender" class="form-label me-3">Gender : </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="male">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>


                            <input class="form-check-input ms-3" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="female">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>

                        <?php

                        if (isset($_SESSION["flexRadioDefault_error"])) {

                        ?>

                            <div class="genderError alert alert-danger">
                                <?php echo  $_SESSION["flexRadioDefault_error"]   ?>
                            </div>



                        <?php
                        }

                        ?>



                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter the Password: " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password">

                        </div>


                        <div class="showPass">
                            <!-- <input type="checkbox" class="form-check-input checkPassword" onclick="showpass()" value=""> -->

                            <button type="button" class="btn checkPassword" onclick="showpass()"><span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></span></button>


                            <button type="button" class="btn hidePassword" onclick="showpass()"><span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z" />
                                    </svg></span></button>

                        </div>


                        <div id="message">

                            <p>Password Should Be...</p>
                            <p id="lower">A <b>Lower case letter</b> </p>
                            <p id="upper">A <b>Upper case letter</b> </p>
                            <p id="number">A <b>Number</b> </p>
                            <p id="min">At least <b>8 Character</b></p>

                        </div>



                        <?php

                        if (isset($_SESSION['password_error'])) {

                        ?>

                            <div class="passwordError alert alert-danger p-3">

                                <?php

                                echo $_SESSION['password_error'];

                                ?>

                            </div>



                        <?php


                        }


                        ?>






                        <div class="mb-3 mt-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Enter the Password again: " id="confirmPass">

                        </div>

                        <div class="showPass">
                            <!-- <input type="checkbox" class="form-check-input checkPassword" onclick="showpass()" value=""> -->

                            <button type="button" class="btn checkPassword checkPasswordConfirm " onclick="showpassForConfirmPass()"><span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></span></button>


                            <button type="button" class="btn hidePassword hidePasswordConfirm" onclick="showpassForConfirmPass()"><span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z" />
                                    </svg></span></button>

                        </div>



                        <?php

                        if (isset($_SESSION['confirmPassword_error'])) {

                        ?>

                            <div class="confirmPasswordError alert alert-danger p-3">

                                <?php

                                echo $_SESSION['confirmPassword_error'];

                                ?>

                            </div>



                        <?php


                        }


                        ?>







                        <div class="address">
                            <label for="address">Enter the Address</label>
                            <textarea name="address" id="" cols="40" rows="5"></textarea>
                        </div>



                        <?php

                        if (isset($_SESSION['address_error'])) {

                        ?>

                            <div class="addressError alert alert-danger p-3">

                                <?php

                                echo $_SESSION['address_error'];

                                ?>

                            </div>



                        <?php


                        }


                        ?>











                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>




        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./jsFileformValidation.js"></script>
</body>

</html>


session_destroy();

?>