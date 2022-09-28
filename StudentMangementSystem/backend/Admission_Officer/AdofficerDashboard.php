<?php session_start();
require_once('../../backend/db.php');
$addOfficerLoginEmail  = $_SESSION["getEmpEmailSession"];

$allAdOfficerData = "SELECT * FROM employees WHERE email='$addOfficerLoginEmail' AND postion='Admission_Officier'";
$allAdOfficerDataRes = mysqli_query($con, $allAdOfficerData);
$allAdOfficerDataFetch = mysqli_fetch_assoc($allAdOfficerDataRes);



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission Officer Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/adOfficerDashboardStyle.css">
</head>

<body>
    <div class="container-fluid">

        <nav>
            <div class="navBarContainer">
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="bd-highlight menu">


                        <a class="btn mymenuBtn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg></span>
                        </a>

                        <div class="offcanvas offcanvas-start myMenuBody" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                            <div class="offcanvas-body">

                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-solid fa-house-user icon"></i>

                                        <p class="menuListItemPara ms-4">Profile</p>

                                    </div>
                                </a>
                                <a href="./admin/Employee/employeeManagement.php" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-solid fa-users-gear icon"></i>

                                        <p class="menuListItemPara ms-3">Students</p>

                                    </div>
                                </a>
                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-sharp fa-solid fa-sack-dollar icon"></i>

                                        <p class="menuListItemParaStudent ms-4">Salary</p>

                                    </div>
                                </a>
                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
                                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
                                            </svg></span>

                                        <p class="menuListItemParaTuition">Contact</p>

                                    </div>
                                </a>

                                <!-- <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-sharp fa-solid fa-sack-dollar icon"></i>

                                        <p class="menuListItemParaTuition">Tuition</p>

                                    </div>
                                </a>

                                <a href="#" class="menuListItem">
                                    <div class=" bd-highlight menuListItemDiv">

                                        <i class="fa-sharp fa-solid fa-sack-dollar icon"></i>

                                        <p class="menuListItemParaRevenue">Revenue</p>

                                    </div>
                                </a> -->





                            </div>

                        </div>
                    </div>





                    <div class="bd-highlight SearchDiv">

                        <div class="d-flex bd-highlight searchItem">
                            <div class="flex-grow-1 bd-highlight"><input type="text" class="form-control" placeholder="Search.."></div>
                            <div class="bd-highlight searchIconDiv"><span class="searchIcon"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg></span></div>

                        </div>

                    </div>
                    <div class=" bd-highlight">
                        <div class="logo">
                            <img src="../../img/logo2.JPG" alt="" width="160px" height="90px" class="logoImg">
                        </div>
                    </div>
                    <div class=" bd-highlight userTitleDiv">

                        <p class="userTitle">Welcome, <?php
                                                        // if (isset($_SESSION["getEmpnameSession"])) {
                                                        //     echo  $_SESSION["getEmpnameSession"];
                                                        // }
                                                        printf($allAdOfficerDataFetch["name"]);

                                                        ?></p1>
                        <p class="userSubTitle">Admission Officer</p>
                    </div>
                    <div class=" bd-highlight">
                        <img src="../../backend/admin/Employee/empImage/<?php print_r($allAdOfficerDataFetch["photo"]) ?>" class="userImage rounded rounded-circle" alt="" width="60px" height="60px">
                    </div>


                    <div class="bd-highlight">
                        <a href="../signOutBackend.php?id=100" class="btn btn-danger mysignOutBtn">Sign Out</a>
                    </div>

                </div>
            </div>

        </nav>






        <div class="MainSectionContainer">
            <h1 class="mainSectionHeading mb-3">Profile</h1>
            <div class="row mainSectionStart">
                <div class="col-lg-3 mainSectionLeft">

                    <img src="../../backend/admin/Employee/empImage/<?php print_r($allAdOfficerDataFetch["photo"]) ?>" alt="" class="mainSectionLeftImage" width="300px" height="400px">



                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <span class="bd-highlight editIconPicDiv"><svg xmlns="http://www.w3.org/2000/svg" class="editIconPic" width="24" height="24" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg></span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade AdoffModel" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Profile Pic Upload</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="./AdofficerProfileUpdate.php" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        <img src="../../backend/admin/Employee/empImage/<?php print_r($allAdOfficerDataFetch["photo"]) ?>" alt="" class="adOffiCierProfilePic" width="300px" height="300px">
                                        <input type="file" class="form-control mt-3" name="addoffProfileup">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" name="addoffProfileupBtn">Upload</button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>





















                    <div class="d-flex bd-highlight mobileDiv">


                        <p class="mobileNumber flex-grow-1 bd-highlight"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg></span> <?php printf($allAdOfficerDataFetch["phoneNum"]);  ?></p>




                        <!-- Button trigger modal -->
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropMobile">
                            <span class="bd-highlight editIconDiv rounded rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" class="editIcon" width="24" height="24" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg></span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdropMobile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabelMobile">Change Number</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="./AdofficerProfileUpdate.php" method="POST">
                                            <label for="mobileNumChange" class="form-label w-75">New Number</label>
                                            <input type="number" class="form=control w-75" name="adOfficerNumberForChange" placeholder="Enter the NUmber">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"  name="adOfficerUpdateBtn">Update</button>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>












                    </div>



                    <div class="d-flex bd-highlight emailDiv">


                        <p class="email flex-grow-1 bd-highlight"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg></span> <?php if (isset($_SESSION["getEmpEmailSession"])) {
                                                    echo $_SESSION["getEmpEmailSession"];
                                                } ?></p>


                        <span class="bd-highlight editIconDiv rounded rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" class="editIcon" width="24" height="24" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg></span>

                    </div>


                </div>





                <div class="col-lg-8 mainSectionRight">

                    <form action="./AdofficerProfileUpdate.php" method="POST">

                        <div class="row g-3">
                            <div class="col-lg-3">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["name"]; ?>" name="addOfficerName">
                                </div>


                            </div>
                            <div class="col-lg-3">

                                <label for="name" class="form-label">Father Name</label>
                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["fatherName"]; ?>" name="addOfficerFatherName">


                            </div>
                            <div class="col-lg-3">
                                <label for="name" class="form-label">Mother Name</label>
                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["motherName"]; ?>" name="addOfficerMotherName">

                            </div>

                            <div class="col-lg-3">
                                <label for="name" class="form-label">National Id Number</label>
                                <input type="number" class="form-control" value="<?= $allAdOfficerDataFetch["nationalid"]; ?>" name="addOfficerNationalId">

                            </div>

                            <div class="col-lg-3">
                                <label for="name" class="form-label">Birth Reg. Number</label>
                                <input type="number" class="form-control" value="<?= $allAdOfficerDataFetch["birthRegNum"]; ?>" name="addOfficerBirthReg">

                            </div>



                            <div class="col-lg-3">

                                <label for="dob" class="form-label">Date Of Birth</label>

                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["dob"]; ?>" name="addOfficerDob">



                            </div>


                            <div class="col-lg-2">

                                <label for="dob" class="form-label">Blood Group</label>

                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["bloodGrp"]; ?>" name="addOfficerBloodGrp">



                            </div>


                            <div class="col-lg-2">
                                <label for="dob" class="form-label">Religion</label>

                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["religion"]; ?>" name="addOfficerReligion">
                            </div>

                            <div class="col-lg-2">
                                <label for="dob" class="form-label">Gender</label>

                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["Gender"]; ?>" name="addOfficerGender">
                            </div>

                            <div class="col-lg-3">
                                <label for="dob" class="form-label">How to know about us</label>

                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["Howtoknowaboutus"]; ?>" name="addOfficerHoWTo">
                            </div>


                            <div class="col-lg-4">
                                <label for="dob" class="form-label">Present Address</label>

                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["presentAddress"]; ?>" name="addOfficerPresent">
                            </div>


                            <div class="col-lg-4">
                                <label for="dob" class="form-label">Parmanant Address</label>

                                <input type="text" class="form-control" value="<?= $allAdOfficerDataFetch["parmanentAddress"]; ?>" name="addOfficerParmanant">
                            </div>


                            <div class="col-lg-3 addOfficerEditDiv">
                                <button class="addOfficerEditParaLink btn" type="submit" name="addOfficerInfoUpdateBtn">
                                    <p class="addOfficerEditPara">Edit Profile</p>
                                </button>
                            </div>









                        </div>






















                    </form>
                    <?php
                    if (isset($_SESSION["addOfficerUpdateSuccess"])) {


                    ?>

                        <div class="alert alert-success mt-5 w-75"><?= $_SESSION["addOfficerUpdateSuccess"]; ?></div>

                    <?php }
                    unset($_SESSION["addOfficerUpdateSuccess"]) ?>



                    <?php
                    if (isset($_SESSION["updateAddOfficerMobileSuccess"])) {


                    ?>

                        <div class="alert alert-success mt-5 w-75"><?= $_SESSION["updateAddOfficerMobileSuccess"]; ?></div>

                    <?php }
                    unset($_SESSION["updateAddOfficerMobileSuccess"]) ?>




                </div>














            </div>







        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ecd7a02304.js" crossorigin="anonymous"></script>
</body>

</html>