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
    .nav::-webkit-scrollbar{
        width:0;
    }
</style>

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
                                <ul class="nav" style=" overflow-x: auto; overflow-y:hidden;">
                                        
                                        <li><div class="row">
                                            <!--Categories Area Start-->
                                            <div class="categories" style="display:flex;">
                                                <?php
                                                foreach ($cat_arr as $row) {
                                                ?>
                                                    <div class="circle1" style="width:100px!important;height:100px!important; margin: 15px;">
                                             
                                                    <a href="catview.php?catid=<?php echo $row['id'];?>">
                                                            <img class="image" style="border-radius: 50%; border: 2px solid#000; padding:2px ;  object-fit: contain;" src="upload/<?php echo $row['image'] ?>" alt="Image">
                                                            <br>

                                                            </a></div>
                                                <?php
                                                }
                                                ?>


                                            </div>
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
                                                        <?php

                                                        include("connect.php");
                                                        $per_page=8;
                                                        $start = 0;
                                                        $current_page=1;
                                                        if(isset($_GET['start'])){
                                                            $start= $_GET['start'];
                                                            $current_page = $start;
                                                            $start --;
                                                            $start = $start*$per_page;
                                                        }
                                                        $record = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM products"));
                                                        $pagi = ceil($record/$per_page);

                                                        $sql = "SELECT * FROM products LIMIT $start,$per_page";
                                                        $results = $connect->query($sql);
                                                        
                                                     
                                                        $productdata = [];
                                                        if ($results->num_rows > 0) {
                                                            while ($row_product = $results->fetch_assoc()) {
                                                                array_push($productdata, $row_product);
                                                            }
                                                        }else{
                                                            echo "No records";
                                                        }
                                                        
                                                        
                                                        foreach ($productdata as $key => $row) {
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
                                                                                <li><a href="carthandler.php?cart_id=<?php echo $row['id'] ?> &cart_name=<?php echo $row['name'] ?>&cart_price=<?php echo $row['price'] ?>"><i class="fa fa-cart-plus"></i></a></li>
                                                                                <li>
                                                                                <a href="single-product.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a>

                                                                                </li>
                                                                                
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
                           </div>
                        </div>
                        </div>
                        <div class="row mb-30 mb-sm-40 mb-xs-30">
                           <div class="col">
                              <ul class="page-pagination">
                                  <?php                                
                                  for($i=1; $i<=$pagi; $i++){
                                    $class=''; 
                                      if($current_page == $i){
                                          $class='active';
                                      }
                                      ?>
                                 <li class="<?php echo $class?>"><a href="?start=<?php echo $i?>"><?php echo $i?></a></li>
                                 <?php } ?>
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