<?php
require_once 'admin/lib/constants.php';

function nav_active($n){
    $s = substr($_SERVER['PHP_SELF'], 1, 4);
    if($n == $s){
        return 'active';
    }
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=appname?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ThinkPositive" name="keywords">
    <meta content="ThinkPositive" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .navbar-brand img {
            margin-top: -8%;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-secondary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Our Office</h6>
                        <span>Ahodwo Behind Absa Bank,Kumasi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-secondary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span>gyanderrick@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-secondary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Call Us</h6>
                        <span>(+233)209360265/ +233(245508082)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top navbar-light custom-nav  shadow-sm px-5 pe-lg-0 ">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="index.php" class="navbar-brand">
                <!-- <h1 class="m-0 display-4 text-uppercase text-white">
                    <i class="bi bi-building text-primary me-2"></i>WEBUILD</h1> -->
                <img src="img/logo12.png" width="140" alt="logo">
                <!-- <img src="img/logo2.jpg" class="img-fluid" alt="Responsive image"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"  id="navbarCollapse">
                <div class="navbar-nav justify-content-center py-0">
                    <a href="index.php" class="nav-item nav-link <?=nav_active('inde')?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?=nav_active('abou')?>">About</a>
                    <a href="service.php" class="nav-item nav-link <?=nav_active('serv')?>">Service</a>
                    <a href="blog.php" class="nav-item nav-link <?=nav_active('blog')?>">Blog</a>
                    <a href="contact.php" class="nav-item nav-link <?=nav_active('cont')?>">Contact</a>

                   <!--  <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="project.html" class="dropdown-item">Our Project</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> -->

                    <!-- <a href="" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Get A Quote <i class="bi bi-arrow-right"></i></a> -->
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->