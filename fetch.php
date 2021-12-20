<?php 

if(isset($_POST['view'])){ 
?>
<div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" onclick="closedata()">&times;</span>
            </button>
        </div>
                    <div class="modal-body" id="loadData">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <?php                      
                                include("connect.php");
                                $id = $_POST['view'];
                                $sql = "SELECT c.name AS catname, d.* FROM products d JOIN categories c ON d.category_id = c.id  WHERE d.id='$id'";
                                $results = $connect->query($sql);
                                $row = $results->fetch_assoc();

                                ?>
                                <div class="col-lg-4 col-md-6">
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
                             
                                <div class="col-lg-8 col-md-6">
                                    <!--Product Details Content Start-->
                            <div class="product-details-content">
                                <h2><?php echo $row['name'] ?></h2>
                                <div class="single-product-reviews">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <a class="review-link" href="#">(1 customer review)</a>
                                </div>
                                <div class="single-product-price">
                                    <span class="price new-price">Rs. <?php echo $row['price'] ?></span>

                                </div>
                                <div class="product-description">
                                    <p><?php echo $row['description'] ?></p>
                                </div>

                                <div class="single-product-quantity">
                                    <form class="add-quantity" action="#">
                                        <div class="product-quantity">
                                            <input value="1" type="number">
                                        </div>
                                        <div class="add-to-link">
                                            <button class="btn"><i class="fa fa-shopping-bag"></i>add to cart</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="wishlist-compare-btn">
                                    <a href="#" class="wishlist-btn">Add to Wishlist</a>

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
                            </div>
                            <!--Product Details Content End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php
 
   
}


?>