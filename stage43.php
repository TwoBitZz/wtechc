<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  // it will never let you open index(login) page if session is set
  if ( !isset($_SESSION['hack2']) ) {
      header("Location: stage41.php");
      exit;
    }
  // select loggedin users detail
    $res=mysql_query("SELECT * FROM hak3 WHERE hid=".$_SESSION['hack3']);
    $userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>

        <!-- TITLE OF SITE -->
        <title>FUSION Responsive</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="Free Responsive Animated Portfolio Template" />
        <meta name="keywords" content="portfolio, template, responsive, bootstrap" />
        <meta name="developer" content="TemplateOcean">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="noindex">

        <!-- FAV AND TOUCH ICONS   -->
        <link rel="icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
        <!-- font-family: 'Merriweather', serif; -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- font-family: 'Open Sans', sans-serif; -->

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- Image Slider -->
        <link rel="stylesheet" href="css/plagin-css/owl.carousel.css">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="icons/rik-icons/styles.css">

        <!--   COUSTOM CSS link  -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->


    </head>
    <body class="style-1">

        <!-- Start: Preloader Section
        =================================== -->
        <div id="main-preloader" class="main-preloader semi-dark-background">
            <div class="container full-height">
                <div class="row full-height">
                    <div class="full-height col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="main-preloader-inner">

                            <h1 class="preloader-percentage">
                                <span class="preloader-percentage-text">0%</span> <!-- Show Percentage Number -->
                                <!-- <span class="percentage">%</span> -->
                            </h1>
                            <div class="preloader-bar-outer">
                                <div class="preloader-bar"></div> <!-- Percentage Precess Bar -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End: Preloader Section
        =================================== -->



        <!-- Start: Navbar  Area
        ============================= -->
        <nav class="navbar navbar-fixed-top main-navbar-top navbar-top-js" id="main-navbar-top" >
            <div class="container relative">
                <div class="navbar-header">

                    <!-- Menu Button show Mobile view -->
                    <button type="button" class="nav-trigger nav-trigger-animate"  data-target="#js-navbar-menu">
                        <span aria-hidden="true" class="icon"></span>
                    </button>

                    <!-- TEMPLATE LOGO LIGHT -->
                    <a class="navbar-brand light-logo btn-scroll" href="#home-section"><img src="images/logo.png" alt="" class="img-responsive"></a>

                </div>



                <!-- Right Side Navigation Button -->
                <div class="navbar-collapse-right hidden-xs " >
                    <ul class="nav navbar-nav navbar-right btn-scroll">
                        <li><a class="btn-nav" href="#contact-us-section">Get in Touch <i class="icon icon-arrow-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- End: Navbar Area
        ============================= -->




        <!--Start: 1st Section
            - HOME PAGE
        ====================================-->
        <div class="section section-item home-section overflow hide-overlay overlay-color bg-image-1 wow" id="home-section">
            <div class="inner-container ">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

                            <div class="home-content-outer text-center">

                                <div class="overflow">
                                    <div class="heading-outer left-right relative">
                                        <div class="heading-outer top-bottom relative">
                                            <div class="overflow p-t-40 p-l-40 p-r-40 p-b-40">
                                                <div class="section-heading-outer">
                                                    <h1 class="heading">Congrats! <span class="color">You have Completed</span>, the GAME</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>




        <!-- SCRIPTS
        ========================================-->
        <script src="js/plagin-js/jquery-1.11.3.js"></script>
        <script src="js/plagin-js/preloader.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/plagin-js/plagin.js"></script>

        <!-- Custom Script
        ==========================================-->
        <script src="js/custom-scripts.js"></script>



    </body>

</html>
