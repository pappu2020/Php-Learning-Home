<?php session_start();

if (!isset($_SESSION['idDataFromDbSession'])) {
  header('location: error.php');
}

$localhost = "localhost";
$username = "root";
$passwordDb = "";
$db = "nat_boltu";


$con = mysqli_connect($localhost, $username, $passwordDb, $db);







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

                                                      echo $_SESSION["nameDataFromDbSession"];



                                                      ?></span>
                <span class="user-state-info text-info"><?php


                                                        echo $_SESSION["signInEmailUser"];


                                                        ?></span>

              </div>
              <div class=" bd-highlight">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
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
          <li class="active-page">
            <a href="index.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>

          <li>
            <a href="profile.php"><i class="material-icons-two-tone">person_4</i>Profile</a>
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
                  <a class="nav-link  btn btn-danger text-light" href="logOutBackend.php">Log Out</a>
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
                  <h1>Profile</h1>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4">
                <div class="card widget widget-stats">
                  <div class="card-body">
                    <div class="card-header">
                      Name
                    </div>
                    <form action="profile_Update_post.php" method="POST">
                      <input type="text" class="form-control m-b-md" value="<?php
                                                                            if (isset($_SESSION['nameDataFromDbSession'])) {
                                                                              echo $_SESSION['nameDataFromDbSession'];
                                                                            }

                                                                            ?>" name="nameChange">
                      <button type="submit" class="btn btn-success" name="nameChangeButton">Chenge Name</button>

                      <?php
                      if (isset($_SESSION["duplicate_name"])) {
                      ?>

                        <div class="alert alert-danger mt-3 p-3">
                          <?php echo $_SESSION["duplicate_name"]; ?>
                        </div>

                      <?php
                      }

                      ?>





                      <?php
                      if (isset($_SESSION["updateSuccess"])) {
                      ?>

                        <div class="alert alert-success mt-3 p-3">
                          <?php echo $_SESSION["updateSuccess"]; ?>
                        </div>

                      <?php
                      }

                      ?>

                    </form>
                  </div>
                </div>
              </div>



              <div class="col-xl-4">
                <div class="card widget widget-stats">
                  <div class="card-body">
                    <div class="card-header">
                      Email
                    </div>
                    <form action="profile_Update_post.php" method="POST">
                      <input type="text" class="form-control m-b-md" value="<?php
                                                                            if (isset($_SESSION['signInEmailUser'])) {
                                                                              echo $_SESSION['signInEmailUser'];
                                                                            }

                                                                            ?>" name="emailChange">
                      <button type="submit" class="btn btn-success" name="emailChangeButton">Chenge Email</button>

                      <?php
                      if (isset($_SESSION["duplicate_email"])) {
                      ?>

                        <div class="alert alert-danger mt-3 p-3">
                          <?php echo $_SESSION["duplicate_email"]; ?>
                        </div>

                      <?php
                      }

                      ?>

                      <?php
                      if (isset($_SESSION["updateSuccessEmail"])) {
                      ?>

                        <div class="alert alert-success mt-3 p-3">
                          <?php echo $_SESSION["updateSuccessEmail"]; ?>
                        </div>

                      <?php
                      }

                      ?>

                    </form>
                  </div>
                </div>
              </div>








              <div class="col-xl-4">
                <div class="card widget widget-stats">
                  <div class="card-body">
                    <div class="card-header">
                      Profile Pic
                    </div>
                    <form action="profile_post.php" method="POST">
                      <input type="file" class="form-control m-b-md">
                      <button type="submit" class="btn btn-success">Upload File</button>
                    </form>
                  </div>
                </div>
              </div>

            </div>






          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Javascripts -->
  <script src="../../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
  <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
  <script src="../../assets/plugins/pace/pace.min.js"></script>
  <script src="../../assets/plugins/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/js/main.min.js"></script>
  <script src="../../assets/js/custom.js"></script>
  <script src="../../assets/js/pages/dashboard.js"></script>
</body>

</html>

<?php



?>