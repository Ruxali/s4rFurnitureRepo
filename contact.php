<?php
include('header.php');
?>


<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="gallery/shopBanner.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-left">
                    <h2>Contact</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
<!--Contact section start-->
<div class="conact-section section pt-85 pt-lg-65 pt-md-55 pt-sm-45 pt-xs-35  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="contact-form-wrap">
                    <h3 class="contact-title">Write Us</h3>
                    <form action="contactHandler.php" method="POST">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="name-fild-padding mb-sm-30 mb-xs-30">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact-form-style mb-20">
                                                <label class="fild-name">Name</label>
                                                <input name="name" placeholder="Your Name..." type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="contact-form-style mb-20">
                                                <label class="fild-name">Email</label>
                                                <input name="email" placeholder="Your Email..." type="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-form-style bl">
                                    <label class="fild-name pl-15">Message</label>
                                    <textarea class="pl-15" name="message" placeholder="Type your message here.."></textarea>
                                    
                                <button type="submit" name="submit" class="btn">Send Message</button>
                            
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
<!--Contact section end-->
<!--Contact Map section start-->
<div class="contact-map-section section">
    <div class="contact-map">
        <iframe src="https://maps.google.com/maps?q=chibahal%20gate&t=&z=13&ie=UTF8&iwloc=&output=embed" height="400px" width="100%" target="_blank"></iframe>
    </div>
</div>

<!--Contact Map section End-->
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