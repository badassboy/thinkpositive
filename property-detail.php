<?php include("header.php"); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Property Detail</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Property Detail</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <?php require_once 'engine/prop_details.php';?>
    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <h2 class="text-uppercase mb-4"><?=$blog['p_title']?></h2>
                    <img class="img-fluid w-100 rounded mb-5" src="img/property/<?=$blog['p_img']?>" alt="">
                    <p><?=$blog['p_content']?></p>
                
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <!-- <div class="mb-5">
                    <h3 class="text-uppercase mb-4">3 Comments</h3>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex ms-5 mb-4">
                        <img src="img/user.jpg" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                </div> -->
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <!-- <div class="bg-light p-5">
                    <h3 class="text-uppercase mb-4">Leave a comment</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="card mb-4 rounded-3 shadow-sm border-secondary">
                        <div class="card-header py-3 text-white bg-secondary border-secondary">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">GHS<?=$blog['p_price']?>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Price Negotiable</li>
                            </ul>
                            <button onclick="window.location.href='contact.php'" type="button" class="w-100 btn btn-lg btn-secondary">Contact us</button>
                        </div>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Categories</h3>
                    <div class="d-flex flex-column justify-content-start bg-light p-4">
                        <a class="h6 text-uppercase mb-4" href="#"><i class="fa fa-angle-right me-2"></i>Buildings</a>
                        <a class="h6 text-uppercase mb-4" href="#"><i class="fa fa-angle-right me-2"></i>Lands</a>
                        <a class="h6 text-uppercase mb-4" href="#"><i class="fa fa-angle-right me-2"></i>Rentals</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Recently Added</h3>
                    <div class="bg-light p-4">
                        <?php 
                        $db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                        $db->orderBy('date_created', 'desc');
                        $t = $db->get(properties, 4);
                        ?>
                        <?php foreach($t as $b) { ?>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="img/property/<?=$b['p_img']?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="blog-detail.php?post=<?=$b['row_key']?>" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0"><?=$b['p_title']?></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Recent Post End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
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