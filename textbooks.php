<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Campus Online</title>

	<meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Porto - Multipurpose Website Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" href="vendor/bootstrap-star-rating/css/star-rating.min.css">
	<link rel="stylesheet" href="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<style>
		body::after {
			content: "";
			display: table;
			clear: both;
			background-color: lightgreen;

		}

		.left-section {
			float: left;
			width: 30%;
			/* Takes up 1/3 of the available space */
			box-sizing: border-box;

		}

		.left-section-top {
			background-color: white;
			color: black;
			text-align: center;
			padding: 20px;
			margin: 5px;
			min-height: 40px;
			max-height: 70px;
			line-height: 70px;
			/* Set line-height equal to max-height to vertically center text */
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 5px;
			margin-left: 30px;

		}

		.left-section-top img {
			vertical-align: middle;
			/* Vertically center the image */
			/* Adjust margin as needed */
			margin-left: -70px;
			/* Adjust margin as needed to move the image slightly to the left */
		}

		.left-section-top h4 {
			margin: 0;
			color: black;
			/* Remove default margin for h1 */
		}

		.left-section-bottom {
			background-color: white;
			color: white;
			text-align: center;
			padding: 20px;
			margin: 5px;
			min-height: 300px;
			border-radius: 5px;
			margin-left: 30px;
		}

		.right-section {
			float: left;
			width: 70%;
			/* Takes up 2/3 of the available space */
			box-sizing: border-box;
		}

		.right-section-inner {
			background-color: white;
			/* Adjust the color as needed */
			color: black;
			/* Set the text color to be visible */
			text-align: center;
			/* Center the text horizontally */
			padding: 20px;
			margin: 5px;
			margin-right: 200px;
			border-radius: 5px;
			margin-right: 40px;
			margin-bottom: 20px;
		}


		.profile-menu {
			list-style: none;
			padding: 10px;
			margin: 20px;
			margin-right: 30px;
		}

		.profile-menu li {
			margin-bottom: 20px;
			margin-top: 20px;
		}

		.profile-menu a {
			text-decoration: none !important;
			/* Added !important */
			color: #0088cc;
			display: flex;
			/* Use flex to align icon and text horizontally */
			align-items: center;
			/* Center items vertically */
			padding: 10px;
			border-radius: 5px;
			transition: background-color 0.3s;
			font-size: larger;
		}

		.profile-menu a svg {
			margin-right: 10px;
			/* Add margin to separate icon from text */
		}

		.profile-menu a:hover {
			background-color: #0088cc;
			color: white;

			text-decoration: none !important;
			/* Added !important */
		}

		.nav-link {
			text-decoration: none !important;
			align-items: center;
			padding: 10px;
			margin-bottom: 10px;
			margin-top: 10px;
		}
	</style>
</head>

<body data-plugin-page-transition>

	<?php include 'header.php'; ?>
	<div class="body">
		<div class="left-section">

			<div class="left-section-bottom">

				<aside class="sidebar">

					<h5 class="font-weight-semi-bold pt-3" style="width: 100%;">Categories</h5>
					<ul class="nav nav-list flex-column">
						<li class="nav-item"><a class="nav-link" href="textbooks.php">Books</a></li>
						<li class="nav-item"><a class="nav-link" href="electronics.php">Electronics/Mobile</a></li>
						<li class="nav-item"><a class="nav-link" href="stationary.php">Stationary</a></li>
						<li class="nav-item"><a class="nav-link" href="food.php">Food</a></li>
						<li class="nav-item"><a class="nav-link" href="Xeorox.php">Xerox</a></li>
					</ul>

			</div>

		</div>
	</div>
	</div>

	<div class="right-section">
		<div class="right-section-inner">

			<div role="main" class="main shop pb-4">
				<h4 style="text-align: center; color:#0088cc">NoteBooks</h4>



				<div class="masonry-loader masonry-loader-showing">
					<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">


						<?php
						// Include the file to establish a database connection
						include 'connect.php';

						// Write your SQL query
						$sql = "SELECT * FROM seller where Category='Books/Records'";
						// Execute the query
						$result = mysqli_query($conn, $sql);

						// Check if there are any results
						if (mysqli_num_rows($result) > 0) {
							// Output data of each row
							while ($row = mysqli_fetch_assoc($result)) {
								// Output the HTML structure with product details
						?>
								<div class="col-12 col-sm-6 col-lg-3">
									<div class="product mb-0">
										<div class="product-thumb-info border-0 mb-3">

											<div class="addtocart-btn-wrapper">
												<a href="" class="text-decoration-none addtocart-btn" title="Add to Cart">
													<i class="icons icon-bag"></i>
												</a>
											</div>

											<a href="product.php?productid=<?php echo $row['productid']; ?>" class=" text-uppercase font-weight-semibold text-2">
											QUICK VIEW
										</a>
											<a href="">
												<div class="product-thumb-info-image">
													<img alt="" class="img-fluid" src="<?php echo $row['image']; ?>">
												</div>
											</a>
										</div>
										<div class="d-flex justify-content-between">
											<div>
												<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1"><?php echo $row['Category']; ?></a>
												<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary"><?php echo $row['productName']; ?></a></h3>
											</div>
											<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
										</div>

										<p class="price text-5 mb-3">
											<span class="sale text-color-dark font-weight-semi-bold">₹<?php echo $row['salePrice']; ?></span>
											<span class="amount">₹<?php echo $row['regularPrice']; ?></span>
										</p>
									</div>
								</div>
						<?php
							}
						} else {
							echo "0 results";
						}

						// Close the database connection
						mysqli_close($conn);
						?>

					</div>
					<div class="row mt-4">
						<div class="col">
							<ul class="pagination float-end">
								<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	</div>




	</div>

	<?php include 'footer.php'; ?>
	</div>

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

</body>

</html>