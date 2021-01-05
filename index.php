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
			<section class="main-slider">
				<div class="slide bg-full text-center overlay" style="background-image:url(images/main.jpg);">
					<div class="caption">
						<h1>We will take care of <br class="hidden-xs">your pets</h1>
						<a href="contact-us.php" class="btn-primary text-uppercase text-center lg-round">contact us</a>
					</div>
				</div>
			</section>
			<section class="abt-sec container">
				<div class="row">
					<div class="col-xs-12 col-sm-7">
						<header class="header text-center">
							<h2 class="heading text-uppercase">welcome to Pet Bazaar</h2>
							<span class="icon"><i class="icon-bone"></i></span>
							<p class="text-center">It is a long established fact that a reader will be distracted by the readable<br class="hidden-xs"> content of a page when looking at its layout the point of using Lorem Ipsum is that it<br class="hidden-xs">  has a more-or-less normal distribution of letters as opposed to using content here <br class="hidden-xs"> its making it look like readable.</p>
						</header>
						<ul class="list-unstyled icon-list text-center">
							<li><span class="icon round"><i class="icon-money"></i></span><h3 class="heading2">Lowest Price</h3></li>
							<li><span class="icon round"><i class="icon-atom"></i></span><h3 class="heading2">Healthy Pets</h3></li>
							<li><span class="icon round"><i class="icon-smile"></i></span><h3 class="heading2">Happy People</h3></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-5">
						<div class="img-holder"><img src="images/w1.jpg" alt="pet-image" class="img-responsive"></div>
					</div>
				</div>
			</section>
			<section class="services-sec bg-full" style="background-image:url(images/main.jpg);">
				<div class="container">
					<div class="row">
						<header class="col-xs-12 header text-center">
							<h2 class="heading text-uppercase">what we do</h2>
							<span class="icon"><i class="icon-bone"></i></span>
						</header>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="images/s15.jpg" alt="Pet Adoption" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Pet Adoption</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="images/s11.jpg" alt="Pet Grooming" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Pet Grooming</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="images/daycare.jpg" alt="Pet Daycare" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Pet Daycare</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="services-holder">
								<div class="img-holder"><img src="images/daytrain.jpg" alt="Dog Training" class="img-responsive"></div>
								<div class="txt-holder">
									<h3 class="heading2">Dog Training</h3>
									<p>It is a long established fact that a reader looking at its layout the point</p>
									<a class="read-more text-uppercase" href="javascript:void(0);">read more <i class="icon-next"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="shop-sec container">
				<div class="row">
					<div class="col-xs-12">
						<header class="header text-center">
							<h1 class="heading text-uppercase">petty shop</h1>
							<span class="icon"><i class="icon-bone"></i></span>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page <br class="hidden-xs"> when looking at its layout the point</p>
						</header>
						<ul class="list-unstyled shop-list text-center">
							<li><a href="#"><span class="icon"><i class="icon-cat"></i></span><h3>Cat</h3></a> </li>
							<li><a href="#"><span class="icon"><i class="icon-dog"></i></span><h3>Dog</h3></a> </li>
							<li><a href="#"><span class="icon"><i class="icon-dove"></i></span><h3>Birds</h3></a> </li>
							<li><a href="#"><span class="icon"><i class="icon-cage"></i></span><h3>Cages</h3></a> </li>
							<li><a href="#"><span class="icon"><i class="icon-food"></i></span><h3>Foods</h3></a> </li>
						</ul>
					</div>
				</di	v>
				<div class="row">
					<div class="col-xs-12">
						<div class="product-block">
							<div class="product-col">
								<div class="img-holder">
									<img src="images/s1.jpg" alt="dog-img" class="img-responsive">
									<span class="sale-item">Sale!</span>
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="descrip">
									<h3 class="heading2">German Shepherd</h3> 
									<span class="price">$1340.00</span>		
								</div>
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
							<div class="product-col">
								<div class="img-holder">
									<img src="images/s2.jpg" alt="dg-img" class="img-responsive">
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="descrip">
									<h3 class="heading2">Cat With Dog European</h3>
									<span class="price">$2080.00</span>
								</div> 
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
							<div class="product-col">
								<div class="img-holder">
									<img src="images/s3.jpg" alt="food-img" class="img-responsive">
									<span class="sale-item">Sale!</span>
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="descrip">
									<h3 class="heading2">Maxxiflex+</h3><span class="price">$2850.00</span>
								</div>
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
							<div class="product-col sold-item">
								<div class="img-holder">
									<img src="images/s4.jpg" alt="food-img" class="img-responsive">
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<strong class="text-uppercase">sold out!</strong>
								<div class="descrip">
									<h3 class="heading2">Premier Kittens+</h3><span class="price">$420.00</span>
								</div>
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
							<div class="product-col">
								<div class="img-holder">
									<img src="images/s5.jpg" alt="food-img" class="img-responsive">
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="descrip">
									<h3 class="heading2">Brown Kittenz</h3><span class="price">$300.00</span>
								</div>
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
							<div class="product-col">
								<div class="img-holder">
									<img src="images/s6.jpg" alt="food-img" class="img-responsive">
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<span class="sale-item">Sale!</span>
								</div>
								<div class="descrip">
									<h3 class="heading2">Puppies</h3><span class="price"><del class="discount-price">$45.00</del> $420.00</span>
								</div>
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
							<div class="product-col">
								<div class="img-holder">
									<img src="images/s9.jpg" alt="food-img" class="img-responsive">
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="descrip">
									<h3 class="heading2">Puriest Pet</h3><span class="price">$280.00</span>
								</div>
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
							<div class="product-col">
								<div class="img-holder">
									<img src="images/s14.jpg" alt="food-img" class="img-responsive">
									<div class="over-holder">
										<ul class="list-unstyled text-center share-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="icon-refresh"></i></a></li>
											<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="descrip">
									<h3 class="heading2">Mature Cat</h3><span class="price"><del class="discount-price">$620.00</del> $580.00</span>
								</div>
								<div class="text-center">
									<a href="cart.php" class="btn-primary lg-round text-uppercase"><i class="icon-cart"></i>add to cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="shop.php" class="btn-primary lg-round text-uppercase view-all">view all</a>
				</div>
			</section>
			<section class="feature-sec bg-full overlay" style="background: lightgrey;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="feature-col">
								<span class="icon round"><i class="icon-bookmark"></i></span>
								<h3 class="heading2">Quality &amp; Caring</h3>
								<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="feature-col">
								<span class="icon round"><i class="icon-shield"></i></span>
								<h3 class="heading2">Insured &amp; Checked</h3>
								<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content </p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="feature-col">
								<span class="icon round"><i class="icon-home"></i></span>
								<h3 class="heading2">Free Home Consulting</h3>
								<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content </p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="gallery-sec container">
				<div class="row">
					<header class="col-xs-12 header text-center">
						<h1 class="heading text-uppercase">our gallery</h1>
						<span class="icon"><i class="icon-bone"></i></span>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="image-holder overlay">
							<img src="images/s1.jpg" alt="image description" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay">
							<img src="images/s2.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay">
							<img src="images/s3.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay">
							<img src="images/s4.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay col-holder">
							<img src="images/s5.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonail-sec bg-full" style="background: grey;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="testimonail-slider">
								<blockquote class="slide text-center">
									<span class="icon"><i class="icon-comment"></i></span>
									<q>It is a long established fact that a reader will be distracted by the readable content of <br class="hidden-xs"> when looking at its layout the point of using Lorem Ipsum is that it has a more-or-less normal<br class="hidden-xs"> opposed to using content here its making it look like readable.</q>
									<cite class="name">- Junaid Ahmad -</cite>
								</blockquote>
								<blockquote class="slide text-center">
									<span class="icon"><i class="icon-comment"></i></span>
									<q>It is a long established fact that a reader will be distracted by the readable content of <br class="hidden-xs"> when looking at its layout the point of using Lorem Ipsum is that it has a more-or-less normal<br class="hidden-xs"> opposed to using content here its making it look like readable.</q>
									<cite class="name">- Ali hamza -</cite>
								</blockquote>
								<blockquote class="slide text-center">
									<span class="icon"><i class="icon-comment"></i></span>
									<q>It is a long established fact that a reader will be distracted by the readable content of <br class="hidden-xs"> when looking at its layout the point of using Lorem Ipsum is that it has a more-or-less normal<br class="hidden-xs"> opposed to using content here its making it look like readable.</q>
									<cite class="name">- Sheryar Ahmad -</cite>
								</blockquote>
							</div>
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