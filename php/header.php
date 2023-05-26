<?php 
$URL = 'data/meymiksKonsantreIcecekler.json';
$JSON = file_get_contents($URL);
$konsantreIceckler_JSON = json_decode($JSON);

$URL = 'data/captainCustoAlkolsuzSampanya.json'; 
$JSON = file_get_contents($URL);
$alkolsuzSampanya_JSON = json_decode($JSON);


?>

<body>
  <div class="page-wrapper"> 
  
    <!-- Preloader -->
    <!-- <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="C" class="letters-loading">
                            C
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                    </div>
                </div>  
            </div>
        </div>
    </div> -->
    <!-- Preloader End -->
    
    <!-- Main Header-->
    <header class="main-header header-down">
        <div class="header-top">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="top-left clearfix">
                        <ul class="top-info clearfix">
                            <li><i class="icon far fa-map-marker-alt"></i> Restaurant St, Delicious City, London 9578, UK</li>
                            <li><i class="icon far fa-clock"></i> Daily : 8.00 am to 10.00 pm</li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="top-info clearfix">
                            <li><a href="tel:+11234567890"><i class="icon far fa-phone"></i> +1 123 456 7890</a></li>
                            <li><a href="mailto:booking@restaurant.com"><i class="icon far fa-envelope"></i> booking@restaurant.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->
        <div class="header-upper">        
            <div class="auto-container">
                <!-- Main Box -->
                <div class="main-box clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                         <div class="logo"><a href="index.php" title="Delici - Restaurants HTML Template"><img src="images/antmey-logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>
                    </div>

                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li ><a href="index.php">Anasayfa</a>
                                    </li>
                                    <!-- <li class="dropdown has-mega-menu"><a href="menu-list.html">Menus</a>
                                        <ul>
                                            <li>
                                                <div class="mega-menu">
                                                    <div class="menu-inner">
                                                        <div class="auto-container">
                                                            <div class="row clearfix">
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="menu-list-1.html"><img src="images/resource/menu-image-1.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="menu-list-1.html">Menu list 1</a></div>
                                                                </div>
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="menu-list-2.html"><img src="images/resource/menu-image-2.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="menu-list-2.html">Menu list 2</a></div>
                                                                </div>
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="menu-list-3.html"><img src="images/resource/menu-image-3.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="menu-list-3.html">Menu list 3</a></div>
                                                                </div>
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="menu-list-4.html"><img src="images/resource/menu-image-4.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="menu-list-4.html">Menu list 4</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="hakkimizda.php">HAKKIMIZDA</a></li>
                                    <li><a href="urunler.php">ÜRÜNLER</a></li>
                                    <li><a href="katalog.php">KATALOG</a></li>
                                    <!-- <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="#">Dropdown Menu 1</a></li>
                                            <li><a href="#">Dropdown Menu 2</a></li>
                                            <li><a href="#">Dropdown Menu 3</a></li>
                                            <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                                                <ul>
                                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                                    <li><a href="#">Dropdown Menu Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Dropdown Lorem 5</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="iletisim.php">İLETİŞİM</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->

                        <div class="links-box clearfix">
                            <div class="link link-btn">
                                <a href="reservation-opentable.html" class="theme-btn btn-style-one clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">Form Doldurun</span>
                                        <span class="text-two">Form Doldurun</span>
                                    </span>
                                </a>
                            </div>
                            <div class="link info-toggler">
                                <button class="info-btn">
                                    <span class="hamburger">
                                        <span class="top-bun"></span>
                                        <span class="meat"></span>
                                        <span class="bottom-bun"></span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="hidden-bar-opener">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
    
    <!--Menu Backdrop-->
    <div class="menu-backdrop"></div>

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar">
        <!-- Hidden Bar Wrapper -->
        <div class="inner-box">
            <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
            <div class="logo-box"><a href="index.php" title="Delici - Restaurants HTML Template"><img src="images/resource/sidebar-logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>
            
            <!-- .Side-menu -->
            <div class="side-menu">
                 <ul class="navigation clearfix">
                    <li class="current"><a href="index.php">Home</a>
                    </li>
                    <li class="dropdown"><a href="menu-list.html">Menus</a>
                        <ul>
                            <li><a href="menu-list-1.html">Menu List 1</a></li>
                            <li><a href="menu-list-2.html">Menu List 2</a></li>
                            <li><a href="menu-list-3.html">Menu List 3</a></li>
                            <li><a href="menu-list-4.html">Menu List 4</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="our-chef.html">Our chefs</a></li>
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul>
                            <li><a href="#">Dropdown Menu 1</a></li>
                            <li><a href="#">Dropdown Menu 2</a></li>
                            <li><a href="#">Dropdown Menu 3</a></li>
                            <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                                <ul>
                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                    <li><a href="#">Dropdown Menu Level 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown Lorem 5</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->
            
            <h2>Visit Us</h2>
            <ul class="info">
                <li>Restaurant St, Delicious City, <br>London 9578, UK</li>
                <li>Open: 9.30 am - 2.30pm</li>
                <li><a href="mailto:booking@domainame.com">booking@domainame.com</a></li>
            </ul>
            <div class="separator"><span></span></div>
            <div class="booking-info">
                <div class="bk-title">Booking request</div>
                <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->

    <!--Info Back Drop-->
    <div class="info-back-drop"></div>
    
    <!-- Hidden Bar -->
    <section class="info-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="far fa-close"></span></div>
            <div class="logo-box"><a href="index.php" title="Delici - Restaurants HTML Template"><img src="images/resource/sidebar-logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>
            <div class="image-box"><img src="images/resource/sidebar-image.jpg" alt="" title=""></div>

            <h2>Visit Us</h2>
            <ul class="info">
                <li>Restaurant St, Delicious City, <br>London 9578, UK</li>
                <li>Open: 9.30 am - 2.30pm</li>
                <li><a href="mailto:booking@domainame.com">booking@domainame.com</a></li>
            </ul>
            <div class="separator"><span></span></div>
            <div class="booking-info">
                <div class="bk-title">Booking request</div>
                <div class="bk-no"><a href="tel:+88-123-123456">+88-123-123456</a></div>
            </div>
        </div>
    </section>
    <!--End Hidden Bar -->