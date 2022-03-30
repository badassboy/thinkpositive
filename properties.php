<?php 
include("header.php");
include("functions.php");

$business = new Business();

 ?>

 <style type="text/css">
     .card {
        margin: 2%;
     }
 </style>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h3 class="display-3 text-uppercase text-white mb-3">Properties</h3>
       <!--  <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">The Team</h6>
        </div> -->
    </div>
    <!-- Page Header Start -->


    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">

        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h3 class="display-7 text-uppercase mb-4">Available Properties</h3>
        </div>

                     <div class="row g-5">
        <?php 

        $properties = $business->getProperties();
        foreach ($properties as $row) {
             echo '
            <div class="card"  style="width: 18rem;">
          <img src="admin/'.$row['picture'].'" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">'.$row['title'].'</h5>
            <p class="card-text">&#8373;'.$row['price'].'</p>
            <a href="view-properties.php?id='.$row['id'].'" class="btn btn-primary">View Properties</a>
          </div>
        </div>


             ';
         } 



        ?>
        </div>
</div>
    <!-- Team End -->
    

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