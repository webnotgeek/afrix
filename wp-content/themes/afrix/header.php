<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AFRIX  Trading & Logistics</title>
<!-- Stylesheets -->
<link href="<?php bloginfo('template_directory') ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory') ?>/assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="<?php bloginfo('template_directory') ?>/assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="<?php bloginfo('template_directory') ?>/assets/css/color-2.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Yantramanav:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/images/favicon-2.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory') ?>/assets/images/favicon-2.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="color-style-two">

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

    <!-- Main Header -->
    <header class="main-header header-style-two">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="left-column">
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <div class="search-box">
                            <form class="search-form">
                                <input type="search" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="phone-number"><i class="flaticon-calling"></i><a href="tel:(+61)32456789"></a>(+2) 01006345241</div>
                        <div class="mail-address"><i class="flaticon-mail"></i><a href="tel:(+61)32456789790">info@afrix.com</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="<?php bloginfo('template_directory') ?>/assets/images/afrix-logo.png" alt="" width="240"></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="<?php bloginfo('template_directory') ?>/assets/images/icons/icon-bar-2.png" alt=""></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <?php 
                                    $defaults = array(
                                        'menu'                 => '',
                                        'container'            => 'div',
                                        'container_class'      => '',
                                        'container_id'         => '',
                                        'container_aria_label' => '',
                                        'menu_class'           => 'menu navigation',
                                        'menu_id'              => '',
                                        'echo'                 => true,
                                        'fallback_cb'          => 'wp_page_menu',
                                        'before'               => '',
                                        'after'                => '',
                                        'link_before'          => '',
                                        'link_after'           => '',
                                        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'item_spacing'         => 'preserve',
                                        'depth'                => 0,
                                        'walker'               => '',
                                        'theme_location'       => '',
                                    );
                             
                                    wp_nav_menu( $defaults ); 
                                
                                ?>
                            </nav>
                            <!-- Main Menu -->
                            <!-- <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.html">Home</a></li>
                                        <li class="dropdown"><a href="about.html">About Us</a>
                                            <ul>
                                                <li><a href="about.html">About Company</a></li>
                                                <li><a href="history.html">History</a></li>
                                                <li><a href="team.html">Leadership Team</a></li>
                                                <li><a href="global-networks.html">Global Networks</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="service-1.html">Services</a>
                                            <ul>
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="air-freight.html"> Air Freight </a></li>
                                                <li><a href="ocean-freight.html">Ocean Freight </a></li>
                                                <li><a href="road-freight.html">Road Freight </a></li>
                                                <li><a href="train-freight.html">Train Freight </a></li>
                                                <li><a href="warehousing.html">Warehousing </a></li>
                                                <li class="active"><a href="packaging.html">Packaging</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li class="dropdown"><a href="#">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">Portfolio 02 Column</a></li>
                                                        <li><a href="portfolio-2.html">Portfolio 03 Column</a></li>
                                                        <li><a href="portfolio-3.html">Portfolio 04 Column</a></li>
                                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="request-quote.html">Request a Quote</a></li>
                                                <li><a href="pricing-plan.html">Pricig Plan</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">3 Columns Grid </a></li>
                                                <li><a href="blog-2.html">3 Columns Sidebar</a></li>
                                                <li><a href="blog-3.html">Large Image</a></li>
                                                <li><a href="blog-details.html">Single Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav> -->
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="<?php bloginfo('template_directory') ?>/assets/images/afrix-logo.png" width="210" alt=""></a></div>
                        </div>
                        <div class="header-left-option">
                            <div class="option-box">
                                <div class="icon"><span class="flaticon-tracking"></span></div>
                                <h4>Track Shipment <i class="flaticon-up-arrow"></i></h4>
                                <div class="order-form-area">
                                    <div class="wrapper-box">
                                        <h4>Track Your Shipment</h4>
                                        <form class="order-form">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Shipment Number *">
                                            </div>
                                            <div class="form-group">
                                                <select class="selectpicker" name="make">
                                                    <option value="*">Type of Reference *</option>
                                                    <option value=".category-1">Package</option>
                                                    <option value=".category-3">Freight</option>
                                                    <option value=".category-4">Mail of Innovations</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Track Now</span></button>
                                            </div>
                                        </form>
                                    </div>                        
                                </div>
                            </div>
                            <div class="option-box">
                                <a href="request-quote.html">
                                    <div class="icon"><span class="flaticon-test"></span></div>
                                    <h4>Get A Quote<i class="flaticon-up-arrow"></i></h4>
                                </a>
                            </div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="<?php bloginfo('template_directory') ?>/assets/images/icons/icon-bar-2.png" alt=""></div>
    
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?php bloginfo('template_directory') ?>/assets/images/afrix-logo.png" width="210" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->