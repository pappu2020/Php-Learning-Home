<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employess Registration</title>
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


                    <legend>Employees Registration </legend>
                    <form action="backend/employeeRegBackend.php" method="POST">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="nameEmployee" placeholder="Enter the Name" <?php

                                                                                                                        if (isset($_SESSION["name_errorEmployee"])) {


                                                                                                                        ?> style="border:1px solid red;" <?php
                                                                                                                                                        }
                                                                                                                                                            ?> value="<?php if (isset($_SESSION["old_nameEmployee"])) { ?><?php echo $_SESSION["old_nameEmployee"]; ?><?php } ?>">


                        </div>

                        <?php
                        if (isset($_SESSION["name_errorEmployee"])) {
                        ?>

                            <h1 class="sessionErrorEmployee"><?php echo $_SESSION["name_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>








                        <div class="mb-3">
                            <label for="phoneNum" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phoneNumEmployee" placeholder="Enter the phone number" <?php

                                                                                                                                    if (isset($_SESSION["number_errorEmployee"])) {


                                                                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                                                                                    }
                                                                                                                                                                        ?> value="<?php if (isset($_SESSION["old_numberEmployee"])) { ?><?php echo $_SESSION["old_numberEmployee"]; ?><?php } ?>">
                        </div>


                        <?php
                        if (isset($_SESSION["number_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["number_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>

                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="emailEmployee" placeholder="Enter the Email" <?php

                                                                                                                        if (isset($_SESSION["email_errorEmployee"])) {


                                                                                                                        ?> style="border:1px solid red;" <?php
                                                                                                                                                        }
                                                                                                                                                            ?> value="<?php if (isset($_SESSION["old_emailEmployee"])) { ?><?php echo $_SESSION["old_emailEmployee"]; ?><?php } ?>">
                        </div>


                        <?php
                        if (isset($_SESSION["email_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["email_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>

                        <?php
                        if (isset($_SESSION["email_duplicateEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["email_duplicateEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>








                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="passwordEmployee" placeholder="Enter the Password" <?php

                                                                                                                                    if (isset($_SESSION["password_errorEmployee"])) {


                                                                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                                                                                    }
                                                                                                                                                                        ?>>
                        </div>


                        <?php
                        if (isset($_SESSION["password_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["password_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>

                        <div class="mb-3">
                            <label for="confirm_pass" class="form-label">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_passEmployee" placeholder="Enter the Password again" <?php

                                                                                                                                            if (isset($_SESSION["confirmPass_errorEmployee"])) {


                                                                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                                                                            }
                                                                                                                                                                                ?>>
                        </div>


                        <?php
                        if (isset($_SESSION["confirmPass_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["confirmPass_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>





                </div>

            </div>


            <div class="col-lg-8 regRightPart">

                <div class="rightPartRegStart">

                    <div class="col-lg-3 mb-3">
                        <select class="form-select" name="postion" <?php

                                                                    if (isset($_SESSION["postion_error"])) {


                                                                    ?> style="border:1px solid red;" <?php
                                                                                                    }
                                                                                                        ?> value="<?php if (isset($_SESSION["old_postion"])) { ?><?php echo $_SESSION["old_postion"]; ?><?php } ?>">
                            <option>Select Position</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Admission_Officier">Admission Officier</option>
                            <option value="Maintenance_Technician">Maintenance Technician</option>
                            <option value="Security_Gourd">Security Gourd</option>
                            <option value="Cleaner_Person">Cleaner Person</option>

                        </select>
                        <?php
                        if (isset($_SESSION["postion_error"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["postion_error"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>





                    <div class="row g-3">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Father's name" name="fatherNameEmployee" <?php

                                                                                                                            if (isset($_SESSION["fatheName_errorEmployee"])) {


                                                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                                                            }
                                                                                                                                                                ?>value="<?php if (isset($_SESSION["old_fatheNameEmployee"])) { ?><?php echo $_SESSION["old_fatheNameEmployee"]; ?><?php } ?>">
                            <?php
                            if (isset($_SESSION["fatheName_errorEmployee"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["fatheName_errorEmployee"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>






                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Mother's name" name="motherNameEmployee" <?php

                                                                                                                            if (isset($_SESSION["motherName_errorEmployee"])) {


                                                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                                                            }
                                                                                                                                                                ?>value="<?php if (isset($_SESSION["old_motherNameEmployee"])) { ?><?php echo $_SESSION["old_motherNameEmployee"]; ?><?php } ?>">
                            <?php
                            if (isset($_SESSION["motherName_errorEmployee"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["motherName_errorEmployee"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>





                        <div class="col-lg-4">
                            <input type="number" class="form-control" placeholder="Gurdian Phone Number" name="gurdianPhoneEmployee" <?php

                                                                                                                                        if (isset($_SESSION["number_error_gurEmployee"])) {


                                                                                                                                        ?> style="border:1px solid red;" <?php
                                                                                                                                                                        }
                                                                                                                                                                            ?>value="<?php if (isset($_SESSION["old_number_gurEmployee"])) { ?><?php echo $_SESSION["old_number_gurEmployee"]; ?><?php } ?>">
                            <?php
                            if (isset($_SESSION["number_error_gurEmployee"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["number_error_gurEmployee"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>







                        <div class="col-lg-4 mt-4">
                            <input type="number" class="form-control" placeholder="National Id Number" name="nationalidEmployee">
                        </div>






                        <div class="col-lg-4 mt-4">
                            <input type="number" class="form-control" placeholder="Birth Registration Number" name="birthRegNumEmployee">
                        </div>






                        <div class="col-lg-1">
                            <label for="dob" class="form-label dobHeading">DOB</label>
                        </div>




                        <div class="col-lg-3 mt-4">
                            <input type="date" class="form-control" placeholder="DOB" name="dobEmployee" <?php

                                                                                                            if (isset($_SESSION["dob_errorEmployee"])) {


                                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                                            }
                                                                                                                                                ?>value="<?php if (isset($_SESSION["old_number_dobEmployee"])) { ?><?php echo $_SESSION["old_number_dobEmployee"]; ?><?php } ?>">

                            <?php
                            if (isset($_SESSION["dob_errorEmployee"])) {
                            ?>

                                <h1 class="sessionError"><?php echo $_SESSION["dob_errorEmployee"]; ?>.</h1>


                            <?php
                            }

                            ?>
                        </div>




                   








                    <div class="col-lg-2 mt-5">
                        <select class="form-select" name="bloodGrpEmployee" <?php

                                                                            if (isset($_SESSION["bloodGrp_errorEmployee"])) {


                                                                            ?> style="border:1px solid red;" <?php
                                                                                                            }
                                                                                                                ?>value="<?php if (isset($_SESSION["old_number_bloodGrpEmployee"])) { ?><?php echo $_SESSION["old_number_bloodGrpEmployee"]; ?><?php } ?>">
                            <option selected>Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                        </select>
                        <?php
                        if (isset($_SESSION["bloodGrp_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["bloodGrp_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>





                    <div class="col-lg-2 mt-5">
                        <select class="form-select" name="religionEmployee" <?php

                                                                            if (isset($_SESSION["religion_errorEmployee"])) {


                                                                            ?> style="border:1px solid red;" <?php
                                                                                                            }
                                                                                                                ?>value="<?php if (isset($_SESSION["old_number_religionEmployee"])) { ?><?php echo $_SESSION["old_number_religionEmployee"]; ?><?php } ?>">
                            <option selected>Religion</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Christian">Christian</option>
                            <option value="Budhist">Budhist</option>

                        </select>
                        <?php
                        if (isset($_SESSION["religion_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["religion_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>





                    <div class="col-lg-3 mt-5 mt-4">
                        <select class="form-select" name="GenderEmployee" <?php

                                                                            if (isset($_SESSION["Gender_errorEmployee"])) {


                                                                            ?> style="border:1px solid red;" <?php
                                                                                                            }
                                                                                                                ?>value="<?php if (isset($_SESSION["old_number_GenderEmployee"])) { ?><?php echo $_SESSION["old_number_GenderEmployee"]; ?><?php } ?>">
                            <option selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            Gender

                        </select>
                        <?php
                        if (isset($_SESSION["Gender_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["Gender_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>




                    <div class="col-lg-3 mt-5 mt-4">
                        <select class="form-select" name="HowtoknowaboutusEmployee" <?php

                                                                                    if (isset($_SESSION["Howtoknowaboutus_errorEmployee"])) {


                                                                                    ?> style="border:1px solid red;" <?php
                                                                                                                    }
                                                                                                                        ?>value="<?php if (isset($_SESSION["old_number_HowtoknowaboutusEmployee"])) { ?><?php echo $_SESSION["old_number_HowtoknowaboutusEmployee"]; ?><?php } ?>">
                            <option selected>How to know about us</option>
                            <option value="Social media">Social media</option>
                            <option value="Friends">Friends</option>
                            <option value="Employees">Employees</option>
                            <option value="others">others</option>

                        </select>
                        <?php
                        if (isset($_SESSION["Howtoknowaboutus_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["Howtoknowaboutus_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>




                </div>




                <div class="row g-3">

                    <div class="col-lg-6 mt-5">
                        <div class="input-group">
                            <span class="input-group-text">present Address</span>
                            <textarea class="form-control" name="presentAddressEmployee" <?php

                                                                                            if (isset($_SESSION["presentAddress_errorEmployee"])) {


                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                            }
                                                                                                                                ?>value="<?php if (isset($_SESSION["old_number_presentAddressEmployee"])) { ?><?php echo $_SESSION["old_number_presentAddressEmployee"]; ?><?php } ?>"></textarea>

                        </div>
                        <?php
                        if (isset($_SESSION["presentAddress_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["presentAddress_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>


                    <div class="col-lg-6 mt-5">
                        <div class="input-group">
                            <span class="input-group-text">parmanent Address</span>
                            <textarea class="form-control" name="parmanentAddressEmployee" <?php

                                                                                            if (isset($_SESSION["parmanentAddress_errorEmployee"])) {


                                                                                            ?> style="border:1px solid red;" <?php
                                                                                                                            }
                                                                                                                                ?>value="<?php if (isset($_SESSION["old_number_parmanentAddressEmployee"])) { ?><?php echo $_SESSION["old_number_parmanentAddressEmployee"]; ?><?php } ?>"></textarea>

                        </div>
                        <?php
                        if (isset($_SESSION["parmanentAddress_errorEmployee"])) {
                        ?>

                            <h1 class="sessionError"><?php echo $_SESSION["parmanentAddress_errorEmployee"]; ?>.</h1>


                        <?php
                        }

                        ?>
                    </div>





                </div>


                <div class="d-flex bd-highlight submitSec mt-5">
                    <div class=" flex-grow-1 bd-highlight"><a href="backend/admin/Employee/employeeManagement.php" class="text-decoration-none">Back to the dashboard</a></div>
                    <div class="bd-highlight me-5"><button type="submit" class="btn btn-primary btn-lg rounded-pill">Registration</button></div>

                </div>








            </div>

        </div>


        </form>
    </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php session_destroy(); ?>