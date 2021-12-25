<!doctype html>
<html class="no-js" lang="zxx">
<?php
require('connect.php');
$cat_res = mysqli_query($connect, "select * from categories where status=1");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr[] = $row;
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>S4R Furniture</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/helper.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/13830254b4.js" crossorigin="anonymous"></script>
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
                                <a href="index.php"><img src="assets/images/mainlogo.png" height="100"></a>
                            </div>
                            <!--Logo Area End-->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12 col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="shop.php">Categories</a>
                                            <ul class="sub-menu">
                                                <?php
                                                foreach ($cat_arr as $row) {
                                                ?>
                                                    <li class="dropdown-item text-left" class="nav-item text-left text-black"><a href="catview.php?catid=<?php echo $row['id']; ?>">
                                                            <?php
                                                            echo $row['name'] ?></a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>

                                            <ul class="sub-menu">
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="cart.php">Shopping Cart</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="wishlist.php">Wishlist</a></li>
                                                <li><a href="my-account.php">My Account</a></li>
                                                <li>
                                                    <?php
                                                    include('connect.php');
                                                    if (!empty($_SESSION['username'])) { ?>
                                                        <a href="logout.php">Logout</a>
                                                    <?php } else { ?>
                                                        <a href="login-register.php">Login/Register</a>
                                                    <?php } ?>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li>
                                            <div style="padding: 35px 0px 40px 0px;">
                                                <form method="post" action="search.php">
                                                    <div style="display: flex;">
                                                        <input type="search" class="search-data" placeholder="Search" name="s" required>
                                                        <button type="submit" id="search">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="header-search-cart-area">

                                <ul>

                                    <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                        <!--Crunccy dropdown-->
                                        <ul class="currency-dropdown">

                                            <!--Account Currency Start-->
                                            <li><a href="my-account.php">My account</a>
                                                <ul>
                                                    <li><?php if (isset($_SESSION['username'])) {
                                                            echo '<a href="logout.php">Logout</a>';
                                                        } else {
                                                            echo '<a href="login-register.php">Login/Register</a>';
                                                        } ?></li>
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
                                    <li class="mini-cart"><a href="cart.php"><i class="flaticon-shopping-cart"></i></a>

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
                                                <img src="./assets/images/logo.png" class="img-fluid" alt="">
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
                        <form method="post" action="search.php">

                            <input type="search" class="search-data" placeholder="Search" name="s" required>
                            <button type="submit" id="search">
                                <i class="fa fa-search"></i>
                            </button>

                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="index.php">Home</a></li>
                            <li class="menu-item-has-children"><a href="shop.php">Shop</a></li>
                            <li class="menu-item-has-children"><a href="#">Categories</a>
                                <ul class="submenu2">
                                    <?php
                                    foreach ($cat_arr as $row) {
                                    ?>
                                        <li class="dropdown-item text-left" class="nav-item text-left text-black"><a href="catview.php?catid=<?php echo $row['id']; ?>">
                                                <?php
                                                echo $row['name'] ?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="submenu2">
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="cart.php">Shopping Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li><?php if (isset($_SESSION['username'])) {
                                            echo '<a href="logout.php">Logout</a>';
                                        } else {
                                            echo '<a href="login-register.php">Login/Register</a>';
                                        } ?></li>
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
                                        <li><?php if (isset($_SESSION['username'])) {
                                                echo '<a href="logout.php">Logout</a>';
                                            } else {
                                                echo '<a href="login-register.php">Login/Register</a>';
                                            } ?></li>
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