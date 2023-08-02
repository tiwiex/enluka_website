<?php
include 'includes/header.php'
?>
    <title>Site Map - <?= $config_data['site_title']; ?></title>
</head>
<body>
    <!-- Loading Screen -->
    <div id="ju-loading-screen">
      <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
      </div>
    </div>

<!-- Start Top Header -->
<?php
include 'includes/navigation.php';
?>
 
<div class="container">
<h1 class="position-relative font-30 fables-second-text-color">Enluka Sitemap</h1>
    <ul class="nav fables-blog-cat-list fables-forth-text-color fables-second-hover-color-link">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/digital_transformation">Digital Transformation</a>
        <li><a href="/business_transformation">Business Transformation</a>
        <li><a href="/industries">Industries</a>

            <ul>
                <li><a href="/industries#retail">Retail & Fast-Moving Consumer Goods (FMCG)</a></li>
                <li><a href="/industries#financial">Financial Services</a></li> 
                <li><a href="/industries#charity">Charity</a></li>
                <li><a href="/industries#telecommunication">Telecommunication</a></li>
                <li><a href="/industries#energy">Energy, Resources & Utilities</a></li>
                <li><a href="/industries#healthcare">Healthcare & Pharmaceuticals</a></li>
                <li><a href="/industries#business">Business IT Services</a></li>
                <li><a href="/industries#travel">Travel & Hospitality</a></li>
                <!-- Add more product categories as needed -->
            </ul>
        </li>
        <li><a href="/contact_us">Contact Us</a></li>
        <!-- Add more pages as needed -->
    </ul>
</div>
    <!-- Start Footer 2 Background Image  -->
<?php
include "includes/footers.php";
?>
<!-- /End Footer 2 Background Image -->
</body>
</html>




