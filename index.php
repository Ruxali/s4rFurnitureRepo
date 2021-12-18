<?php
include('header.php');
?>
<?php
require('connect.php');
$cat_res = mysqli_query($connect, "select * from categories where status=1");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
    $cat_arr[] = $row;
}
?>

<!--slider section start-->
<div class="hero-item bg-image" data-bg="gallery/modern-bedroom-lighting.jpg">
    <div class="text-center ">
        <h2 class="mts-5" data-aos="fade-up" data-aos-anchor-placement="bottom-center" data-aos-duration="2000">
            Creative Design <br> Modern & Exclusive Furniture</h2>
        <a href="shop.php" data-aos="fade-up" data-aos-anchor-placement="bottom-center" class="btntyp" data-aos-duration="2500">SHOP NOW</a>
    </div>
</div>
<!--slider section end-->

<!--categories section start-->

<div class="banner-section section pt-30">

    <div class="col">
    <div class="section-title text-center mb-15">
                    <h2>Categories Section</h2>
                </div>
        <div class="categories pt-20 mt-20">
            <?php
            foreach ($cat_arr as $row) {
            ?>
                <div class="circle"><span OnClick="parent.location='<?php print $row['fileurl'] ?>'">
                        <img class="image" style="border-radius: 50%; margin-right: 30px;
  border: 2px solid#000;
  padding:2px ;
  width: 150px!important;
  height: 150px!important; 
  object-fit: contain;" src="upload/<?php echo $row['image'] ?>" alt="Image">
  <br>
  <h4 class="text-center"style="color: black;text-transform: uppercase;"><?php echo $row['name'] ?></h4> 
                    </span></div>
                    
                <?php

                ?>
            <?php
            }
            ?>


        </div>
    </div>
</div>


<!--categories section end-->





<!--Product section start-->
<div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-15">
                    <h2>Popular Furniture</h2>
                </div>
                <div class="product-tab mb-50 mb-sm-30 mb-xs-20">
                    <ul class="nav">
                        <li><a class="active show" data-toggle="tab" href="#home">HOME</a></li>
                        <li><a data-toggle="tab" href="#office">OFFICE</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="home" class="tab-pane fade active show">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./gallery/decora.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Stylish Design Chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Miro Dining Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$113.00</span> <span class="main-price discounted">$180.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-1.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Janus Table Lamp</a></h3>
                                <p class="product-price"><span class="discounted-price">$86.00</span> <span class="main-price discounted">$150.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Discus Floor and Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$290.00</span> <span class="main-price discounted">$330.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">Sale</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Sled Mini Sideboard</a></h3>
                                <p class="product-price"><span class="discounted-price">$90.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">New</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Mega 2 Seater Sofa</a></h3>
                                <p class="product-price"><span class="discounted-price">$390.00</span> <span class="main-price discounted">$470.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Sentei Pruning Shears</a></h3>
                                <p class="product-price"><span class="discounted-price">$65.00</span> </p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-29%</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Affordances Side Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$280.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>
                </div>
            </div>
            <div id="office" class="tab-pane">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-9.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Normal Dining chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">Sale</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Tripod lampshade</a></h3>
                                <p class="product-price"><span class="discounted-price">$210.00</span> <span class="main-price discounted">$240.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Hot Design Table</a></h3>
                                <p class="product-price"><span class="discounted-price">$250.00</span> <span class="main-price discounted">$280.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Outdoor Lock Chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$180.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span class="sale">New</span>
                                </div>
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Classic Chair</a></h3>
                                <p class="product-price"><span class="discounted-price">$60.00</span> </p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Classic Chair Wodden</a></h3>
                                <p class="product-price"><span class="discounted-price">$183.00</span> <span class="main-price discounted">$200.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Classic Table Wodden</a></h3>
                                <p class="product-price"><span class="discounted-price">$290.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="./assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                    <img src="./assets/images/product/product-2.jpg" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"> <a href="single-product.php">Miniature Almari</a></h3>
                                <p class="product-price"><span class="discounted-price">$230.00</span> <span class="main-price discounted">$250.00</span></p>
                            </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--Product section end-->


<!-- Banner section start -->
<div class="banner-section section pb-40 pb-sm-30 pb-xs-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Single Banner Start -->
                <div class="single-banner-item pt-100 pt-md-80 pt-sm-70 pt-xs-50 pb-120 pb-md-100 pb-sm-90 pb-xs-50 mb-30 " style="background-image: url('./gallery/frontpage.jpg')">
                    <div class="sp-banner-content">
                        <span class="normat-text">DISCOUNTED UP TO 50%</span>
                        <h2 class="title">Zigzag King Chair</h2>
                        <span class="normat-text">LIMITED TIME OFEER</span>
                        <div class="countdown-area">
                            <div class="product-countdown" data-countdown="2019/06/01"></div>
                        </div>
                        <a href="shop.php">SHOP NOW</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!-- Banner section End -->




<!--Features section start-->
<div class="features-section section pt-30 pt-lg-15 pt-md-0 pt-sm-0 pt-xs-15">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="./assets/images/icons/feature-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free home delivery</h4>
                        <p class="short-desc">Provide free home delivery for the all product over $100 </p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="./assets/images/icons/feature-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Quality Products</h4>
                        <p class="short-desc">We ensure the product quality that is our main goal </p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="./assets/images/icons/feature-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">3 Days Return</h4>
                        <p class="short-desc">Provide free home delivery for the all product over $100 </p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>

        </div>
    </div>
</div>
<!--Features section end-->



<!-- Testimonial Area Start -->
<div class="testimonial-section section pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-wrap bg-gray-two pt-45 pb-30">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="testimonial-wrapper section-space--inner">
                                <div class="testimonial-slider-content">
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="testimonial-image">
                                                    <img src="./assets/images/testimonial/testimonial-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-author">
                                                            <div class="author-thumb">
                                                                <img src="assets/images/author/author-1.png" alt="">
                                                            </div>
                                                            <div class="author-info">
                                                                <h4>Zeniyea Henderson</h4>
                                                                <span>CTO & CO Founder, Axels</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-description">
                                                            <blockquote class="testimonials-text">
                                                                <p>“I am very much happy to buy product from
                                                                    nelson, the provide the best quality of
                                                                    product. Product quality is very
                                                                    satisfactory. Also the creative design of
                                                                    their Furniture make me happy.”</p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="testimonial-image">
                                                    <img src="./assets/images/testimonial/testimonial-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-author">
                                                            <div class="author-thumb">
                                                                <img src="assets/images/author/author-1.png" alt="">
                                                            </div>
                                                            <div class="author-info">
                                                                <h4>Zeniyea Henderson</h4>
                                                                <span>CTO & CO Founder, Axels</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-description">
                                                            <blockquote class="testimonials-text">
                                                                <p>“I am very much happy to buy product from
                                                                    nelson, the provide the best quality of
                                                                    product. Product quality is very
                                                                    satisfactory. Also the creative design of
                                                                    their Furniture make me happy.”</p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->

<?php
include('footer.php');
?>

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script>
    AOS.init();
</script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>