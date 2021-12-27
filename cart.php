<?php
include('header.php');
include('connect.php');
?>
<style>
	.wrap-num-product {
		width: 140px;
		height: 45px;
		border: 1px solid #e6e6e6;
		border-radius: 3px;
		overflow: hidden;
	}

	.btn-num-product-up,
	.btn-num-product-down {
		width: 45px;
		height: 100%;
		cursor: pointer;
	}

	.num-product {
		width: calc(100% - 90px);
		height: 100%;
		border-left: 1px solid #e6e6e6;
		border-right: 1px solid #e6e6e6;
		background-color: #f7f7f7;
	}

	input.num-product {
		-moz-appearance: textfield;
		appearance: none;
		-webkit-appearance: none;
	}

	input.num-product::-webkit-outer-spin-button,
	input.num-product::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
</style>
<?php

if (!isset($total)) {
	$total = 0;
}
?>

<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="gallery/shopBanner.png">
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
								<th class="pro-title">Product</th>
								<th class="pro-price">Price</th>
								<th class="pro-quantity">Quantity</th>
								<th class="pro-update"></th>
								<th class="pro-subtotal">Total</th>
								<th class="pro-remove">Action</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<?php

								if (isset($_SESSION['cart'])) {
									$total = 0;
									foreach ($_SESSION['cart'] as $key => $value) {
										$total = $total + $value['item_price'] * $value['quantity'];

								?>
										<td class="pro-title"><a href="#"><?php echo $value['item_name'] ?></a></td>
										<td class="pro-price"><span>Rs. <?php echo $value['item_price'] ?></span></td>
										<td class="pro-quantity">
											<form action="cartupdate.php" method="POST">
												<div class="pro-qty"><input type="number" value="<?php echo $value['quantity'] ?>"></div>
										</td>

										<td class="pro-update">
											<button class="btn btn-sm " name="update">Update</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</td>
										<td class="pro-subtotal"><span>Rs. <?php echo $total ?></span></td>
										<td class="pro-remove">
											<div class="">
												<form action="cartremove.php" method="POST">
													<button class="btn btn-sm " name="remove">Remove</button>
													<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
												</form>
											</div>
										</td>
							</tr>
					<?php
									}
								}
					?>
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
										<input type="text" placeholder="Country">
									</div>
									<div class="col-md-6 col-12 mb-25">
										<input type="text" placeholder="City">
									</div>
									<div class="col-md-6 col-12 mb-25">
										<input type="text" placeholder="Postcode / Zip">
									</div>
									<div class="col-md-6 col-12 mb-25">
										<button class="btn">Add</button>
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