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

<!-- Page Banner Section Start -->

<div class="page-banner-section section bg-image" data-bg="gallery/shopBanner.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-left">
                    <h2>Shop</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
<!-- Shop Section Start -->
<div class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-area">
                    <div class="row">
                        <div class="col-12">
                            <!-- Grid & List View Start -->
                            <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                <div class="grid-list-option d-flex">
                                    <ul class="nav">
                                        <li>
                                            <a class="active show" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                                        </li>
                                        <li>
                                            <!--Categories Area Start-->
                                            <div class="categories pt-20 mt-20">
                                                <?php
                                                foreach ($cat_arr as $row) {
                                                ?>
                                                    <div class="circle1"><span OnClick="parent.location='<?php print $row['fileurl'] ?>'">
                                                            <img class="image" style="border-radius: 50%; margin-right: 40px;
  border: 2px solid#000;
  padding:2px ;
  width:100px!important;
  height:100px!important; 
  object-fit: contain;" src="upload/<?php echo $row['image'] ?>" alt="Image">
                                                            <br>
                                                            
                                                        </span></div>

                                                    <?php

                                                    ?>
                                                <?php
                                                }
                                                ?>


                                            </div>
                                            <!--Categories Area End-->
                                        </li>
                                    </ul>

                                </div>

                            </div>
                            <!-- Grid & List View End -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="shop-product">
                                        <div id="myTabContent-2" class="tab-content">
                                            <div id="grid" class="tab-pane fade active show">
                                                <div class="product-grid-view">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-40">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span>-20%</span>
                                                                    </div>
                                                                    <a href="single-product.php">
                                                                        <img src="./assets/images/product/product-1.jpg" class="img-fluid" alt="">
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

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
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

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
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

                                                        <div class="col-lg-3 col-md-6 col-sm-6">
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="list" class="tab-pane fade">
                                                <div class="product-list-view">
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.php">
                                                                            <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
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
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.php">Miro Dining Table</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$210.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.php">
                                                                            <img src="./assets/images/product/product-1.jpg" class="img-fluid" alt="">
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
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.php">Stylish Design Chair</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.php">
                                                                            <img src="./assets/images/product/product-3.jpg" class="img-fluid" alt="">
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
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.php">Janus Table Lamp</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$130.00</span> <span class="main-price discounted">$150.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="single-grid-product">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">New</span>
                                                                        </div>
                                                                        <a href="single-product.php">
                                                                            <img src="./assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                                                            <img src="./assets/images/product/product-6.jpg" class="img-fluid" alt="">
                                                                        </a>

                                                                        <div class="product-action">
                                                                            <ul>
                                                                                <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                <li><a href="wishlit.php"><i class="fa fa-heart-o"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="single-product.php">Normal Dining chair</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$190.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30 mb-sm-40 mb-xs-30">
                        <div class="col">
                            <ul class="page-pagination">
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Shop Section End -->>
<?php
include('footer.php');
?>
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>