<?php
require('header.php');
?>


<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="gallery/shopBanner.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-left">
                    <h2>Single Product</h2>
                    <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Single Product Details</li>
                            </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
<!-- Single Product Section Start -->
<div class="single-product-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-25 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-area">
                    <div class="row">
                        <?php
                        include("connect.php");
                        $id = $_GET['id'];
                        $sql = "SELECT c.name AS catname, d.* FROM products d JOIN categories c ON d.category_id = c.id  WHERE d.id='$id'";
                        $results = $connect->query($sql);
                        $row = $results->fetch_assoc();

                        ?>
                        <div class="col-md-6 pr-35 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images">
                                    <div class="lg-image">
                                        <img src="<?php $path = $row['image1'];
                                                    $display = substr($path, 3);
                                                    echo $display; ?>" alt="">
                                        <a href="<?php $path = $row['image1'];
                                                    $display = substr($path, 3);
                                                    echo $display; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                    </div>
                                    <div class="lg-image">
                                        <img src="<?php $path = $row['image2'];
                                                    $display = substr($path, 3);
                                                    echo $display; ?>" alt="">
                                        <a href="<?php $path = $row['image2'];
                                                    $display = substr($path, 3);
                                                    echo $display; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                    </div>
                                    <div class="lg-image">
                                        <img src="<?php $path = $row['image1'];
                                                    $display = substr($path, 3);
                                                    echo $display; ?>" alt="">
                                        <a href="<?php $path = $row['image1'];
                                                    $display = substr($path, 3);
                                                    echo $display; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                    </div>
                                    

                                </div>
                                <div class="product-details-thumbs">
                                    <div class="sm-image"><img src="<?php $path = $row['image1'];
                                                                    $display = substr($path, 3);
                                                                    echo $display; ?>" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="<?php $path = $row['image2'];
                                                                    $display = substr($path, 3);
                                                                    echo $display; ?>" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="<?php $path = $row['image1'];
                                                                    $display = substr($path, 3);
                                                                    echo $display; ?>" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="<?php $path = $row['image2'];
                                                                    $display = substr($path, 3);
                                                                    echo $display; ?>" alt="product image thumb"></div>

                                </div>
                            </div>
                            <!--Product Details Left -->
                        </div>
                        <div class="col-md-6">
                            <!--Product Details Content Start-->
                            <div class="product-details-content">
                                <h2><?php echo $row['name'] ?></h2>
                                
                                <div class="single-product-price">
                                    <span class="price new-price">Rs. <?php echo $row['price'] ?></span>

                                </div>
                                <div class="product-description">
                                    <u>About This Product:</u>
                                    <p><?php echo $row['description'] ?></p>
                                </div>

                                <div class="single-product-quantity">
                                        <div class="add-to-link">
                                            <button class="btn" onclick="location.href='carthandler.php?cart_id=<?php echo $row['id'] ?> &cart_name=<?php echo $row['name'] ?>&cart_price=<?php echo $row['price'] ?>'"><i class="fa fa-shopping-bag"></i>add to cart</button>
                                        </div>
                                </div>
                                
                                <div class="product-meta">
                                    <span class="posted-in">
                                        Category:
                                        <a href="#"><?php echo $row['catname'] ?></a>
                                    </span>
                                </div>
                                <div class="single-product-sharing">
                                    <h3>Share this product</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-review-tab section">
                    <!--Review And Description Tab Menu Start-->
                    <ul class="nav dec-and-review-menu">
                        <li>
                            <a class="active" data-toggle="tab" href="#description">Description</a>
                        </li>
                    </ul>
                    <!--Review And Description Tab Menu End-->
                    <!--Review And Description Tab Content Start-->
                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                        <div class="tab-pane fade active show" id="description">
                            <div class="single-product-description">
                                <p><?php echo $row['description'] ?></p>
                            </div>
                        </div>
                        
                    </div>
                    <!--Review And Description Tab Content End-->
                </div>
                            </div>
                            <!--Product Details Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product Section End -->



<!--Product section start-->
<div class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-15">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-50 mb-xs-20">
                    <h2>You May Also Like</h2>
                </div>
            </div>
        </div>

        <div class="row product-slider">
            <?php

            include("connect.php");
            $sql = "select * from products ORDER BY RAND() LIMIT 4";
            $results = $connect->query($sql);

            while ($row = $results->fetch_assoc()) {

            ?>
                <div class="col">

                    <!--  Single Grid product Start -->
                    <div class="single-grid-product mb-40">
                        <div class="product-image">
                            <a href="single-product.php?id=<?php echo $row['id']; ?>">
                                <img style="height: 270px!important;width: 290px!important; " src="<?php $path = $row['image1'];
                                                                                                    $display = substr($path, 3);
                                                                                                    echo $display; ?>" class="img-fluid" alt="">
                                <img style="height: 270px!important;width: 290px!important; " src="<?php $path = $row['image2'];
                                                                                                    $display = substr($path, 3);
                                                                                                    echo $display; ?>" class="img-fluid" alt="">
                            </a>

                            <div class="product-action">
                                <ul>
                                    <li><a href="carthandler.php?cart_id=<?php echo $row['id'] ?> &cart_name=<?php echo $row['name'] ?>&cart_price=<?php echo $row['price'] ?>"><i class="fa fa-cart-plus"></i></a></li>
                                    <li><a href="single-product.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="title"> <a href="single-product.html"><?php echo $row['name'] ?></a></h3>
                            <p class="product-price"><span class="discounted-price">Rs. <?php echo $row['price'] ?></span> </p>
                        </div>
                    </div>
                    <!--  Single Grid product End -->
                </div>

            <?php } ?>

        </div>


    </div>
</div>
<!--Product section end-->

<?php
require('footer.php');
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