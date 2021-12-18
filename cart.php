
<?php
    include('header.php');
    include('customersession.php');
?>


        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Shopping Cart</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Cart section start-->
        <div class="cart-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
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
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-3.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Black Cable Restorer</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-5.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Black Die Grinder</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-7.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Orange Decker drill</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-12 mb-5">
                                <!-- Calculate Shipping -->
                                <div class="calculate-shipping">
                                    <h4>Calculate Shipping</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-25">
                                                <select class="nice-select">
                                                    <option>Bangladesh</option>
                                                    <option>China</option>
                                                    <option>country</option>
                                                    <option>India</option>
                                                    <option>Japan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <select class="nice-select">
                                                    <option>Dhaka</option>
                                                    <option>Barisal</option>
                                                    <option>Khulna</option>
                                                    <option>Comilla</option>
                                                    <option>Chittagong</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <button class="btn">Estimate</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Discount Coupon -->
                                <div class="discount-coupon">
                                    <h4>Discount Coupon Code</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-25">
                                                <input type="text" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <button class="btn">Apply Code</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb-30 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <h4>Cart Summary</h4>
                                        <p>Sub Total <span>$75.00</span></p>
                                        <p>Shipping Cost <span>$00.00</span></p>
                                        <h2>Grand Total <span>$75.00</span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <button class="btn">Checkout</button>
                                        <button class="btn">Update Cart</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Cart section end-->

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