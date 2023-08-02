<?php
include 'includes/header.php'
?>
        <title> Welcome to <?= $config_data['site_title']; ?> </title>
    </head>


    <body>

    <div class="search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- Loading Screen -->
    <div id="ju-loading-screen">
    <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
    </div>
    </div>


    <!-- /End Top Header -->
    <?php
    include 'includes/navigation.php';
    ?>



    <!-- Start Header -->
    <div class="fables-headers fables-after-overlays overlay-lighters index-traingle bg-rules" style="background-image: url(assets/custom/enluka_images/index-background.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-7 mr-auto index-carousel">
                    <div class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                        <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp hero-bg" data-wow-duration="2s" data-wow-delay=".4s">
                            <h1 class="fables-page-sub fables-main-text-color font-weight-bold mb-1">CONSULTING SERVICE FOR ALL</h1>
                                <span class="fables-page-sub fables-second-text-color">DIGITAL TRANSFORMATION</span>
                            
                            <p class="fables-main-text-color mb-3 light-font fables-header-slider-details">
                            Digital empowerment brings people, business and technology together
                            </p>
                            <a href="digital_transformation" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Read More</a>
                        </div>
                        <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp hero-bg" data-wow-duration="2s" data-wow-delay=".8s">
                            <h1 class="fables-page-sub fables-main-text-color font-weight-bold mb-1">CONSULTING SERVICE FOR ALL</h1>
                                <span class="fables-page-sub fables-second-text-color">BUSINESS TRANSFORMATION</span>
                            
                            <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                            </p>
                            <a href="business_transformation" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Header -->



    <!-- Start page content -->
    <?php
    include 'includes/services.php';
    ?>
    
        

    <div class="container">
    <div class="row mb-4 mb-md-5 overflow-hidden">
                    <div class="col-12 col-sm-6 wow fadeInLeft">
                   <h2 class="fables-page-sub fables-second-text-color font-35 font-weight-bold wow fadeInLeft">ABOUT  <span class="fables-main-text-color">ENLUKA</span></h2>
                        <div class="fables-forth-text-color position-relative z-index  mt-4 mb-5  wow fadeInRight" data-wow-duration="2s">
                        Enluka Consulting is a worldwide, innovative Technology Consultancy Company, operating in the United Kingdom, Ghana, South Africa, and Nigeria. <br><br>
    We design digital customer experiences and products. <br><br>We build new IT and data infrastructures, introduce modern processes, and challenge teams to work (together) in a different way. We provide all the skills and knowledge required to transform your business.

    
                        </div>
                        <p class="fables-forth-text-color font-25 mb-2 wow fadeInLeft">WHY</p>
                   <h2 class="fables-page-sub fables-second-text-color font-35 font-weight-bold wow fadeInLeft">CHOOSE  <span class="fables-main-text-color">US</span></h2>
                   <p class="fables-forth-text-color mt-4 mb-4">
                   Welcome to our transformative realm where we empower businesses to innovate, navigate change, and thrive in an ever-evolving landscape.
                   </p>  
                   <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".3s"> 
                       <p class="fables-fifth-text-color fables-dots-text">
                            <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                            Accountability
                       </p>
                   </div>
                   <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".6s">
                       <p class="fables-fifth-text-color fables-dots-text">
                            <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                            Empathy 
                       </p>
                   </div>
                   <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".9s">
                       <p class="fables-fifth-text-color fables-dots-text">
                            <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                            Result-Oriented 
                       </p>
                   </div>
                    </div>
                    
    <?php
    include 'includes/contact_form.php';

    ?>

        </div>



        



        <?php

include 'includes/news_index.php';
?>

<?php
include 'includes/companies.php';
?>
    <!-- /End page content -->

    <!-- Start Footer 2 Background Image  -->
    <?php
    include "includes/footers.php";
    ?>

    <!-- /End Footer 2 Background Image -->




    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
    <script src="assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/custom/js/jquery-data-to.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle.js"></script>
    <script src="assets/vendor/portfolio-filter-gallery/jquery.isotope.min.js"></script>
    <script src="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js"></script>
    <script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="assets/custom/js/custom.js"></script>


    </body>
    </html>
