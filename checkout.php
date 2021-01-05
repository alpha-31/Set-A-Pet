<?php
session_start() ;
 	include("connections.php");
 	include("functions.php");
 	$user_data = check_login($con) ;

?><!DOCTYPE html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the price table -->
	<meta name="Petshop" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the price table style -->
	<meta name="Petshop" content="black">
	<!-- set the description -->
	<meta name="description" content="Petshop HTML5 Template">
	<title>Pet Bazaar</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600%7CNunito:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/icon-fonts.css">
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<div class="header-area container">
				<div class="row">
					<div class="col-xs-12 hidden visible-xs">
						<ul class="list-unstyled social-network text-center">
							<li><a href="mailto:petty@support.com"><i class="icon-message" aria-hidden="true"></i></a></li>
							<li><a href="tell:1345678000"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<ul class="list-unstyled contact-info">
							<li>
								<a href="mailto:petty@support.com" class="icon pull-left"><i class="icon-message"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Mail us:</strong>
									<a href="mailto:sheikhabdul.bcss19@iba-suk.edu.pk">pet@bazaar.pk</a>
								</div>
							</li>
							<li>
								<a href="tell:1345678000" class="icon pull-left"><i class="icon-phone-call"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Call us:</strong>
									<a href="tell:071345678000">(071) 345 678 000</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<div class="social-list">
							<ul class="list-unstyled social-network">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
							<ul class="list-unstyled account-cart">
								<li><a href="register.php"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
								<li><a href="userLogin.php"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="logo pull-left hidden visible-xs">
							<a href="index.php"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a>
						</div>
						<a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
						<nav id="nav">
							<ul class="list-unstyled text-uppercase menu-left">
								<li><a href="index.php">home</a></li>
								<li>
									<a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="services.php">services</a></li>
								    </ul>
								</li>
								<li>
									<a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="shop-detail.php">Shop Detail</a></li>
										<li><a href="userLogin.php">Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
									</ul>
								</li>
								<li class="logo hidden-xs"><a href="index.html"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a></li>
								
								<li><a href="contact-us.php">contact us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main id="main">
			<section class="hero-sec bg-full" style="background-image:url(images/main.jpg);">
				<div class="caption">
					<h1 class="heading text-center">Checkout</h1>
				</div>
			</section>
			<section class="check-sec container">
				<div class="row">
					<div class="col-xs-12">
						<div class="txt-wrap">
							<p>Returning customer? <a href="userLogin.php">Click here to login</a></p>
						</div>
						<div class="txt-wrap">
							<p>Have a coupon?  <a href="#">Click here to enter your code</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<form class="checkout-form text-left" action="#">
							<fieldset>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<h2>Billing Details</h2>
										<div class="form-group">
											<div class="holder">
												<div class="col">
													<label>First Name <span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
												<div class="col">
													<label>Last Name<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
											</div>
											<label>Company Name<span class="sign">*</span></label>
											<input class="form-control " placeholder="" type="text">
											<label>Address 1<span class="sign">*</span></label>
											<input class="form-control" placeholder="" type="text">
											<label>Address 2 [optional}</label>
											<input class="form-control" placeholder="" type="text">
											<div class="holder">
												<div class="col">
													<label>Email Address<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
												<div class="col">
													<label>Phone<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
											</div>
											<div class="holder">
												<div class="col">
													<label>Town/City<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
												<div class="col">
													<label>Pin code/Zip<span class="sign">*</span></label>
													<input class="form-control element-block" placeholder="" type="text">
												</div>
											</div>
											<label>Country<span class="sign">*</span></label>
											<select class="form-control">
												<option value="0">United States</option>
												<option value="1">United States</option>
												<option value="2">United States</option>
											</select>
										</div>
										<div class="form-group">
										    <input type="checkbox" class="checkbox">
										    <span class="check-holder">Create an Account?</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6">
										<h2>Additional Info</h2>
										<div class="form-group">
											<label>Other Notes</label>
											<textarea class="form-control" placeholder="Notes about your order, e.g: your delivery"></textarea>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-bordered">
							<caption>Your Order</caption>
							<thead>
								<tr>
									<th>Products</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Pets Puriest  × 1</td>
									<td>34.00</td>
								</tr>
								<tr>
									<td>Nutri Vitamin+ × 1</td>
									<td>$40.00</td>
								</tr>
								<tr class="total">
									<td>Sub-Total</td>
									<td class="clr">$74.00</td>
								</tr>
								<tr class="total">
									<td>Total</td>
									<td class="clr">$74.00</td>
								</tr>
							</tbody>
						</table>
						<div class="payment-holder">
							<h2>Payment Method</h2>
							<form  class="payment-form" action="userSignup.php">
								<div class="form-group"> 
									<label>
										<input type="checkbox" class="check" name="checkbox" value="value" checked>Cheque Payment
									</label>
									<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
								</div>
								<div class="form-group"> 
									<label>
										<input type="checkbox" class="check" name="checkbox" value="value">Direct Transfer
									</label>
								</div>
								<div class="form-group block">
									<label>
										<input type="checkbox" class="check" name="checkbox" value="value">Paypal
										<img src="images/img49.jpg" class="img-responsive" alt="payment-method-image">
										<a href="#">What is Paypal?</a>
									</label>
								</div>
								<input type="submit" value="place your order" class="text-uppercase submit-btn">
							</form>
						</div>
					</div>
				</div>
			</section>
			<br><br>
			<br><br>
		
		

			<section class="callout" style="background: black;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<h2>Get 50% offer for all pet products</h2>
						</div>
						<br>
						<div class="col-xs-12 col-sm-6">
							<a class="btn-primary text-uppercase text-center lg-round" href="#">coupon code : PETBAZ1234</a>
						</div>
					</div>
				</div>
			</section>
		</main>
		<br><br>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
						<div class="footer-logo">
							<a href="#"><img src="images/footer-logo.png" alt="Pet Shop" class="img-responsive"></a>
						</div>
						<p>It is a long established fact that a reader <br class="hidden-xs">distracted by the readable content</p>
						<ul class="contact-list list-unstyled">
							<li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> Sukkur IBA Univeristy, Pakistan</li>
							<li><a href="mailto:sheikhabdul.bcss19@iba-suk.edu.pk"><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true">pet@bazaar.pk</i></span></a></li>
							<li><a href="#tell:071345678000"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> (071) 345 678 000 </a></li>
							
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2">
						<h3>Information</h3>
						<ul class="info-list list-unstyled">
							<li><a href="index.php"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Adoption</a></li>
							<li><a href="index.php"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Active Dogs</a></li>
							<li><a href="index.php"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Daycare</a></li>
							<li><a href="index.php"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Dog Training</a></li>
							<li><a href="index.php"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Helpcare</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Instagram</h3>
						<ul class="insta-list list-unstyled">
							<li><a href="#"><img src="images/s6.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/s5.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/s7.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/s8.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/s9.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/s10.jpg" alt="footer-img" class="img-responsive"></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Newsletter</h3>
						<div class="newsletter">
							<p>It is a long established fact that a by <br class="hidden-xs">the readable content</p>
							<form class="newsletter-form" action="#">
								<fieldset>
									<input class="form-control" placeholder="Email" type="email">
									<button class="submit-btn round" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.main.js"></script>
</body>
</html>