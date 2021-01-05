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
					<h1 class="heading text-center">Cart</h1>
				</div>
			</section>
			<section class="cart-content-block container">
				<div class="row">
					<div class="col-xs-12"> 
						<div class="table-responsive">
							<table class="table cart-data-table">
								<thead>
									<tr>
										<th class="Product text-center">Products</th>
										<th class="price text-center">Price</th>
										<th class="Quantity text-center">Quantity</th>
										<th class="Total text-center">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="Product">
											<a href="#" class="btn-remove fa fa-times"></a>
											<div class="img-holder">
												<img src="https://via.placeholder.com/90x90" alt="image description" class="img-resposnive">
											</div>
											<span class="descr-wrap">Pets Puriest</span>
										</td>
										<td class="price"><span><strong class="price element-block"> $34.00</strong></span></td>
										<td class="Quantity">
											<input type="number" class="form-control text-center" min="0" value="1">
										</td>
										<td class="Total"><strong class="element-block price"> $34.00</strong></td>
									</tr>
									<tr>
										<td class="Product">
											<a href="#" class="btn-remove fa fa-times"></a>
											<div class="img-holder">
												<img src="https://via.placeholder.com/90x90" alt="image description" class="img-responsive">
											</div>
											<span class="descr-wrap">Nutri Vitamin+</span>
										</td>
										<td class="price"><span><strong class="price element-block"> $34.00</strong></span></td>
										<td class="Quantity">
											<input type="number" class="form-control text-center" min="0" value="1">
										</td>
										<td class="Total"><strong class="element-block price"> $34.00</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-12 coupon-wrap">
						<div class="coupon-code pull-left">
							<input class="form-control" placeholder="Coupon Code" type="text">
							<button type="submit" class="btn-primary text-center text-uppercase  pull-right">apply code</button>
						</div>
						<a href="#" class="btn-primary updatebtn text-center text-uppercase pull-right">update cart</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="table-wrap pull-right">
							<h2>Cart Total</h2>
							<ul class="list-unstyled cart-total">
								<li>
									<strong class="title pull-left">Sub-Total</strong>
									<strong class="price pull-right">$74.00</strong>
								</li>
								<li>
									<strong class="title pull-left">Total</strong>
									<strong class="price pull-right">$74.00</strong>
								</li>
							</ul>
							<a href="checkout.php" class="btn-primary text-center text-uppercase">proceed to checkout</a>
						</div>
					</div>
				</div>
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