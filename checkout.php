<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>

	<!-- Basic -->
	<meta charset="utf-8">


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
			width: 40%;
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
			width: 60%;
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
			margin-right: 20px;
			border-radius: 5px;

			margin-bottom: 20px;
			min-height: 565px;

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
<?php
// Retrieve totalSalePrice and productid from the URL
$totalSalePrice = $_GET["totalSalePrice"];
$productid = $_GET["productid"];

?>



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
				<div class="col-lg-4 position-relative">
					<div class="card border-width-3 border-radius-0 border-color-hover-dark" style="min-height: 450px; min-width: 410px;">

						<div class="card-body">
							<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
							<table class="shop_table cart-totals mb-3">
								<tbody>
									<!-- <tr>
										<td colspan="2" class="border-top-0">
											<strong class="text-color-dark">Product</strong>
										</td>
									</tr>
									<tr>
										<td>
											<strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
											<span class="text-1">COLOR BLACK</span>
										</td>
										<td class="text-end align-top">
											<span class="amount font-weight-medium text-color-grey">$15</span>
										</td>
									</tr>
									<tr>
										<td class="border-top-0 pt-0">
											<strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
											<span class="text-1">COLOR BLACK</span>
										</td>
										<td class="border-top-0 text-end align-top pt-0">
											<span class="amount font-weight-medium text-color-grey">$15</span>
										</td>
									</tr>
									<tr class="cart-subtotal">
										<td class="border-top-0">
											<strong class="text-color-dark">Subtotal</strong>
										</td>
										<td class="border-top-0 text-end">
											<strong><span class="amount font-weight-medium">$431</span></strong>
										</td>
									</tr> -->
									<!-- <tr class="shipping">
										<td colspan="2">
											<strong class="d-block text-color-dark mb-2">Shipping</strong>

											<div class="d-flex flex-column">
												<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method1">
													<input id="shipping_method1" type="radio" class="me-2" name="shipping_method" value="free" checked />
													Free Shipping
												</label>
												<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method2">
													<input id="shipping_method2" type="radio" class="me-2" name="shipping_method" value="local-pickup" />
													Local Pickup
												</label>
												<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method3">
													<input id="shipping_method3" type="radio" class="me-2" name="shipping_method" value="flat-rate" />
													Flat Rate: $5.00
												</label>
											</div>
										</td>
									</tr> -->

									<tr class="total">
										<td>
											<strong class="text-color-dark text-3-5">Total</strong>
										</td>
										<td class="text-end">
											<strong class="text-color-dark"><span class="amount text-color-dark text-5">₹
													<?php echo $totalSalePrice; ?>
												</span></strong>
										</td>

									</tr>
									<!-- <tr class="payment-methods">
										<td colspan="2">
											<strong class="d-block text-color-dark mb-2">Payment Methods</strong>

											<div class="d-flex flex-column">
												<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method1">
													<input id="payment_method1" type="radio" class="me-2" name="payment_method" value="cash-on-delivery" checked />
													Cash On Delivery
												</label>
												<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method2">
													<input id="payment_method2" type="radio" class="me-2" name="payment_method" value="paypal" />
													PayPal
												</label>
											</div>
										</td>
									</tr> -->
									<tr>
										<td colspan="2">
											Your personal data will be used to process your order, support your
											experience throughout this website, and for other purposes described in our
											privacy policy.
										</td>
									</tr>
								</tbody>
							</table>
							<a <?php $total = $totalSalePrice; ?> class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3 paynow">Place
								Order <i class="fas fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php
		// Include your connect.php file
		include('connect.php');

		// Assuming $_SESSION['idnum'] contains the registration number
		$idnum = $_SESSION['idnum'];

		$query = "SELECT *
          FROM users
          
          WHERE users.reg_no = '$idnum'";

		$result = $conn->query($query);
		$row = $result->fetch_assoc();

		// Assuming these fields exist in the result
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$reg_no = $row['reg_no'];
		$email = $row['email'];
		$phonenumber = $row['phonenumber']; // Get phone number from the joined result

		$conn->close();
		?>




		<div class="right-section">
			<div class="right-section-inner">

				<div role="main" class="main shop pb-4">
					<form role="form" class="needs-validation" method="post" action="">
						<div class="row" style="width: 700px;">
							<div class="col-lg-7 mb-4 mb-lg-0" style="width: 680px;">

								<h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Billing Details</h2>
								<div class="row">
									<div class="form-group col-md-6">
										<label class="form-label" style="text-align: left !important;">First Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="firstName" value="<?php echo $firstname; ?>" readonly />
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">Last Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="lastName" value="<?php echo $lastname; ?>" readonly />
									</div>
								</div>

								<div class="row">
									<div class="form-group col">
										<label class="form-label">Registration number<span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="companyName" value="<?php echo $reg_no; ?>" readonly />
									</div>
								</div>

								<div class="row">
									<div class="form-group col">
										<label class="form-label">Phone <span class="text-color-danger">*</span></label>
										<input type="number" class="form-control h-auto py-2" name="phone" value="<?php echo $phonenumber; ?>" readonly />
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label">Email Address <span class="text-color-danger">*</span></label>
										<input type="email" class="form-control h-auto py-2" name="email" value="<?php echo $email; ?>" readonly />
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col" style="background-color: white; padding:10px; margin:35px; margin-top:-5px;">
			<h4 class="font-weight-semibold text-4 mb-3" style="margin-left: 30px;">PEOPLE ALSO BOUGHT</h4>
			<hr class="mt-0">
			<div class="products row">
				<div class="col">
					<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

						<?php
						// Include the file to establish a database connection
						include 'connect.php';

						// Write your SQL query
						$sql = "SELECT * FROM seller";

						// Execute the query
						$result = mysqli_query($conn, $sql);

						// Check if there are any results
						if (mysqli_num_rows($result) > 0) {
							// Output data of each row
							while ($row = mysqli_fetch_assoc($result)) {
								// Output the HTML structure with product details
						?>
								<div class="col-12 col-sm-6 col-lg-3">
									<br>
									<div class="product mb-0">
										<div class="product-thumb-info border-0 mb-3">
											<div class="addtocart-btn-wrapper">
												<a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart" data-product-id="<?php echo $row['productid']; ?>">
													<i class="icons icon-bag"></i>
												</a>
											</div>

											<a href="product.php?productid=<?php echo $row['productid']; ?>">
												<div class="product-thumb-info-image">
													<img alt="" class="img-fluid" src="<?php echo $row['image']; ?>">
												</div>
											</a>
											<a href="product.php?productid=<?php echo $row['productid']; ?>" class=" text-uppercase font-weight-semibold text-2">
												QUICK VIEW
											</a>
										</div>
										<div class="d-flex justify-content-between">
											<div>
												<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1"><?php echo $row['Category']; ?></a>
												<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="#" class="text-color-dark text-color-hover-primary"><?php echo $row['productName']; ?></a></h3>
											</div>
											<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4 heart-icon" data-product-id="<?php echo $row['productid']; ?>"><i class="far fa-heart"></i></a>
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

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
				<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
				<script>
					$(document).ready(function() {
						$(".paynow").click(function(e) {
							e.preventDefault(); // Prevent default behavior of anchor tag click
							var amount = <?php echo $total; ?>;
							var productid = <?php echo $productid; ?>;
							var productname = "campus Ecommerce"; // Assuming this variable is defined elsewhere in your code
							var options = {
								"key": "rzp_live_2D4bAGktbYxm16",
								"amount": amount * 100,
								"name": "Campus Online",
								"description": productname,
								"image": "http://localhost/hackathon/img/Campus.png",
								"handler": function(response) {
									var paymentid = response.razorpay_payment_id;
									$.ajax({
										url: "payment-process.php",
										type: "POST",
										data: {
											product_id: productid,
											payment_id: paymentid
										}, // Replace 'your_product_id' with the actual product ID
										success: function(finalresponse) {
											if (finalresponse == 'done') {
												window.location.href = "http://localhost/hackathon/success.php";
											} else {
												alert('Please check console.log to find error');
												console.log(finalresponse);
											}
										}
									});
								},
								"theme": {
									"color": "#3399cc"
								}
							};
							var rzp1 = new Razorpay(options);
							rzp1.open();
						});
					});
				</script>
				<!-- 
					// Assuming you have a variable selectedProductCount that represents the count
const selectedProductCount = 1;

// Update the count badge text
document.querySelector('.count-badge').textContent = selectedProductCount.toString(); -->
			</div>
		</div>
		<?php include 'footer.php'; ?>
</body>

</html>