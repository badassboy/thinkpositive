<?php




?>


<?php include("header.php"); ?>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 h-100" src="img/dreamhouse.jpg" alt="dreamhouse">

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
            
                            <h2 class="display-5 text-uppercase text-white mb-md-4">Get Your Dream House With Us</h2>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Get A Quote</a>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/landslider.jpg" alt="landslider">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                    
                            <h2 class="display-5 text-uppercase text-white mb-md-4">Buy Affordable Plot of Land From Us</h2>
                            <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h2 class="display-7 text-uppercase mb-4"><span class="text-primary">ThinkPositive </span> Estate Agency
                </h2>
                <p>ThinkPositive Real Estate Agency is a dynamic God-fearing company born from the motivation to build
                    an industry leader that offers clients a holistic property solution. It was established in 2018 and
                    has it headquarters in Kumasi the Garden City in Ghana in the Ashanti Region.</p>
                <p>We strive to deliver excellence, quality and professionalism, while consulting and guiding clients on
                    their investments. Our knowledgeable experts take care of all details for your conveniences and ease
                    of mind. We have always been unique and different in our approach to the market and believe in
                    enriching the lives of others through the ownership of property.</p>
                <p>We offer a complete property solution that includes residential lands, commercial and industrial
                    property for rentals, sales and investment. This bold step to once again differentiate ourselves
                    from the rest, has inspired our vision to create value, subdue and dominate markets and give
                    millions to support the communities we work in Ghana and beyond Africa and making a difference in
                    the lives of others.</p>
                <p class="mb-4"></p>
                <!-- <img src="img/signature.jpg" alt=""> -->
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="img/about.jpg"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="display-7 text-uppercase mb-4">Our Services</h2>
        </div>
        <div class="row g-5">
            <?php 
                require_once 'engine/lib/MysqliDb.php';
                $db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                $db->orderBy("RAND ()");
                $fi = $db->get(services, 3);
            ?>
            <?php foreach($fi as $bi) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/<?=$bi['s_img']?>" alt="land">
                  
                    <div class="px-4 pb-4">
                    <h6 class="text-uppercase mb-3 custom-title"><?=$bi['s_title']?></h6>
                        <small>
                            <?=$bi['s_content']?>
                        </small>
                       
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="display-7 text-uppercase mb-4">Popular  Projects</h2>
        </div>
        <div class="row gx-5">
            <div class="col-12 text-center">
                <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                    <ul class="list-inline mb-0" id="portfolio-flters">
                        <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                            <img src="img/portfolio-1.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">All</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                            <img src="img/portfolio-2.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Construction</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                            <img src="img/portfolio-3.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Renovation</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-5 portfolio-container">

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/project1.jpg" alt="">

            
                    <a class="portfolio-btn" href="img/project1.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/project2.jpg" alt="">

                 

                    <a class="portfolio-btn" href="img/project2.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/project3.jpg" alt="">
                  
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/project4.jpg" alt="">

                  <!--   <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a> -->

                    <a class="portfolio-btn" href="img/project4.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/project5.jpg" alt="">

                   <!--  <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a> -->

                    <a class="portfolio-btn" href="img/project5.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/project6.jpg" alt="">
<!-- 
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                     -->
                    <a class="portfolio-btn" href="img/project6.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="display-7 text-uppercase mb-4">Expert Team Members</h2>
        </div>
        <div class="row g-5">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-1.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Adam Phillips</h4>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-2.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Dylan Adams</h4>
                            <span>Civil Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Jhon Doe</h4>
                            <span>Interior Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-4.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">Josh Dunn</h4>
                            <span>Painter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="display-7 text-uppercase mb-4">Testimonials</h2>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                <img class="img-fluid w-100 h-100" src="img/testimonial.jpg">
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="testimonial bg-light">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <video width="320" height="320" controls>
                                    <source src="video/testimony.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Achiaa</h4>
                                <p>ThinkPositive Client</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> If you are
                                    seeking to buy a land in Kumasi, Accra or any other location in Ghana, contact
                                    ThinkPositive.<i class="fa fa-2x fa-quote-right text-primary me-2"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
        <?php include_once 'engine/blogger-3.php'; ?>
    <!-- Blog End -->
    

    <!-- Footer Start -->

    <?php include("footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>