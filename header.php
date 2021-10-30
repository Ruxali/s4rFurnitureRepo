<?php
	include("connect.php");
	?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>S4R Furniture</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/images/logo" type="img/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/helper.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-transparent header-sticky  d-lg-block d-none">
            <div class="header-deafult-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                            <!--Logo Area Start-->
                            <div class="logo-area">
                                <a href="index.php"><img src="assets/images/and.png" alt=""></a>
                            </div>
                            <!--Logo Area End-->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a>
                                        </li>
                                        <li><a href="shop.php">Shop</a>
                                        </li>       
                                        <li><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                        <li><a href="about.php">About</a></li>
                                                        <li><a href="compare.php">Compare</a></li>
                                                        <li><a href="cart.php">Shopping Cart</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="wishlist.php">Wishlist</a></li>
                                                        <li><a href="my-account.php">My Account</a></li>
                                                        <li><a href="login-register.php">Login Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Categories</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.php">Bed</a></li>
                                                <li><a href="blog-two-column.php">Chair</a></li>
                                                <li><a href="blog-left-sidebar.php">Couch</a></li>
                                                <li><a href="blog-right-sidebar.php">Cupboard</a></li>
                                                <li><a href="blog-details.php">Decor</a></li>
                                                <li><a href="blog-details-gallery.php">Kitchen & Dining</a></li>
                                                <li><a href="blog-details-audio.php">Rack & Shelves</a></li>
                                                <li><a href="blog-details-video.php">Tables</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="header-search-cart-area">
                                <ul>
                                    <li><a class="header-search-toggle" href="#"><i class="flaticon-magnifying-glass"></i></a></li>
                                    <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                        <!--Crunccy dropdown-->
                                        <ul class="currency-dropdown">
                                            <!--Language Currency Start-->
                                            
                                            <!--Account Currency Start-->
                                            <li><a href="my-account.php">My account</a>
                                                <ul>
                                                    <li><a href="login-register.php">Login</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="my-account.php">My account</a></li>
                                                    <li><a href="cart.php">Cart</a></li>
                                                    <li><a href="wishlist.php">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <!--Account Currency End-->
                                        </ul>
                                        <!--Crunccy dropdown-->
                                    </li>
                                    <li class="mini-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span class="mini-cart-total">$300.00(2)</span></a>
                                        <!--Mini Cart Dropdown Start-->
                                        <div class="header-cart">
                                            <ul class="cart-items">
                                                <li class="single-cart-item">
                                                    <div class="cart-img">
                                                        <a href="cart.php"><img src="assets/images/cart/cart1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h5 class="product-name"><a href="single-product.php">Dell Inspiron 24</a></h5>
                                                        <span class="product-quantity">1 ×</span>
                                                        <span class="product-price">$278.00</span>
                                                    </div>
                                                    <div class="cart-item-remove">
                                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                                <li class="single-cart-item">
                                                    <div class="cart-img">
                                                        <a href="cart.php"><img src="assets/images/cart/cart2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h5 class="product-name"><a href="single-product.php">Lenovo Ideacentre 300</a></h5>
                                                        <span class="product-quantity">1 ×</span>
                                                        <span class="product-price">$23.39</span>
                                                    </div>
                                                    <div class="cart-item-remove">
                                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="cart-total">
                                                <h5>Subtotal :<span class="float-right">$39.79</span></h5>
                                                <h5>Eco Tax (-2.00) :<span class="float-right">$7.00</span></h5>
                                                <h5>VAT (20%) : <span class="float-right">$0.00</span></h5>
                                                <h5>Total : <span class="float-right">$46.79</span></h5>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="cart.php">View Cart</a>
                                                <a href="checkout.php">checkout</a>
                                            </div>
                                        </div>
                                        <!--Mini Cart Dropdown End-->
                                    </li>
                                </ul>
                            </div>
                            <!--Header Search And Mini Cart Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="index.php">
                                                <img src="assets/images/logo.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-right">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="cart.php"><i class="flaticon-shopping-cart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->

        <!-- Offcanvas Menu Start -->
        <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="fa fa-times"></i>
            </a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="Search ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="home.php">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="shop.php">Shop</a>
                            </li>       
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                 <ul class="submenu2">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="compare.php">Compare</a></li>
                                            <li><a href="cart.php">Shopping Cart</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                            <li><a href="my-account.php">My Account</a></li>
                                            <li><a href="login-register.php">Login Register</a></li>
                                            <li><a href="faq.php">Frequently Questions</a></li>
                                            <li><a href="404.php">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Categories</a>
                                            <ul class="submenu2">
                                                <li><a href="blog.php">Bed</a></li>
                                                <li><a href="blog-two-column.php">Chair</a></li>
                                                <li><a href="blog-left-sidebar.php">Couch</a></li>
                                                <li><a href="blog-right-sidebar.php">Cupboard</a></li>
                                                <li><a href="blog-details.php">Decor</a></li>
                                                <li><a href="blog-details-gallery.php">Kitchen & Dining</a></li>
                                                <li><a href="blog-details-audio.php">Rack & Shelves</a></li>
                                                <li><a href="blog-details-video.php">Tables</a></li>
                                            </ul>
                                        
                            </li>
                            <li class="menu-item-has-children"><a href="contact.php">Contact</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                                    <ul class="submenu2">
                                        <li><a href="login-register.php">Login</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="my-account.php">My account</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info-list">
                                    <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                    <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        </div>
        <!-- Offcanvas Menu End -->

        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><i class="fa fa-times"></i></button>
            </div>
            <div class="sidebar-search-input">
                <form action="#">
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="" type="search">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="form-description">Hit enter to search or ESC to close</p>
            </div>
        </div>
        <!-- main-search start -->