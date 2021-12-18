<?php
    include('header.php'); 
?>


        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="gallery/shopBanner.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Login Register</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Login Register</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Login Register section start-->
        <div class="login-register-section section pt-90 pt-lg-70 pt-md-60 pt-sm-55 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <!--Login Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register">
                            <div class="form-login-title">
                                <h2>Login</h2>
                            </div>
                            <div class="login-form">
                                <form action="loginHandler.php" method="POST">
                                <div class="form-fild">
                                        <p><label>Username <span class="required">*</span></label></p>
                                        <input name="username" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Password <span class="required">*</span></label></p>
                                        <input name="password" value="" type="password">
                                    </div>
                                    <div class="login-submit">
                                        <button type="submit"name="login" class="btn">Login</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Login Form End-->
                    <!--Register Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register register-pt-0">
                            <div class="form-register-title">
                                <h2>Register</h2>
                            </div>
                            <div class="register-form">
                                <form action="registerHandler.php" method="POST">
                                    <div class="form-fild">
                                    <div class="form-fild">
                                        <p><label>Username <span class="required">*</span></label></p>
                                        <input name="username" value="" type="text">
                                    </div>
                                        <p><label>Email Address <span class="required">*</span></label></p>
                                        <input name="email" value="" type="email">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Password <span class="required">*</span></label></p>
                                        <input name="password" value="" type="password">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Retype Password <span class="required">*</span></label></p>
                                        <input name="password2" value="" type="password">
                                    </div>
                                    <div class="register-submit">
                                        <button type="submit" class="btn">Register</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Register Form End-->
                </div>
            </div>
        </div>
        <!--Login Register section end-->
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