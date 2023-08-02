<?php
include 'includes/header.php'
?>
    <title><?= $config_data['site_title']; ?> - Contact Us</title>
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

<!-- Start Top Header -->
<?php
include "includes/navigation.php";
?>
<!-- /End Fables Navigation -->   
 
     
<!-- Start Header -->
<div class="fables-header fables-after-overlay-pages" style="background-image: url(assets/custom/enluka_images/contact_us_enluka_logo.jpeg);">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Contact Us</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
    <div class="container"> 
            <div class="row overflow-hidden">
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                  
  
                    
                   
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 text-centers mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".5s">
                            <span class="fables-iconmap-icon fa-3x fables-second-text-color fables-second-hover-color"></span> 
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Head Office</h2>
                            <p class="font-14 fables-forth-text-color">
                            Boulevard Point, 15 Scarbrook Road <br> 
                      Croydon <br>
                      CR0 1LY <br>
                      United Kingdom <br><br>
                    </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-centers mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".8s">
                            <span class="fables-iconmap-icon fa-3x fables-second-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Ghana Office</h2>
                            <p class="font-14 fables-forth-text-color">

N0.19 Pawpaw Street Extension,
ECOMOG Haatso, GA-EAST <br>
Ghana <br>
+233 247 458 440 </p>

                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-centers mb-5 mb-md-0 wow fadeInDown" data-wow-delay="1.1s">
                            <span class="fables-iconmap-icon fa-3x fables-second-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Nigeria Office</h2>
                            <p class="font-14 fables-forth-text-color">

                            Suite 5, UNIK Plaza, Opposite Government House Fence,
Anwai Road, Asaba <br>Delta State <br>Nigeria <br>
+234 808 609 9391
                        </div>
                    </div>

                    

                </div>
            </div>        
               
        <br><br><hr>
        <div class="row mb-4 mb-md-5 overflow-hidden">
        <?php
    include 'includes/contact_form.php';

    ?>
          <div class="col-lg-6 ">
      <h2 class="fables-page-sub fables-second-text-color font-35 font-weight-bold wow fadeInLeft">Map  <span class="fables-forth-text-color">Direction</span></h2>

            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed/v1/place?q=Boulevard+Point,+15+Scarbrook+Road,+Croydon,+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" frameborder="0" style="border:0; width: 100%; height: 420px;" allowfullscreen></iframe>
          </div>
        </div>        
    </div> 
<!-- /End page content -->
    
<!-- Start Footer 2 Background Image  -->
<?php
include "includes/footers.php"
?>
    
<!-- /End Footer 2 Background Image -->



<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/custom/js/custom.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApW03tvAPTXWd1RHJBF2Up3iJMVu1wHi4&callback=JaMap"></script>
    
</body>
</html>