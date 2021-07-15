<?php 
require_once 'admin/lib/constants.php';
require_once 'admin/lib/MysqliDb.php';
$db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
$db->orderBy('date_created', 'desc');
$t = $db->get(properties);

include("header.php"); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Properties For Sale</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Properties For Sale</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="display-7 text-uppercase mb-4">Properties For Sale</h2>
        </div>
        <div class="row g-5">
          <?php foreach($t as $n) { ?>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0"><?=$n['p_title']?></h3>
                  <div class="mb-1 text-muted"><?=date('jS F, Y',strtotime($n['date_created']))?></div>
                  <p class="card-text mb-auto"><?=substr($n['p_content'], 0, 70).' ...'?></p>
                  <a href="property-detail.php?property=<?=$n['row_key']?>" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="img-fluid" src="img/property/<?=$n['p_img']?>" alt="">
                </div>
              </div>
            </div>
          <?php } ?>

          <?php if($db->count == 0) { ?>
            <div class="col-lg-12  col-md-6">
                <div class="bg-light">
                    <div class="p-4 text-center">
                        <h4 class="text-uppercase mb-3">No Property For Sale Yet!</h4>
                    </div>
                </div>
            </div>
          <?php } ?>

           <!--  <div class="col-12">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-lg justify-content-center m-0">
                    <li class="page-item disabled">
                      <a class="page-link rounded-0" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link rounded-0" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div> -->
            
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