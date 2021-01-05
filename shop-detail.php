<?<?php
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
					<h1 class="heading text-center">Shop</h1>
				</div>
			</section>
			<section class="shop-sec detail-page container">
				<div class="row">
					<div class="col-xs-12">
						<article id="content">
							<div class="holder">
								<div class="block">
									<div class="product-slider">
										<div class="slide">
											<img src="https://via.placeholder.com/205x205" alt="image" class="img-responsive">
										</div>
									</div>
									<ul class="list-unstyled slick-slider pagg-slider">
							            <li><img src="https://via.placeholder.com/75x75" alt="image description"></li>
							        	<li><img src="https://via.placeholder.com/75x75" alt="image description"></li>
							        </ul>
							    </div>
								<div class="text-holder">
									<h3>Pawbits Joint</h3> 
									<span class="price">$134.00</span>	
									<p>There are many variations of passages of Lorem Ipsum as available, but the majority have suffered alteration in some form, by injected humour, or randomised words which buy don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>	
									<form class="select-form">
										<fieldset>
										    <input class="form-control" type="number" value="1" min="0" max="1000">
										</fieldset>
									</form>
									<a href="cart.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i> add to cart</a>
									<ul class="list-unstyled text-center share-list">
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="icon-refresh"></i></a></li>
									</ul>
								</div>
							</div>
							<ul class="list-unstyled tabset">
						        <li class="active"><a href="#tab1-0">Description</a></li>
						        <li><a href="#tab2-0">Reviews(03)</a></li>
						    </ul>
						    <div class="tab-content">
						        <div id="tab1-0">
						        	<p>Passages of Lorem Ipsum as available, but the majority have suffered alteration in some form, by injected humour, or randomised words which buy don't look even slightly believable. If you are going to use a passage of need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						        	<ul class="list-unstyled">
						        		<li>Suitable for : Pets</li>
						        		<li>Color: Assorted colors, please see available color options</li>
						        		<li>Available Sizes: 5 in, 3.2 in</li>
						        	</ul>
						        </div>
						        <div id="tab2-0">
						        	<p>Passages of Lorem Ipsum as available, but the majority have suffered alteration in some form, by injected humour, or randomised words which buy don't look even slightly believable. If you are going to use a passage of need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						        	<ul class="list-unstyled">
						        		<li>Suitable for : Pets</li>
						        		<li>Color: Assorted colors, please see available color options</li>
						        		<li>Available Sizes: 5 in, 3.2 in</li>
						        	</ul>
						        </div>
						    </div>
							<div class="related-products">
								<h3 class="text-center">Related Products</h3>
								<div class="product-box">
									<div class="product-col">
										<div class="img-holder">
											<img src="https://via.placeholder.com/210x210" alt="food-img" class="img-responsive">
											<div class="over-holder">
												<ul class="list-unstyled text-center share-list">
													<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="icon-refresh"></i></a></li>
													<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="descrip">
											<h4 class="heading2">Pets Puriest</h4>
											<span class="price"><del class="discount-price">$62.00</del> $58.00</span>
										</div>
										<div class="text-center">
											<a href="cart.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
										</div>
									</div>
									<div class="product-col">
										<div class="img-holder">
											<img src="https://via.placeholder.com/210x210" alt="food-img" class="img-responsive">
											<div class="over-holder">
												<ul class="list-unstyled text-center share-list">
													<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="icon-refresh"></i></a></li>
													<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="descrip">
											<h4 class="heading2">Nutri-Pooch</h4>
											<span class="price"><del class="discount-price">$62.00</del> $58.00</span>
										</div>
										<div class="text-center">
											<a href="cart.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
										</div>
									</div>
									<div class="product-col">
										<div class="img-holder">
											<img src="https://via.placeholder.com/210x210" alt="food-img" class="img-responsive">
											<div class="over-holder">
												<ul class="list-unstyled text-center share-list">
													<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="icon-refresh"></i></a></li>
													<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="descrip">
											<h4 class="heading2">Lintbells YuMove</h4>
											<span class="price">$58.00</span>
										</div>
										<div class="text-center">
											<a href="cart.html" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
										</div>
									</div>
								</div>
							</div>
						</article>
						<aside id="sidebar">
							<section class="widget">
								<h3>Filter</h3>
							</section>
							<section class="widget">
								<h3>Categories</h3>
								<ul class="list-unstyled category-list">
									<li><a href="#"><span class="icon fa fa-angle-right"></span>Dogs [30]</a></li>
									<li><a href="#"><span class="icon fa fa-angle-right"></span>Cats [46]</a></li>
									<li><a href="#"><span class="icon fa fa-angle-right"></span>Birds [58]</a></li>
									<li><a href="#"><span class="icon fa fa-angle-right"></span>Cages [20]</a></li>
									<li><a href="#"><span class="icon fa fa-angle-right"></span>Foods [62]</a></li>
								</ul>
							</section>
							<section class="widget">
								<h3>Featured Products</h3>
								<ul class="list-unstyled feature-list">
									<li>
										<div class="img-holder">
											<a href="shop-detail.html"><img class="img-responsive" src="https://via.placeholder.com/70x70" alt="image"></a>
										</div>
										<div class="txt-holder">
											<ul class="list-unstyled rating-list">
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
											</ul>
											<h3><a href="shop-detail.html">Premier Pet+ for Dogs</a></h3>
											<span class="price">$30.00</span>
										</div>
									</li>
									<li>
										<div class="img-holder">
											<a href="shop-detail.html"><img class="img-responsive" src="https://via.placeholder.com/70x70" alt="image"></a>
										</div>
										<div class="txt-holder">
											<ul class="list-unstyled rating-list">
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
											</ul>
											<h3><a href="shop-detail.html">Nutri-Pooch Vitamin+</a></h3>
											<span class="price">$30.00</span>
										</div>
									</li>
									<li>
										<div class="img-holder">
											<a href="shop-detail.html"><img class="img-responsive" src="https://via.placeholder.com/70x70" alt="image"></a>
										</div>
										<div class="txt-holder">
											<ul class="list-unstyled rating-list">
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
												<li><a href="#" class="fa fa-star-o"></a></li>
											</ul>
											<h3><a href="shop-detail.html">Joint Support for Cats</a></h3>
											<span class="price">$30.00</span>
										</div>
									</li>
								</ul>
							</section>
							<section class="widget">
								<h3>Search Products</h3>
								<form class="search-form" action="#">
									<fieldset>
										<input class="form-control" placeholder="Search...." type="search">
										<button class="submit-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									</fieldset>
								</form>
							</section>
						</aside>
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