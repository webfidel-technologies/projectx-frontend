<!DOCTYPE html>
<html lang="en">
<?php include"head.php"; ?>
<script src="custom-js/restrict_access.js"></script>
<script src="custom-js/complete-account.js"></script>
<body>
<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div>
	
	<!-- Header -->
	<?php include"nav.php"; ?>
	<!-- Header End -->
	
	<div class="page-content">
		<!--banner-->
		<div class="dz-bnr-inr" style="background-image:url(images/background/bg-shape.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Hi <span id="displayName"></span>,</h1>
					<h3>Finish setting up your account</h3>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php"> Home</a></li>
							<li class="breadcrumb-item">Profile</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- inner page banner End-->
		<div class="content-inner-1">
			<div class="container">
				<div class="row shop-checkout">
					<div class="col-xl-8">
						<!-- <h4 class="title m-b15">Billing details</h4> -->
						<!-- <div class="accordion dz-accordion accordion-sm" id="accordionFaq">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Returning customer? &nbsp; <span class="text-primary">Click here to login</span>
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
										Have a coupon? &nbsp; <span class="text-primary">Click here to enter your code</span>
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
									</div>
								</div>
							</div>
						</div> -->
						<form class="row">

							<div class="col-md-12">
								<div class="m-b25">
									<label class="label-title">What would you like to do on getbanny</label>
									<div class="form-select">
										<select class="default-select w-100">
											<option value="is_model">Become a model</option>
											<option value="no_model">Connect with models</option>
										</select>	
									</div>
								</div>
							</div>

							<!-- <div class="col-md-12">
								<h3>Describe your self</h3>
							</div> -->

							<div class="col-md-12">
								<div class="m-b25">
									<label class="label-title">Country</label>
									<div class="form-select">
										<select class="default-select w-100" name="country" id="country">
											<option value="Nigeria">Nigeria</option>
											<option value="UK">UK</option>
											<option value="Canada">Canada</option>
										</select>	
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="m-b25">
									<label class="label-title">State</label>
									<div class="form-select">
										<select class="default-select w-100" name="state" id="state">
											<option value="Lagos">Lagos</option>
											<option value="Anambra">Anambra</option>
											<option value="Delta">Delta</option>
										</select>	
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="m-b25">
									<label class="label-title">City</label>
									<div class="form-select">
										<select class="default-select w-100" name="city" id="city">
											<option value="Lekki">Lekki</option>
											<option value="Victoria Island">Victoria Island</option>
											<option value="Chevron">Chevron</option>
										</select>	
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">Zip Code</label>
									<input name="zip_code" id="zip_code" required="" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">Address</label>
									<input name="address" id="address" required="" class="form-control">
								</div>
							</div>
							
							
							
						</form>
					</div>

					
					<div class="col-xl-4 side-bar">
						<h4 class="title m-b15">Your Order</h4>
						<div class="order-detail sticky-top">
							<div class="cart-item style-1">
								<div class="dz-media">
									<img src="images/shop/shop-cart/pic1.jpg" alt="/">
								</div>
								<div class="dz-content">
									<h6 class="title mb-0">Wooden Water<br> Bottles</h6>
									<span class="price">$40.00</span>
								</div>
							</div>
							<div class="cart-item style-1 mb-0">
								<div class="dz-media">
									<img src="images/shop/shop-cart/pic2.jpg" alt="/">
								</div>
								<div class="dz-content">
									<h6 class="title mb-0">Wooden Cup</h6>
									<span class="price">$36.00</span>
								</div>
							</div>
							<table>
								<tbody>
									<tr class="subtotal">
										<td>Subtotal</td>
										<td class="price">$100</td>
									</tr>
									<tr class="title">
										<td><h6 class="title font-weight-500">Shipping</h6></td>
										<td></td>
									</tr>
									<tr class="shipping">
										<td>
											<div class="custom-control custom-checkbox">
											  <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											  <label class="form-check-label" for="flexRadioDefault1">
												Free shipping
											  </label>
											</div>
											<div class="custom-control custom-checkbox">
											  <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
											  <label class="form-check-label" for="flexRadioDefault2">
												Flat Rate:
											  </label>
											</div>
										</td>
										<td class="price">25.75</td>
									</tr>
									<tr class="total">
										<td>Total</td>
										<td class="price">$125.75</td>
										
									</tr>
								</tbody>
							</table>
							
							<div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
								<div class="accordion-item">
									<div class="accordion-header" id="heading1">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse1" role="navigation"  aria-expanded="true" aria-controls="collapse1">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
											<label class="form-check-label" for="flexRadioDefault3">
												Direct bank transfer
											</label>
										</div>
									</div>
									<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading2">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse2" role="navigation" aria-expanded="true" aria-controls="collapse2">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
											<label class="form-check-label" for="flexRadioDefault5">
												Cash on delivery
											</label>
										</div>
									</div>
									<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="collapse2" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading3">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse3" role="navigation" aria-expanded="true" aria-controls="collapse3">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
											<label class="form-check-label" for="flexRadioDefault4">
												Paypal
											</label>
											<img src="images/shop/payment.jpg" alt="/">
											<a href="javascript:void(0);">What is PayPal?</a>
										</div>
									</div>
									<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
							</div>
							<p class="text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="javascript:void(0);">privacy policy.</a></p>
							<div class="form-group">
								<div class="custom-control custom-checkbox d-flex m-b15">
									<input type="checkbox" class="form-check-input" id="basic_checkbox_3">
									<label class="form-check-label" for="basic_checkbox_3">I have read and agree to the website terms and conditions </label>
								</div>
							</div>
							<a href="shop-checkout.html" class="btn btn-secondary w-100">PLACE ORDER</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Icon Box Start -->
			<section class="content-inner py-0">
				<div class="container-fluid px-0">
					<div class="row gx-0">
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 bg-light">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/password-check.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Filter & Discover</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">01</div>
							</div>	
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/cart.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Add to cart</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">02</div>
							</div>	
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 bg-light">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/discovery.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Fast Shipping</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">03</div>
							</div>	
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/box-tick.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Enjoy The Product</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">04</div>
							</div>	
						</div>
					</div>
				</div>
			</section>
		<!-- Icon Box End -->

	</div>

	<!-- Footer -->
	<footer class="site-footer style-1">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4 col-sm-6">
						<div class="widget widget_about me-2">
							<div class="footer-logo logo-white">
								<a href="index.html"><img src="images/logo.svg" alt="/"></a> 
							</div>
							<ul class="widget-address">
								<li>
									<p><span>Address</span> : 451 Wall Street, UK, London</p>
								</li>
								<li>
									<p><span>E-mail</span> : example@info.com</p>
								</li>
								<li>
									<p><span>Phone</span> : (064) 332-1233</p>
								</li>
							</ul>
							<div class="subscribe_widget">
								<h6 class="title fw-medium text-capitalize">subscribe to our newsletter</h6>	
								<form class="dzSubscribe" action="script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="form-group">
										<div class="input-group mb-0">
											<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
											<div class="input-group-addon">
												<button name="submit" value="Submit" type="submit" class="btn">
													<svg width="21" height="21" viewBox="0 0 21 21" fill="none">
														<path d="M4.20972 10.7344H15.8717" stroke="#0D775E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M10.0408 4.90112L15.8718 10.7345L10.0408 16.5678" stroke="#0D775E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6">
						<div class="widget widget_post">
							<h5 class="footer-title">Recent Posts</h5>
							<ul>
								<li>
									<div class="dz-media">
										<img src="images/shop/product/small/1.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Wooden Water Bottles</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
								<li>
									<div class="dz-media">
										<img src="images/shop/product/small/2.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Eco friendly bags</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
								<li>
									<div class="dz-media">
										<img src="images/shop/product/small/3.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Bamboo toothbrushes</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-6">
						<div class="widget widget_services">
							<h5 class="footer-title">Our Stores</h5>
							<ul>
								<li><a href="javascript:void(0);">New York</a></li>
								<li><a href="javascript:void(0);">London SF</a></li>
								<li><a href="javascript:void(0);">Edinburgh</a></li>
								<li><a href="javascript:void(0);">Los Angeles</a></li>
								<li><a href="javascript:void(0);">Chicago</a></li>
								<li><a href="javascript:void(0);">Las Vegas</a></li>
							</ul>   
						</div>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-6">
						<div class="widget widget_services">
							<h5 class="footer-title">Useful Links</h5>
							<ul>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
								<li><a href="javascript:void(0);">Returns</a></li>
								<li><a href="javascript:void(0);">Terms & Conditions</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Latest News</a></li>
								<li><a href="javascript:void(0);">Our Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4">
						<div class="widget widget_services">
							<h5 class="footer-title">Footer Menu</h5>
							<ul>
								<li><a href="javascript:void(0);">Instagram profile</a></li>
								<li><a href="javascript:void(0);">New Collection</a></li>
								<li><a href="javascript:void(0);">Woman Dress</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Latest News</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Top End -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row fb-inner">
					<div class="col-lg-6 col-md-12 text-start"> 
						<p class="copyright-text">© 2023 <a href="https://hugebinary.com/">HugeBinary</a> Theme. All Rights Reserved.</p>
					</div>
					<div class="col-lg-6 col-md-12 text-end"> 
						<div class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
							<span class="me-3">We Accept: </span>
							<img src="images/footer-img.png" alt="/">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->
		
	</footer>
	<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>


</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->

<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED-->
<script src="vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
<script src="vendor/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>
</html>