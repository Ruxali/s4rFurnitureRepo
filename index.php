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
<style>
        .categories{
        display:inline-flex; 
        
    }
    .container::-webkit-scrollbar{
        width:0;
    }
    .circle{
    width:190px!important; 
    height:190px!important; 
    padding-left: 40px;
}
</style>
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
            <br>
            <div class="container" style="overflow-x: auto;
        overflow-y: hidden;">
            <div class="categories" >
                <?php
                foreach ($cat_arr as $row) {
                ?>
                    <div class="circle" >
                        <a href="catview.php?catid=<?php echo $row['id']; ?>">
                            <img class="image" style="border-radius: 50%;border: 2px solid#000;padding:2px ; object-fit: cover;" src="upload/<?php echo $row['image'] ?>" alt="Image">
                            <br>
                            <h4 class="text-center" style="color: black;text-transform: uppercase;"><?php echo $row['name'] ?></h4>
                        </a>
                    </div>

                <?php
                }
                ?>


            </div>
        </div>
     </div>
</div>


<!--categories section end-->





<!--Product section start-->
<div class="product-section section pt-70 pt-lg-30 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pt-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-15">
                    <h2>Latest Furniture</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="tab-content">
            <div id="home" class="tab-pane fade active show">
                <div class="row">
                    <?php

                    include("connect.php");
                    $sql = "SELECT * FROM products ORDER BY id desc LIMIT 8";
                    $results = $connect->query($sql);

                    $productdata = [];
                    if ($results->num_rows > 0) {
                        while ($row_product = $results->fetch_assoc()) {
                            array_push($productdata, $row_product);
                        }
                    }
                    foreach ($productdata as $key => $row) {
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <h3 class="title"> <a href="single-product.php"><?php echo $row['name'] ?></a></h3>
                                    <p class="product-price"><span class="discounted-price">Rs. <?php echo $row['price'] ?></span> </p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Product section end-->

<!--Features section start-->
<div class="features-section section pt-30 pt-lg-15 pt-md-0 pt-sm-0 pt-xs-15">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-15">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="./assets/images/icons/feature-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free home delivery</h4>
                        <p class="short-desc">We provide free home delivery for the all products.</p>
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
                        <p class="short-desc">We ensure the best product quality. Our main goal is to provide with modern and quality furniture. </p>
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
                        <p class="short-desc">Products can be returned within 3 days of shipping date incase of damage.</p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>
        </div>
    </div>
</div>
</div>
<!--Features section end-->
<!-- Banner section start -->
<div class="banner-section section pb-40 pb-sm-30 pb-xs-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Single Banner Start -->
                <div class="single-banner-item pt-100 pt-md-80 pt-sm-70 pt-xs-50 pb-120 pb-md-100 pb-sm-90 pb-xs-50 mb-30 " style="background-image: url('./gallery/frontpage.jpg')">
                    <div class="sp-banner-content">
                        <span class="normat-text">UNIQUE DESIGN FURNITURE</span>
                        <h2 class="title">Zigzag King Chair</h2>
                        <span class="normat-text">GRAB YOURS FIRST!!!</span>
                        <a href="shop.php">SHOP NOW</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!-- Banner section End -->

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