<?php include("header.php"); ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Contact</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="display-7 text-uppercase mb-4">Contact Us</h>
        </div>

        <div class="row gx-0 align-items-center">

            <div class="col-lg-7 mb-5 mb-lg-0" style="height: 430px;">

               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4712.6979195700005!2d-1.6230051538709045!3d6.66045529899757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb913c76d532a7%3A0x5edc3a9a889fa28b!2sAbsa%20%7C%20Branch%20%7C%20Ahodwo!5e0!3m2!1sen!2sgh!4v1625549945072!5m2!1sen!2sgh" width="600" height="430" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <!-- <iframe class="w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            </div>

            <div class="col-lg-5">
                <div class="contact-form bg-light p-5">
                        <form method="post" action="">
                    <div class="row g-3">
                            <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name="username" required="required">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="email" required="required">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0" placeholder="Subject" style="height: 55px;" name="Subject">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0" rows="4" placeholder="Message"
                            name="subject" required="required"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit"
                            name="send">Send Message</button>
                        </div> 
                       
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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