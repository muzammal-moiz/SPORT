<?php
require_once("admin/database.php");

$query="SELECT * from logo ";
$logo=db::getRecord($query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPORTS</title>

    <link rel="shortcut icon" href="admin/uploads/<?php echo $logo['image']; ?>" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="admin/uploads/<?php echo $logo['image']; ?>" style="width: 130px;border-radius: 100%;">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-content">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown main-navbar">
                                <a href="about.php" class="nav-link">About</a>
                            </li>
                            <li class="nav-item dropdown main-navbar">
                                <a href="service.php" class="nav-link">Service</a>
                            </li>
                            <li class="nav-item dropdown main-navbar">
                                <a href="subscription.php" class="nav-link">Subscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <div class="right-area header-action d-flex align-items-center max-un">
                            <a href="sign_in.php" class="login">Login</a>
                            <a href="sign_up.php" class="cmn-btn reg">Join us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- header-section end -->
<!-- Login Registration start -->


