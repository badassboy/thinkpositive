<?php
require_once 'admin/lib/constants.php';

function nav_active($n){
    $s = substr($_SERVER['PHP_SELF'], 1, 4);
    if($n == $s){
        return 'active';
    }
}

function headee(){
    $s = substr($_SERVER['PHP_SELF'], 1, 4);
    if($s == 'inde'){
        return 'Home';
    }elseif($s == 'serv'){
        return 'Service';
    }elseif($s == 'admi'){
        return 'Admission';
    }elseif($s == 'who-'){
        return 'Who We Are';
    }elseif($s == 'cont'){
        return 'Contact';
    }elseif($s == 'tour'){
        return 'Tour';
    }elseif($s == 'flig'){
        return 'Flight';
    }elseif($s == 'off'){
        return "Offers";
    }else{
        return 'Travel & Tour';
    }
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=headee().' | '.appname?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ThinkPositive" name="keywords">
    <meta content="Here at Think Positive Travel & Educational consult, we work with Universities, Companies, Employers and Tour Operators around the world. We are absolute leaders in Recruitment, conferences ,Study Abroad and Tours so you are in safe hands when choosing us" name="description">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/about.jpg" />
    <meta property="og:url" content="https://www.thinkpositiveestates.com/" />


    <!-- Favicon -->
    <link href="img/positive.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   

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
                        <span>Ahodwo - West Nhyiaeso, Kumasi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-secondary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span>info@thinkpositivetravels.com</span>
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
            <a href="/" class="navbar-brand">
                <!-- <h1 class="m-0 display-4 text-uppercase text-white">
                    <i class="bi bi-building text-primary me-2"></i>WEBUILD</h1> -->
                <img src="img/logo12.png" width="140" alt="logo">
                <!-- <img src="img/logo2.jpg" class="img-fluid" alt="Responsive image"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"  id="navbarCollapse">
                <div class="navbar-nav py-0">
                    
                    <a href="index.php" class="nav-item nav-link <?=nav_active('inde')?>">Home</a>
                    
                    <a href="service.php" class="nav-item nav-link <?=nav_active('serv')?>">Service</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link <?=nav_active('tour')?> dropdown-toggle" data-bs-toggle="dropdown">Local Tourism</a>
                        <div class="dropdown-menu m-0">
                            <?php 
                                require_once 'admin/lib/constants.php';
                                require_once 'admin/lib/MysqliDb.php';

                                $gh = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                                $vc = $gh->get(tours);
                            ?>
                            <?php foreach($vc as $bi) { ?>
                            <a href="tour.php?s=<?=$bi['row_key']?>" class="dropdown-item"><?=$bi['t_title']?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="flight.php" class="nav-item nav-link <?=nav_active('flig-')?>">Flight</a>
                    
                      <a href="offers.php" class="nav-item nav-link <?=nav_active('off')?>">Offers</a>
                    
                    <a href="who-we-are.php" class="nav-item nav-link <?=nav_active('who-')?>">Who We Are</a>
                    
                    <a href="contact.php" class="nav-item nav-link <?=nav_active('cont')?>">Contact</a>

                  
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->