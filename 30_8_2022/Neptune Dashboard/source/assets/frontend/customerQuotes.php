<?php session_start();

if (!isset($_SESSION['idDataFromDbSession'])) {
    header('location: error.php');
}

$localhost = "localhost";
$username = "root";
$passwordDb = "";
$db = "home";
$con = mysqli_connect($localhost, $username, $passwordDb, $db);
$userId = $_SESSION['idDataFromDbSession'];














$defaultPicQueary = "SELECT default_profile_pic FROM users WHERE id='$userId'";
$defaultPicQuearyRes = mysqli_query($con, $defaultPicQueary);

$defaultPicDbValue = mysqli_fetch_assoc($defaultPicQuearyRes)["default_profile_pic"];




















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
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/neptune.png" />


    <style>
        .usersShowCard {
            height: 350px;
            overflow: scroll;
        }
    </style>


</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <div class="d-flex flex-row bd-highlight ">
                            <div class="bd-highlight">

                                <span class="user-info-text fw-bold"><?php


                                                                        // $oldName = $_SESSION["nameDataFromDbSession"];

                                                                        // if (isset($_SESSION["updatedName"])) {
                                                                        //   $oldName = $_SESSION["updatedName"];
                                                                        // }


                                                                        // echo $oldName;

                                                                        if (isset($_SESSION["nameDataFromDbSession"])) {
                                                                            echo $_SESSION["nameDataFromDbSession"];
                                                                        }



                                                                        ?></span>
                                <span class="user-state-info text-info"><?php


                                                                        // $oldEmail = $_SESSION["signInEmailUser"];

                                                                        // if (isset($_SESSION["updatedEmail"])) {
                                                                        //   $oldEmail = $_SESSION["updatedEmail"];
                                                                        // }


                                                                        // echo $oldEmail;

                                                                        if (isset($_SESSION["signInEmailUser"])) {
                                                                            echo $_SESSION["signInEmailUser"];
                                                                        }


                                                                        ?></span>

                            </div>
                            <div class=" bd-highlight">
                                <img src="../../templates/admin1/uploads/profile/<?php echo $defaultPicDbValue ?>">
                                <span class="activity-indicator"></span>

                            </div>

                        </div>
                    </a>




                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>

                    <li class="">
                        <a href="../../templates/admin1/index.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>

                    </li>



                    <li class="">
                        <a href="../../templates/admin1/profile.php"><i class="material-icons-two-tone">person_4</i>Profile</a>
                    </li>

                    <li class="">
                        <a href="indexUsers.php" target="_blank"><i class="material-icons-two-tone">visibility</i>Visit Client Site</a>
                    </li>

                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">

                            <li>
                                <a href="homeSectionEdit.php">Home Section</a>
                            </li>
                            <li>
                                <a href="aboutMESectionEdit.php">About Me Section</a>
                            </li>
                            <li>
                                <a href="services.php">Services and Solution</a>
                            </li>
                            <li>

                                <a href="recentWorkEdit.php">Recent Works</a>
                            </li>
                            <li>

                                <a href="customerQuotes.php">Customer Quotes Section</a>
                            </li>
                            <li>

                                <a href="contactMe.php">Contact Me Section</a>
                            </li>
                        </ul>
                    </li>







                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link active" href="#">Applications</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown" data-bs-toggle="dropdown"><img src="../../assets/images/flags/us.png" alt=""></a>
                                    <ul class="dropdown-menu dropdown-menu-end language-dropdown" aria-labelledby="languageDropDown">
                                        <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/germany.png" alt="">German</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/italy.png" alt="">Italian</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/china.png" alt="">Chinese</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">4</a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Notifications</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">campaign</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Donec tempus nisi sed erat vestibulum, eu suscipit ex laoreet</p>
                                                        <small>19:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">bolt</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Quisque ligula dui, tincidunt nec pharetra eu, fringilla quis mauris</p>
                                                        <small>18:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-success text-white">
                                                            <i class="material-icons-outlined">alternate_email</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin velit sit amet auctor porta</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  btn btn-danger text-light" href="../../templates/admin1/logOutBackend.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">

                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Customer Quotes </h1>

                                </div>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">


                                        <form action="customerQuotesBackend.php" method="POST" enctype="multipart/form-data">

                                            <input type="text" class="form-control m-b-md" name="CustomerTitle" placeholder="Enter the Customer Name">

                                            <?php
                                            if (isset($_SESSION["CustomerTitleError"])) {

                                            ?>
                                                <div class="alert alert-danger mt-3 p-3">
                                                    <?php echo $_SESSION["CustomerTitleError"]; ?>
                                                </div>

                                            <?php

                                            }

                                            ?>

                                            <input type="text" class="form-control m-b-md" name="CustomerSubTitle" placeholder="Enter the position of Customer">


                                            <?php
                                            if (isset($_SESSION["CustomerSubTitleError"])) {

                                            ?>
                                                <div class="alert alert-danger mt-3 p-3">
                                                    <?php echo $_SESSION["CustomerSubTitleError"]; ?>
                                                </div>

                                            <?php

                                            }

                                            ?>




                                            <textarea class="form-control" rows="3" placeholder="UserDescription" name="CustomerDescription"></textarea>

                                            <?php
                                            if (isset($_SESSION["CustomerDescriptionError"])) {

                                            ?>
                                                <div class="alert alert-danger mt-3 p-3">
                                                    <?php echo $_SESSION["CustomerDescriptionError"]; ?>
                                                </div>

                                            <?php

                                            }

                                            ?>









                                    </div>
                                </div>
                            </div>













                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">



                                        <div class="card-header">
                                            Customer Picture
                                        </div>



                                        <div class="profileImg mt-3 mb-3">
                                            <img src="" alt="" width="100px" height="100px">
                                        </div>

                                        <input type="file" class="form-control m-b-md" name="CustomerphotoUpload">
                                        <button type="submit" class="btn btn-success" name="CustomerUploadBtn">Submit</button>
                                        </form>
                                    </div>

                                    <?php
                                    if (isset($_SESSION["Photo_update_success_Customer"])) {

                                    ?>
                                        <div class="alert alert-success mt-3 p-3">
                                            <?php echo $_SESSION["Photo_update_success_Customer"]; ?>
                                        </div>

                                    <?php

                                    }

                                    ?>
                                    <?php
                                    if (isset($_SESSION["insert_CustomerSec_success"])) {

                                    ?>
                                        <div class="alert alert-success mt-3 p-3">
                                            <?php echo $_SESSION["insert_CustomerSec_success"]; ?>
                                        </div>

                                    <?php

                                    }

                                    ?>
                                </div>
                            </div>























                        </div>






                    </div>
                </div>
            </div>

            <?php require_once('../../templates/admin1/footer.php');



            ?>