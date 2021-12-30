<?php
include('header.php');
?>

<?php
 require('connect.php');
 require('functions.php');
    

  $sql = "SELECT e.id AS orderid, e.total AS total, f.name AS products, d.* FROM order_details d JOIN orders e ON d.order_id = e.id JOIN products f ON d.product_id = f.id ORDER BY d.id  asc"; 
  $res = mysqli_query($connect,$sql);
?>
<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="gallery/shopBanner.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-left">
                    <h2>My Account</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
<!--My Account section start-->
<div class="my-account-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <!-- My Account Tab Menu Start -->
                    <div class="col-lg-3 col-12">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                Dashboard</a>

                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>


                            <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->

                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-12">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Dashboard</h3>

                                    <div class="welcome mb-20">
                                        <?php include('connect.php');
                                        if (isset($_SESSION['username'])) {
                                            $username = $_SESSION['username'];

                                            $sql = "SELECT * FROM  customers WHERE username = '$username'";
                                            //connecting to databse
                                            $run_Sql = mysqli_query($connect, $sql);
                                        ?>
                                        
                                            <p>Hello, <strong><?php echo"$username"?></strong> (If Not <strong><?php echo"$username"?>!</strong><a href="logout.php" class="logout"> Logout</a>)</p>
                                    </div>
                                    <?php } ?>
                                <p class="mb-0">From your account dashboard, you can easily check &amp; view your
                                    recent orders.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Orders</h3>

                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Product Name</th>
                                                    <th>Date</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                
                                            while ($row = mysqli_fetch_assoc($res)) { ?>
                                                <tr>
                                                    <td><?php echo $row['orderid'] ?></td>
                                                    <td><?php echo $row['products'] ?></td>
                                                    <td><?php echo $row['created_at'] ?></td>
                                                    <td><?php echo $row['quantity'] ?></td>
                                                    <td>Rs. <?php echo $row['total'] ?></td>
                                                    <td><?php
                                            
                                                                if($row['status'] == '1')
                                                                {
                                                                    echo "<span class='text-success'>Delievered<span>";
                                                                }
                                                                else{
                                                                    echo "<span class='text-danger'> Order Placed <span>";
                                                                }
                                            
                                                           

                                                            ?>
                                            
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->


                         
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>

            </div>

        </div>
    </div>
</div>
<!--My Account section end-->
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