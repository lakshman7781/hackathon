<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

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

	<!-- latest css -->
	<link rel="stylesheet" href="css/latest.css">
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
			min-height: 450px;
			border-radius: 5px;
			margin-left: 30px;
		}

		.right-section {
			float: left;
			width: 70%;
			/* Takes up 2/3 of the available space */
			box-sizing: border-box;
			min-height: 570px;

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
			min-height: 570px;

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
	</style>
</head>

<body data-plugin-page-transition>

	<?php include 'header.php'; ?>
	<div class="body">
		<div class="left-section">
			<?php
			// Start or resume the session


			// Include the file to establish a database connection
			include 'connect.php';

			// Check if the session variable 'reg_no' is set
			if (isset($_SESSION['idnum'])) {
				// Sanitize the session variable to prevent SQL injection
				$reg_no = mysqli_real_escape_string($conn, $_SESSION['idnum']);

				// Fetch data from the users table based on the session variable 'reg_no'
				$sql = "SELECT * FROM users WHERE reg_no = '$reg_no'";

				// Execute the query
				$result = mysqli_query($conn, $sql);

				// Check if there are any results
				if (mysqli_num_rows($result) > 0) {
					// Output data of the user
					while ($row = mysqli_fetch_assoc($result)) {
						// Extract the first name from the user's name
						$fullName = explode(" ", $row['firstname']);
						$firstName = $fullName[0];
			?>
						<div class="left-section-top">
							<a href="img/12.png"> <img src="img/12.png" alt="12" width="100" height="100"> </a>
							Hello&nbsp;
							<h4> <?php echo $firstName; ?></h4>
						</div>
			<?php
					}
				} else {
					// If there are no results, display a message or take any other appropriate action
					echo "No user found.";
				}
			} else {
				// If the session variable 'reg_no' is not set, display a message or redirect to login page
				echo "Session variable 'reg_no' not set.";
			}

			// Close the database connection
			mysqli_close($conn);
			?>
			<div class="left-section-bottom">
				<ul class="profile-menu">


					<li class="">
						<a href="shop-cart.html">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
								<path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
							</svg>
							&nbsp; Orders
						</a>
					</li>
					<li class="">
						<a href="shop-cart.html">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
								<path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
							</svg>
							&nbsp; Profile
						</a>
					</li>

					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
								<path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
							</svg>
							&nbsp; Wishlist
						</a>
					</li>

					<li class="">
						<a href="cart.php">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
								<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
							</svg>

							&nbsp; Cart
						</a>


					</li>
					<!-- <li class="">
						<a href="shop-cart.html">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
								<path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
							</svg>
							&nbsp; Coupons
						</a>
					</li> -->

				</ul>

			</div>
		</div>
	</div>

	<div class="right-section">
		<div class="right-section-inner">

			<div role="main" class="main shop pb-4">
				<h4 style="text-align: center; color:#0088cc">Your Wishlist</h4>

				<div class="container">


					<div class="row pb-4 mb-5">
						<div class="col-lg-8 mb-5 mb-lg-0">
							<form method="post" action="">
								<div class="">
									<table class="shop_table cart">
										<thead>
											<tr class="text-color-dark">
												<th class="product-thumbnail" width="15%">
													&nbsp;
												</th>
												<th class="product-name text-uppercase" width="30%">
													Product
												</th>
												<th class="product-price text-uppercase" width="15%">
													Price
												</th>

												<th class="product-subtotal text-uppercase text-end" width="20%">
													Subtotal
												</th>
												<th class="product-remove text-uppercase text-end" width="20%">
													Remove
												</th>
												<th class="product-add text-uppercase text-end" width="60%">
													Add.Cart
												</th>


											</tr>
										</thead>
										<tbody>

											<?php
											// Include the file to establish a database connection
											include 'connect.php';

											// Fetch data from the seller table based on matches with the wishlist table
											$sql = "SELECT seller.productid, seller.productName,seller.image, seller.salePrice
                                            FROM seller
                                              JOIN wishlist ON seller.productid = wishlist.productid where wishlist.reg_no = '$_SESSION[idnum]'";

											// Execute the query
											$result = mysqli_query($conn, $sql);

											// Check if there are any results
											if (mysqli_num_rows($result) > 0) {
												// Output data of each row
												while ($row = mysqli_fetch_assoc($result)) {
													// Output the HTML structure with product details
											?>
													<tr class="cart_table_item">
														<td class="product-thumbnail" style="height: 100px; width: 100px !important;">
															<div class="product-thumbnail-wrapper" style="height: 100px; width: 100px !important;">

																<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="<?php echo $row['productName']; ?>">
																	<img width="250" height="250" alt="<?php echo $row['productName']; ?>" class="img-fluid" src="<?php echo $row['image']; ?>">
																</a>
															</div>
														</td>
														<td class="product-name">
															<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none"><?php echo $row['productName']; ?></a>
														</td>
														<td class="product-price">
															<span class="amount font-weight-medium text-color-grey">₹<?php echo $row['salePrice']; ?></span>
														</td>

														<td class="product-subtotal text-end">
															<span class="amount text-color-dark font-weight-bold text-4">₹<?php echo $row['salePrice']; ?></span>
														</td>
														<td class="product-remove text-end">
															<a href="#" class="dustbin-button" title="Delete Product" data-product-id="<?php echo $row['productid']; ?>">
																<i class="fas fa-trash"></i>
															</a>
														</td>
														<td class="product-add-to-cart text-end">
															<a href="#" class="cart-button" title="Add to Cart" data-product-id="<?php echo $row['productid']; ?>">
																<i class="fas fa-cart-plus"></i>
															</a>
														</td>


													</tr>
											<?php
												}
											} else {
												// If there are no results, you can display a message or take any other appropriate action
												echo "0 results";
											}



											// Close the database connection
											mysqli_close($conn);
											?>
                                             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
											<script>
												$(document).ready(function() {
													$('.cart-button').click(function(e) {
														e.preventDefault();
														var productId = $(this).data('product-id');
														$.ajax({
															url: 'insertcart.php',
															method: 'POST',
															data: {
																productId: productId
															},
															success: function(response) {


																// Check if the page has been reloaded already
																if (!sessionStorage.getItem('reloaded')) {
																	// Set the flag in sessionStorage to indicate that the page has been reloaded
																	sessionStorage.setItem('reloaded', 'true');
																	// Reload the page
																	window.location.reload();
																} else {
																	// Remove the 'reloaded' flag from sessionStorage
																	sessionStorage.removeItem('reloaded');
																}

															},
															error: function(xhr, status, error) {
																console.error(xhr.responseText);
															}
														});
													});
												});
											</script>
											
											<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
											<script>
												$(document).ready(function() {
													$('.dustbin-button').click(function(e) {
														e.preventDefault();
														var productId = $(this).data('product-id');
														$.ajax({
															url: 'removewishlist.php',
															method: 'POST',
															data: {
																productId: productId
															},
															success: function(response) {


																// Check if the page has been reloaded already
																if (!sessionStorage.getItem('reloaded')) {
																	// Set the flag in sessionStorage to indicate that the page has been reloaded
																	sessionStorage.setItem('reloaded', 'true');
																	// Reload the page
																	window.location.reload();
																} else {
																	// Remove the 'reloaded' flag from sessionStorage
																	sessionStorage.removeItem('reloaded');
																}

															},
															error: function(xhr, status, error) {
																console.error(xhr.responseText);
															}
														});
													});
												});
											</script>




										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
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
	<!-- 
					// Assuming you have a variable selectedProductCount that represents the count
const selectedProductCount = 1;

// Update the count badge text
document.querySelector('.count-badge').textContent = selectedProductCount.toString(); -->
	<?php include 'footer.php'; ?>
</body>

</html>