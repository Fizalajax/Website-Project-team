<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>DAP Beton | Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon">
<link rel="icon" href="images/favicon1.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
<?php include 'header.php'; ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg_3.png);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <div class="title">Get Touch With Us</div>
        </div>
        <!--Page Info-->
        <div class="page-info">
            <div class="auto-container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="contact-banner" style="background-image:url(images/background/6.jpg)">
            	<div class="banner-inner">
                	<h2>Kualitas yang terbaik buat pelanggan</h2>
                    <div class="emailed">@dapbeton.com</div>
                </div>
            </div>
            <div class="form-lower-section clearfix">
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        
                        <div class="single-item-carousel owl-carousel owl-theme">
                            <div class="slide">
                            	<h3>Main Office</h3>
                                <ul class="info-list">
                                    <li><span class="icon flaticon-placeholder-filled-point"></span><strong>Address:</strong>Jl. Ringroad II </li>
                                    <li><span class="icon flaticon-telephone-handle-silhouette"></span><strong>Call Us:</strong>+62820201185</li>
                                    <li><span class="icon fa fa-envelope"></span><strong>Mail Us:</strong>@dapbeton.com</li>
                                    <li><span class="icon flaticon-clock-3"></span><strong>Office Hars:</strong>Mon - Satday: 09.00am to 17.00pm</li>
                                </ul>
                                <ul class="social-icon-three">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-rss"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                    	<div class="row clearfix">
                        	<div class="label-column col-md-4 col-sm-12 col-xs-12">
                            	<ul class="labels-name">
                                	<li>Name & Email Address:</li>
                                    <li>Phone & Subject:</li>
                                    <li>Enter Your Message:</li>
                                </ul>
                            </div>
                            <div class="form-inner-column col-md-8 col-sm-12 col-xs-12">
                            	
                                <!-- Contact Form -->
                                <div class="contact-form">
                                    <!--Comment Form-->
                                    <form method="post" action="sendemail.php" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name*" required>
                                            </div>
            
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address*" required>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                <input type="text" name="phone" placeholder="Phone" required>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                <input type="text" name="subject" placeholder="Subject" required>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>
            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send message</button>
                                            </div>
            
                                        </div>
                                    </form>
            
                                </div>
                                <!--End Contact Form -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Section-->
    <section class="map-section">
    	<!--Map Outer-->
        <div class="map-outer">
            <div class="google-map"
                id="contact-google-map" 
                data-map-lat="-0.4861467875836164" 
                data-map-lng="117.12231730708092" 
                data-icon-path="images/icons/map-marker.png" 
                data-map-title="Samarinda, Indonesia" 
                data-map-zoom="12" 
                data-markers='{
                }'>

    		</div>
        </div>
    </section>
	<!--End Map Section-->
    
<?php include 'footer.php'; ?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>