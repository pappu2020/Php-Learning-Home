<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleSignUp.css">
</head>

<body>
    <div class="container-fluid">


        <div class="headingDiv">
            <img src="img/logo2.JPG" alt="" width="160px" height="90px" class="headingImg">
        </div>

        <div class="row mainContainer">
            <div class="col-lg-4 regLeftPart">

                <div class="leftPartRegStart">


                    <legend> Registration </legend>
                    <form action="backend/signUpBackend.php" method="POST">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name" <?php

                                                                                                                if (isset($_SESSION["name_error"])) {


                                                                                                                ?> style="border:1px solid red;" <?php
                                                                                                                }
                                                                ?> value="<?php if (isset($_SESSION["old_name"])) { ?><?php echo $_SESSION["old_name"]; ?><?php } ?>">


                        </div>

                        <?php
                        if (isset($_SESSION["name_error"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["name_error"]; ?>.</h1>


                        <?php
                        }

                        ?>








                        <div class="mb-3">
                            <label for="phoneNum" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phoneNum" placeholder="Enter the phone number" <?php

                                                                                                                            if (isset($_SESSION["number_error"])) {


                                                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                            }
                                                                ?> value="<?php if (isset($_SESSION["old_number"])) { ?><?php echo $_SESSION["old_number"]; ?><?php } ?>">
                        </div>


                        <?php
                        if (isset($_SESSION["number_error"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["number_error"]; ?>.</h1>


                        <?php
                        }

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
                        if (isset($_SESSION["email_error"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["email_error"]; ?>.</h1>


                        <?php
                        }

                        ?>

                        <?php
                        if (isset($_SESSION["email_duplicate"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["email_duplicate"]; ?>.</h1>


                        <?php
                        }

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
                        if (isset($_SESSION["password_error"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["password_error"]; ?>.</h1>


                        <?php
                        }

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
                        if (isset($_SESSION["confirmPass_error"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["confirmPass_error"]; ?>.</h1>


                        <?php
                        }

                        ?>





                </div>

            </div>


            <div class="col-lg-8 regRightPart">

                <div class="rightPartRegStart">

                    <div class="col-lg-3 mb-3">
                        <select class="form-select" name="courses" <?php

                                                                    if (isset($_SESSION["courses_error"])) {


                                                                    ?> style="border:1px solid red;" <?php
                                                                    }
                                                                ?> value="<?php if (isset($_SESSION["old_courses"])) { ?><?php echo $_SESSION["old_courses"]; ?><?php } ?>">
                            <option>Select Course</option>
                            <option value="Professional web design">Professional web design</option>
                            <option value="Professional Web Development">Professional Web Development</option>
                            <option value="Graphics Design">Graphics Design</option>
                            <option value="Programming language with python">Programming language with python</option>

                        </select>
                        <?php
                        if (isset($_SESSION["courses_error"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["courses_error"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>





                    <div class="row g-3">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Father's name" name="fatheName" <?php

                                                                                                                    if (isset($_SESSION["fatheName_error"])) {


                                                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                                    }
                                                                ?>value="<?php if (isset($_SESSION["old_fatheName"])) { ?><?php echo $_SESSION["old_fatheName"]; ?><?php } ?>">
                            <?php
                            if (isset($_SESSION["fatheName_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["fatheName_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>






                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Mother's name" name="motherName" <?php

                                                                                                                    if (isset($_SESSION["motherName_error"])) {


                                                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                                    }
                                                                ?>value="<?php if (isset($_SESSION["old_motherName"])) { ?><?php echo $_SESSION["old_motherName"]; ?><?php } ?>">
                            <?php
                            if (isset($_SESSION["motherName_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["motherName_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>





                        <div class="col-lg-4">
                            <input type="number" class="form-control" placeholder="Gurdian Phone Number" name="gurdianPhone" <?php

                                                                                                                                if (isset($_SESSION["number_error_gur"])) {


                                                                                                                                ?> style="border:1px solid red;" <?php
                                                                                                                                }
                                                                ?>value="<?php if (isset($_SESSION["old_number_gur"])) { ?><?php echo $_SESSION["old_number_gur"]; ?><?php } ?>">
                            <?php
                            if (isset($_SESSION["number_error_gur"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["number_error_gur"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>







                        <div class="col-lg-4 mt-4">
                            <input type="number" class="form-control" placeholder="National Id Number" name="nationalid">
                        </div>






                        <div class="col-lg-4 mt-4">
                            <input type="number" class="form-control" placeholder="Birth Registration Number" name="birthRegNum">
                        </div>






                        <div class="col-lg-1">
                            <label for="dob" class="form-label dobHeading">DOB</label>
                        </div>




                        <div class="col-lg-3 mt-4">
                            <input type="date" class="form-control" placeholder="DOB" name="dob" <?php

                                                                                                    if (isset($_SESSION["dob_error"])) {


                                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                    }
                                                                ?>value="<?php if (isset($_SESSION["old_number_dob"])) { ?><?php echo $_SESSION["old_number_dob"]; ?><?php } ?>">

                            <?php
                            if (isset($_SESSION["dob_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["dob_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>




                    </div>


                    <div class="row g-3">
                        <div class="col-lg-2 mt-5">
                            <input type="text" class="form-control" placeholder="Ocupation" name="ocupation" <?php

                                                                                                                if (isset($_SESSION["ocupation_error"])) {


                                                                                                                ?> style="border:1px solid red;" <?php
                                                                                                                }
                                                                ?>value="<?php if (isset($_SESSION["old_number_ocupation"])) { ?><?php echo $_SESSION["old_number_ocupation"]; ?><?php } ?>">

                            <?php
                            if (isset($_SESSION["ocupation_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["ocupation_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>




                        <div class="col-lg-2 mt-5">
                            <select class="form-select" name="bloodGrp" <?php

                                                                        if (isset($_SESSION["bloodGrp_error"])) {


                                                                        ?> style="border:1px solid red;" <?php
                                                                        }
                                                                ?>value="<?php if (isset($_SESSION["old_number_bloodGrp"])) { ?><?php echo $_SESSION["old_number_bloodGrp"]; ?><?php } ?>">
                                <option selected>Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                            </select>
                            <?php
                            if (isset($_SESSION["bloodGrp_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["bloodGrp_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>





                        <div class="col-lg-2 mt-5">
                            <select class="form-select" name="religion" <?php

                                                                        if (isset($_SESSION["religion_error"])) {


                                                                        ?> style="border:1px solid red;" <?php
                                                                        }
                                                                ?>value="<?php if (isset($_SESSION["old_number_religion"])) { ?><?php echo $_SESSION["old_number_religion"]; ?><?php } ?>">
                                <option selected>Religion</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Christian">Christian</option>
                                <option value="Budhist">Budhist</option>

                            </select>
                            <?php
                            if (isset($_SESSION["religion_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["religion_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>





                        <div class="col-lg-3 mt-5 mt-4">
                            <select class="form-select" name="Gender" <?php

                                                                        if (isset($_SESSION["Gender_error"])) {


                                                                        ?> style="border:1px solid red;" <?php
                                                                        }
                                                                ?>value="<?php if (isset($_SESSION["old_number_Gender"])) { ?><?php echo $_SESSION["old_number_Gender"]; ?><?php } ?>">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                Gender

                            </select>
                            <?php
                            if (isset($_SESSION["Gender_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["Gender_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>




                        <div class="col-lg-3 mt-5 mt-4">
                            <select class="form-select" name="Howtoknowaboutus" <?php

                                                                                if (isset($_SESSION["Howtoknowaboutus_error"])) {


                                                                                ?> style="border:1px solid red;" <?php
                                                                                }
                                                                ?>value="<?php if (isset($_SESSION["old_number_Howtoknowaboutus"])) { ?><?php echo $_SESSION["old_number_Howtoknowaboutus"]; ?><?php } ?>">
                                <option selected>How to know about us</option>
                                <option value="Social media">Social media</option>
                                <option value="Friends">Friends</option>
                                <option value="Employees">Employees</option>
                                <option value="others">others</option>

                            </select>
                            <?php
                            if (isset($_SESSION["Howtoknowaboutus_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["Howtoknowaboutus_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>




                    </div>




                    <div class="row g-3">

                        <div class="col-lg-6 mt-5">
                            <div class="input-group">
                                <span class="input-group-text">present Address</span>
                                <textarea class="form-control" name="presentAddress" <?php

                                                                                        if (isset($_SESSION["presentAddress_error"])) {


                                                                                        ?> style="border:1px solid red;" <?php
                                                                                        }
                                                                ?>value="<?php if (isset($_SESSION["old_number_presentAddress"])) { ?><?php echo $_SESSION["old_number_presentAddress"]; ?><?php } ?>"></textarea>

                            </div>
                            <?php
                            if (isset($_SESSION["presentAddress_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["presentAddress_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>


                        <div class="col-lg-6 mt-5">
                            <div class="input-group">
                                <span class="input-group-text">parmanent Address</span>
                                <textarea class="form-control" name="parmanentAddress" <?php

                                                                                        if (isset($_SESSION["parmanentAddress_error"])) {


                                                                                        ?> style="border:1px solid red;" <?php
                                                                                        }
                                                                ?>value="<?php if (isset($_SESSION["old_number_parmanentAddress"])) { ?><?php echo $_SESSION["old_number_parmanentAddress"]; ?><?php } ?>"></textarea>

                            </div>
                            <?php
                            if (isset($_SESSION["parmanentAddress_error"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["parmanentAddress_error"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>





                    </div>


                    <div class="d-flex bd-highlight submitSec mt-5">
                        <div class=" flex-grow-1 bd-highlight"><a href="./sign-in.php" class="text-decoration-none">I have already account | Sign In</a></div>
                        <div class="bd-highlight me-5"><button type="submit" class="btn btn-primary btn-lg rounded-pill">Registration</button></div>

                    </div>

                    <?php
                    if (isset($_SESSION["insertSuccess"])) {
                    ?>

                        <h1 class="sessionError"><?php echo $_SESSION["insertSuccess"]; ?>.</h1>


                    <?php
                    }

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