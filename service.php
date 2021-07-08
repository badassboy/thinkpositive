
<?php include("header.php"); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Service</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Service</h6>
        </div>
    </div>
    <!-- Page Header Start -->


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
                $fi = $db->get(services);
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