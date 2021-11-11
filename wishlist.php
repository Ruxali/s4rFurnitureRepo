<?php
    include('header.php');
?>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Wishlist</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Wishlist</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Wishlist section start-->
        <div class="wishlist-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-stock">Stock Status</th>
                                        <th class="pro-addtocart">Add to cart</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Black Cable Restorer</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-stock"><span class="in-stock">in stock</span></td>
                                        <td class="pro-addtocart"><button class="btn">Add to cart</button></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-3.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Black Die Grinder</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-stock"><span class="in-stock">in stock</span></td>
                                        <td class="pro-addtocart"><button class="btn">Add to cart</button></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-5.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Orange Decker drill</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-stock"><span class="out-stock">Out stock</span></td>
                                        <td class="pro-addtocart"><button class="btn">Add to cart</button></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Wishlist section end-->
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