<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>StrandED</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <div class="header" style="background-color: #A63D2D;">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-2 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="homepage.php"><img src="images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="homepage.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Assessment.html">Assessment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="E-Lecture.html">E-Lecture</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Courses.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2">
                    <ul class="email text_align_right">
                        <li class="d_none"><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
    <!-- end header -->
    <!-- top -->
    <div class="full_bg">
        <div class="slider_main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- End User Greeting Section -->
                         </div>
                        <!-- carousel code -->
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <!-- first slide -->
                                <div class="carousel-item active">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-5">
                                                <div class="board">
                                                    <i><img src="images/top_icon.png" alt="#"/></i>
                                                    <h3>
                                                        UPCOMING<br> EVENT<br> 
                                                    </h3>
                                                    <div class="link_btn">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="banner_img">
                                                <figure><img class="img_responsive carousel-img" src="images/slide1.jpg"></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- second slide -->
                                <div class="carousel-item">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-5">
                                                <div class="board">
                                                    <i><img src="images/top_icon.png" alt="#"/></i>
                                                    <h3>
                                                    UPCOMING<br> EVENT<br>                                                     </h3>
                                                    <div class="link_btn">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="banner_img">
                                                    <<figure><img class="img_responsive carousel-img" src="images/slide1.jpg"></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- third slide-->
                                <div class="carousel-item">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-5">
                                                <div class="board">
                                                    <i><img src="images/top_icon.png" alt="#"/></i>
                                                    <h3>
                                                    UPCOMING<br> EVENT<br>                                                     </h3>
                                                    <div class="link_btn">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="banner_img">
                                                <figure><img class="img_responsive carousel-img" src="images/slide1.jpg"></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- controls -->
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->
    <!-- our class -->
    <div class="class">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>WELCOME TO StrandED!</h2>
                        <p>A comprehensive track path assessment website. Journey on choosing the most suitable track which fits your personal interest.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 margi_bottom">
                    <div class="class_box text_align_center">
                        <i><img src="" alt="#"/></i>
                        <h3>StrandED</h3>
                        <p>is accessible to provide inclusive guidance and equal opportunities for all users, regardless of ability, ensuring everyone can explore and choose their ideal educational track.</p>
                    </div>
                </div>
                <div class="col-md-4 margi_bottom">
                    <div class="class_box blue text_align_center">
                        <i><img src=""></i>
                        <h3>SECURED</h3>
                        <p>The website ensures the security of the students' information and their account.</p>
                    </div>
                </div>
                <div class="col-md-4 margi_bottom">
                    <div class="class_box text_align_center">
                        <i><img src=""></i>
                        <h3>RELIABLE AND RELEVANT INFORMATION</h3>
                        <p>All the contents of the website are assuredly from reliable sources and validated carefully by professionals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our class -->
    <!-- about -->
    <!-- end testimonial -->
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="infoma">
                            <h3>Contact Us</h3>
                            <ul class="conta">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>96 Bayanan, Bacoor City, Bacoor, Philippines</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call (046) 501 1135</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)">admissions.sfacbacoor@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row border_left">
                            <div class="col-md-12">
                                <div class="infoma">
                                    <h3>Newsletter</h3>
                                    <form class="form_subscri">
                                        <div class="row">
                                            <div class="col-md-12"></div>
                                            <div class="col-md-4">
                                                <input class="newsl" placeholder="Enter your email" type="text" name="Enter your email">
                                            </div>
                                            <div class="col-md-4">
                                                <input class="newsl" placeholder="Enter your email" type="text" name="Enter your email">
                                            </div>
                                            <div class="col-md-4">
                                                <button class="subsci_btn">subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="infoma">
                                    <h3>Useful Link</h3>
                                    <ul class="fullink">
                                    <li><a href="homepage.php">Home</a></li>
                                        <li><a href="E-Lecture.html">E-LECTURE</a></li>
                                        <li><a href="Courses.html">COURSES</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="infoma text_align_left">
                                    <ul class="social_icon">
                                        <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                        <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2024 All Rights Reserved By STRANDED</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/custom.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>