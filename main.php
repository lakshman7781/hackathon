<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Style Switcher | Porto - Multipurpose Website Template</title>

	<meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Porto - Multipurpose Website Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/latest.css">

</head>

<body  style="background-color:#f2f2f4 !important;">
	<?php include "header.php"; ?>



	<div class="containeeer">
		<div class="categorry" id="domain1">
			<img src="img/1.svg" style="height: 150px; width:575px">
			
		</div>

		<div class="categorry">
			<img src="img/2.svg" style="height: 150px; width:575px">
			
		</div>
	</div>

	<script>
		// Define the scrollToMain function
		function scrollToMain() {
			const mainSection = document.getElementById('mainSection');
			if (mainSection) {
				const offset = mainSection.getBoundingClientRect().top + window.scrollY -20;
				window.scrollTo({
					top: offset,
					behavior: 'smooth'
				});
			}
		}

		// Attach the scrollToMain function to the click event of the "Ecommerce" word
		var domain1Element = document.getElementById('domain1');

		if (domain1Element) {
			domain1Element.addEventListener('click', scrollToMain);
		}
	</script>

	<div role="main" class="main">

		<div class="carousel-container" id="mainSection">
			<div class="carousel" id="carousel">
				<div class="panel">
					<img src="img/13.png" alt="Image 1">
				</div>
				<div class="panel">
				<img src="img/14.png" alt="Image 2">
				</div>
				<div class="panel">
				<img src="img/13.png" alt="Image 3">
				</div>
				<div class="panel">
				<img src="img/14.png" alt="Image 4">
				</div>
			</div>
			<button class="prev" onclick="changePanel(-1)">&#8249;</button>
			<button class="next" onclick="changePanel(1)">&#8250;</button>
		</div>
	</div>


	<div class="containeer">
		<div class="category">
			<a href="categoryproducts.php">
				<img src="img/1.png">
				<h6>Stationary</h6>
			</a>
		</div>
		<div class="category">
		<a href="categoryproducts.php">
			<img src="img/2.png">
			<h6>Food</h6>
			</a>
		</div>
		<!-- Add similar blocks for other categories -->
		<div class="category">
		<a href="categoryproducts.php">
			<img src="img/3.png">
			<h6>Fashion</h6>
			</a>
		</div>
		<div class="category">
		<a href="categoryproducts.php">
			<img src="img/4.png">
			
			<h6>Electronics & Mobile</h6>
			</a>
		</div>
		<div class="category">
		<a href="categoryproducts.php">
			<img src="img/5.png">
			
			<h6>Notes & Records</h6>
			</a>
		</div>
		<div class="category">
		<a href="categoryproducts.php">
			<img src="crystal-vik-image.jpg">
			
			<h6>Others</h6>
			</a>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center py-2">

		</div>
	</div>
	</div>
	<div role="main" class="main shop pt-4">

		<div class="containner">
			<div class="cateegory">
			<div class="top-deals-container">
  <h1 class="top-deals-heading">Top Deals</h1>
  <!-- <a href="https://api.whatsapp.com/send?phone=9494410554" target="_blank">

    Chat with Seller on WhatsApp
</a>
<a href="tel:+918712131582">Call Seller</a> -->
  <div class="next-btn">Next &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
</svg></div>
</div>

			
			<div class="masonry-loader masonry-loader-showing">
				<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

				<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="product-thumb-info-badges-wrapper">
									<span class="badge badge-ecommerce text-bg-success">NEW</span>

								</div>

								<div class="addtocart-btn-wrapper">
									<a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="#">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">electronics</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Photo Camera</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
								<span class="amount">$59,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="product-thumb-info-badges-wrapper">
									<span class="badge badge-ecommerce text-bg-success">NEW</span>
									<span class="badge badge-ecommerce text-bg-danger">27% OFF</span>
								</div>

								<div class="addtocart-btn-wrapper">
									<a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="#">
									<div class="product-thumb-info-image product-thumb-info-image-effect">
										<img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">

										<img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Porto Headphone</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
								<span class="amount">$99,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="#">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Golf Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$29,00</span>
								<span class="amount">$19,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="product-thumb-info-badges-wrapper">

									<span class="badge badge-ecommerce text-bg-danger">27% OFF</span>
								</div>

								<div class="addtocart-btn-wrapper">
									<a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<div class="countdown-offer-wrapper">
									<div class="text-color-light negative-ls-05 text-2" data-plugin-countdown data-plugin-options="{'textDay': 'DAYS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 'SEC', 'date': '2025/01/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFFER ENDS IN </span>', 'textDay': 'DAYS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}"></div>
								</div>

								<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="#">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Workout</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$40,00</span>
								<span class="amount">$30,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="#">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Luxury Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
								<span class="amount">$79,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="#">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-5.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Styled Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
								<span class="amount">$119,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="#">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">hat</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Blue Hat</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
								<span class="amount">$289,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
								<span class="amount">$79,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
								<span class="amount">$79,00</span>
							</p>
						</div>
					</div>


					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
								<span class="amount">$79,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
								<span class="amount">$79,00</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3">
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">

								<div class="addtocart-btn-wrapper">
									<a href="" class="text-decoration-none addtocart-btn" title="Add to Cart">
										<i class="icons icon-bag"></i>
									</a>
								</div>

								<a href="" class="quick-view text-uppercase font-weight-semibold text-2">
									QUICK VIEW
								</a>
								<a href="">
									<div class="product-thumb-info-image">
										<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

									</div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
								</div>
								<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
							</div>
							<p class="price text-5 mb-3">
								<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
								<span class="amount">$79,00</span>
							</p>
						</div>
					</div>

				</div>
				</div>

			</div>
		</div>

		<script>
			let currentPanel = 1;
			const panelWidth = 1200; // Width of each panel
			const totalPanels = 4; // Total number of panels
			const autoScrollInterval = 3000; // Interval for automatic scrolling in milliseconds (adjust as needed)

			function changePanel(direction) {
				currentPanel += direction;

				if (currentPanel < 1) {
					currentPanel = totalPanels;
				} else if (currentPanel > totalPanels) {
					currentPanel = 1;
				}

				updateCarousel();
			}

			function updateCarousel() {
				const carousel = document.getElementById('carousel');
				const panelContainer = document.querySelector('.carousel-container');
				const translateValue = -panelWidth * (currentPanel - 1);
				carousel.style.transform = `translateX(${translateValue}px)`;
				panelContainer.style.width = `${panelWidth}px`;
			}

			function autoScroll() {
				changePanel(1); // Automatically move to the next panel
			}

			// Set up automatic scrolling
			const autoScrollIntervalId = setInterval(autoScroll, autoScrollInterval);

			// Stop automatic scrolling when user interacts with the carousel
			document.querySelector('.carousel-container').addEventListener('mouseenter', () => {
				clearInterval(autoScrollIntervalId);
			});

			// Resume automatic scrolling when user stops interacting with the carousel
			document.querySelector('.carousel-container').addEventListener('mouseleave', () => {
				setInterval(autoScroll, autoScrollInterval);
			});
		</script>


		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>
		<script src="vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
		<script src="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
		<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.shop.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<script>
			(function($) {

				'use strict';

				$('.open-style-switcher').on('mousedown', function(e) {
					e.preventDefault();
					$('.style-switcher-open-loader').trigger('click');
					return false;
				});

			}).apply(this, [jQuery]);
		</script>
		<?php include "footer.php"; ?>
</body>

</html>