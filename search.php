<?php
include('header.php');
include('functions.php');
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
                                <li><a href="shop.php">Shop</a></li>
                                <li>Search Results</li>
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
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="shop-product">
                                        <div id="myTabContent-2" class="tab-content">

                                            <div id="grid" class="tab-pane fade active show">
                                                <div class="product-grid-view">
                                                    <div class="row">
                                                        <?php
                                                    

                                                    include("connect.php");
                                                        $search=search($connect);
                                                        if(sizeof($search)== 0)
                                                        {
                                                             
                                                            echo '<img src="gallery/productError.png"class="rounded mx-auto d-block">';
                                                        }
                                                        else{
                                            
                                                        foreach($search as $row){
                                                        ?>
                                                            <div class="col-lg-3 col-md-6 col-sm-6">
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
                                                                                <li><a href="cart.php"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li>
                                                                                <a href="#quick-view-modal-container" data-toggle="modal" title="Quick View" onclick="viewdata(<?php echo $row['id'] ?>)"><i class="fa fa-eye"></i></a>

                                                                                </li>
                                                                                <li><a href="wishlist.php"><i class="fa fa-heart-o"></i></a></li>
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
                                       
                                    
                                 
                                        <?php } } ?>
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
      </div>
<!-- Shop Section End -->
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