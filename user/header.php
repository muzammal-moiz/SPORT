<?php
session_start();
include("database.php");

if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];
//    echo $email;
    $query="SELECT * from user where email='$email'";
    $user=db::getRecord($query);
}else{

    $email=session_id();
}
?>
<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    
    <!-- <link rel="shortcut icon" href="favicon.png"> -->
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/vendor/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/vendor/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Diphylleia&family=Kalnia&family=Lora:wght@600&family=Montserrat:ital,wght@1,700&family=Open+Sans:wght@600&family=Poppins&family=Raleway:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    .form-control{
        height: 70px !important;
    }
    ::placeholder {
        color: black; /* Change this to your desired color */
  }
  h1{
      color:black !Important;
  }
  h2{
      color:black !Important;
  }
  h3{
      color:black !Important;
  }
  h4{
      color:black !Important;
  }
  h5{
      color:black !Important;
  }
  h6{
      color:black !Important;
  }
  label{
      color:black !Important;
  }
  p{
      color:black !Important;
          font-size: 17px !important;
  }
</style>
<body class="body-padding body-p-top light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <div class="header">
        <div class="row g-0 align-items-center" style="background: #fff;">
            <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
                <div class="main-logo d-lg-block d-none">
                    <div class="logo-big">
                        <a href="index.php">
                            <h2 style="color: black;font-weight: bolder;">LOGO</h2>
                            <!-- <img src="images/download.png" style="width:50%" alt="Logo"> -->
                        </a>
                    </div>
                    <div class="logo-small">
                        <a href="index.php">
                            <h2 style="color: black;font-weight: bolder;">LOGO</h2>
                        </a>
                    </div>
                </div>
                <div class="nav-close-btn">
                    <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
                </div>
            </div>
            <div class="col-4 d-lg-none">
                <div class="mobile-logo">
                    <a href="index.php">
                        <h2 style="color: black;font-weight: bolder;">LOGO</h2>
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
                <div class="header-right-btns d-flex justify-content-end align-items-center">
                    <div class="header-collapse-group">
                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                            <form class="header-form">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                                <button class="header-btn fullscreen-btn" id="btnFullscreen"><i class="fa-light fa-expand"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="header-btn header-collapse-group-btn d-lg-none"><i class="fa-light fa-ellipsis-vertical"></i></button>
                    <div class="header-btn-box profile-btn-box">
                        <button class="profile-btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/admin.png" alt="image">
                        </button>
                        <ul class="dropdown-menu profile-dropdown-menu">
                            <li><a class="dropdown-item" href="action.php?logout=1"><span class="dropdown-icon"><i class="fa-regular fa-arrow-right-from-bracket"></i></span> Logout</a></li>
                            <!-- <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fas fa-user"></i></span> Profile</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

