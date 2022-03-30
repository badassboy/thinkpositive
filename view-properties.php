<?php 
include("header.php");
include("functions.php");
$business = new Business();


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $details = $business->propertyDetails($id);
    
}





 ?>

<style type="text/css">
    .project-info-box {
  margin: 15px 0;
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 5px;
}

.project-info-box p {
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #d5dadb;
}

.project-info-box p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
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

      

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h5>PROJECT DETAILS</h5>

                <?php 

                foreach ($details as $row) {
                    echo '

                        <ul class="list-group">
                      <li class="list-group-item">'.$row['feature_1'].'</li>
                      <li class="list-group-item">'.$row['feature_2'].'</li>
                      <li class="list-group-item">'.$row['feature_3'].'</li>
                      <li class="list-group-item">'.$row['feature_4'].'</li>
                </ul>
            </div>

            <div class="project-info-box">
              
               
                
            
                <p class="mb-0"><b>Budget:</b> &#8373;'.$row['price'].'</p>
            </div><!-- / project-info-box -->

            <div class="project-info-box mt-0 mb-0">
                <p class="mb-0">
                    <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                    <a href="https://web.facebook.com/?_rdc=1&_rdr" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/home?lang=en" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
                  
                    <a href="https://www.linkedin.com/feed/" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
                </p>
            </div>
        </div>

        <div class="col-md-7">
            <img src="admin/'.$row['picture'].'" alt="project-image" class="img-fluid">
            <div class="project-info-box">
                <p><b>Title:</b>'.$row['title'].'</p>
                <p><b>Property Location:</b>'.$row['location'].'</p>
                <p><b>Size:</b>'.$row['size'].'</p>
                <p><b>Land use type:</b>'. $row['property_type'].'</p>
            </div>
            
        </div>

                    ';
                }


                 ?>

                


    </div>
</div>





        
    </div>
    <!-- Team End -->
    

    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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