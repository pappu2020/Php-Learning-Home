<?php require_once("../../DbConnect/db_connect.php");

session_start();

//home Section

$defaultPicQuearyHome = "SELECT defaultPhoto FROM homesection";
$defaultPicQuearyHomeRes = mysqli_query($con, $defaultPicQuearyHome);

$defaultPicDbValueHome = mysqli_fetch_assoc($defaultPicQuearyHomeRes)["defaultPhoto"];
$_SESSION["client_Photo"] = $defaultPicDbValueHome;
$client_Photo = $defaultPicDbValueHome;
// }


$getClientName = "SELECT title FROM homesection";
$getClientdescription = "SELECT description FROM homesection";

$getClientNameRes = mysqli_query($con, $getClientName);
$getClientdescriptionRes = mysqli_query($con, $getClientdescription);



$getName = mysqli_fetch_assoc($getClientNameRes)["title"];
$getDescription = mysqli_fetch_assoc($getClientdescriptionRes)["description"];





//Service section

$dataCollect = "SELECT * FROM services WHERE ServiceStatus='Active'";

$dataCollectRes = mysqli_query($con, $dataCollect);


//Recent Work Section

$getRecentWorkData = "SELECT * FROM recentworks WHERE status='Active'";
$getRecentWorkDataRes = mysqli_query($con, $getRecentWorkData);



//Customer quotes Data


$customerQuotesData = "SELECT * FROM customerquotes";
$customerQuotesDataRes = mysqli_query($con, $customerQuotesData);


//About Me Section


$aboutMeData = "SELECT * FROM aboutme";
$aboutMeDataRes = mysqli_query($con, $aboutMeData);

$aboutMeDescription = "SELECT aboutMeDescription FROM aboutme";
$aboutMeDescriptionRes = mysqli_query($con, $aboutMeDescription);
$desAboutRes = mysqli_fetch_assoc($aboutMeDescriptionRes)["aboutMeDescription"];


//Contact Me address

$contactAddressData = "SELECT * FROM contactmeaddress";
$contactAddressDataRes = mysqli_query($con, $contactAddressData);

$ContsctAddressDescription = "SELECT Contact_Description FROM contactmeaddress";
$ContsctAddressDescriptionRes = mysqli_query($con, $ContsctAddressDescription);
$desContsctAddressRes = mysqli_fetch_assoc($ContsctAddressDescriptionRes)["Contact_Description"];










?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.html" class="navbar-brand logo-sticky-none">
                                    <h1>Pappu Saha</h1>
                                </a>
                                <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?php


                                                                                echo $getName;


                                                                                ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">I'm <?php


                                                                                echo $getName;


                                                                                ?>, <?php


                                                                                    echo $getDescription;


                                                                                    ?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="imgHome/<?php
                                                echo $client_Photo;
                                                ?>" alt="" width="550px" height="750px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <div class="about-img">
                            <img src="img/banner/banner_img2.png" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>



                        <div class="about-content">
                            <p><?php print_r($desAboutRes) ?></p>
                            <h3>Education</h3>

                        </div>


                        <?php
                        foreach ($aboutMeDataRes as $aboutMe) {


                        ?>
                            <div class="education">

                                <div class="year"><?php print_r($aboutMe["aboutMerYear"]) ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?php print_r($aboutMe["aboutMeDegreeTitle"]) ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width:<?php print_r($aboutMe["aboutMePercentage"]) ?>%;" aria-valuenow="<?php print_r($aboutMe["aboutMePercentage"]) ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <?php

                    foreach ($dataCollectRes as $services) {


                    ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?php print_r($services["serviceIcon"]) ?>"></i>
                                <h3><?php print_r($services["serviceTitle"]) ?></h3>
                                <p>
                                    <?php print_r($services["serviceDescription"]) ?>

                                </p>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="img/images/1.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Design</span>
                                <h4><a href="portfolio-single.html">Hamble Triangle</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="img/images/2.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Video</span>
                                <h4><a href="portfolio-single.html">Dark Beauty</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="img/images/3.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Audio</span>
                                <h4><a href="portfolio-single.html">Gilroy Limbo.</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="img/images/4.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Design</span>
                                <h4><a href="portfolio-single.html">Ipsum which</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="img/images/5.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Creative</span>
                                <h4><a href="portfolio-single.html">Eiusmod tempor</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="img/images/6.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>UX/UI</span>
                                <h4><a href="portfolio-single.html">again there</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">


                        <?php
                        foreach ($getRecentWorkDataRes as $recentWork) {



                        ?>

                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?php print_r($recentWork["recentIcon"]) ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php print_r($recentWork["recentNumber"]) ?></span></h2>
                                        <span><?php print_r($recentWork["recentDescription"]) ?></span>
                                    </div>
                                </div>
                            </div>


                        <?php } ?>



                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">



                    <div class="col-xl-9 col-lg-10">

                        <div class="testimonial-active">


                            <?php

                            foreach ($customerQuotesDataRes as $customer) {
                            ?>

                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="imgCustomer/<?php print_r($customer["defaultPhoto"]) ?>" width="175px" height="175px" class="rounded-circle">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?php print_r($customer["CustomerDescription"]) ?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?php print_r($customer["CustomerTitle"]) ?></h5>
                                            <span><?php print_r($customer["CustomerSubTitle"]) ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- <div class="single-testimonial text-center">
                                <div class="testi-avatar">
                                    <img src="imgCustomer/<?php print_r($customer["defaultPhoto"]) ?>" width="175px" height="175px" class="rounded-circle">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span><?php print_r($customer["CustomerDescription"]) ?> <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5><?php print_r($customer["CustomerTitle"]) ?></h5>
                                        <span><?php print_r($customer["CustomerSubTitle"]) ?></span>
                                    </div>
                                </div>
                            </div> -->
                        </div>



                    </div>















                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img01.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img02.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img04.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img05.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p><?php echo $desContsctAddressRes ?></p>
                            <h5>OFFICE IN <span>Bangladesh</span></h5>

                            <?php
                            foreach ($contactAddressDataRes as $contactaddress) {



                            ?>

                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?php print_r($contactaddress["contactAddress"]) ?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?php print_r($contactaddress["ContactPhone"]) ?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?php print_r($contactaddress["contactEmail"]) ?></li>
                                    </ul>
                                </div>

                            <?php } ?>




                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form" id="myForm">
                            <form action="contactMeBackend.php" method="POST">
                                <input type="text" placeholder="your name *" name="name">
                                <?php
                                if (isset($_SESSION["name_error"])) {
                                ?>

                                    <div class="alert alert-danger">
                                        <?php echo $_SESSION["name_error"]; ?>
                                    </div>

                                <?php
                                }

                                ?>

                                <input type="text" placeholder="your email *" name="email">
                                <?php
                                if (isset($_SESSION["email_error"])) {
                                ?>

                                    <div class="alert alert-danger">
                                        <?php echo $_SESSION["email_error"]; ?>
                                    </div>

                                <?php
                                }

                                ?>

                                <textarea name="message" id="message" placeholder="your message *" name="message"></textarea>


                                <button class="btn" type="submit">SEND</button>
                                <?php
                                if (isset($_SESSION["insert_ContactMeForm_success"])) {
                                ?>

                                    <div class="alert alert-success mt-3">
                                        <?php echo $_SESSION["insert_ContactMeForm_success"]; ?>
                                    </div>

                                <?php
                                }

                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Pappu saha </span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
<script src="https://kit.fontawesome.com/a5ba7b62ab.js" crossorigin="anonymous"></script>

</html>