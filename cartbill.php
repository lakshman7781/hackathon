<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

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

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

</head>

<body style="background-color:#f2f2f4 !important;">
	<?php include "header.php"; ?>
	<div class="body">

		<div id="token-container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="card border-width-3 border-radius-0 border-color-success">
						<div class="card-body text-center">
							<p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success me-1"></i> Thank You. Your Order has been received.</p>
							<br>
							<p>Our Campus Online Team Shortly Reach out You</p>
						</div>

					</div>
					<?php
					// Include your connect.php file
					include 'connect.php';

					// Assuming you have established a database connection in connect.php

					// Perform the query to retrieve data
					$query = "SELECT orders.*, cart.*
          FROM orders
          JOIN cart ON orders.product_id = cart.productid";

					$result = mysqli_query($conn, $query);

					// Check if query was successful
					if (!$result) {
						die('Query failed: ' . mysqli_error($conn));
					}

					// Display the HTML structure with retrieved data
					?>

					<div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
						<?php
						// Loop through the result set
						while ($row = mysqli_fetch_assoc($result)) {
						?>
							<div class="text-center">
								<span>
									Payment ID <br>
									<strong class="text-color-dark"><?php echo $row['payment_id']; ?></strong>
								</span>
							</div>
							<div class="text-center mt-4 mt-md-0">
								<span>
									Registration Number <br>
									<strong class="text-color-dark"><?php echo $row['reg_no']; ?></strong>
								</span>
							</div>

							<div class="text-center mt-4 mt-md-0">
								<span>
									Orderd Date<br>
									<strong class="text-color-dark"><?php echo $row['added_date']; ?></strong>
								</span>
							</div>
							<div class="text-center mt-4 mt-md-0">
								<span>
									Payment Method <br>
									<strong class="text-color-dark"> Online Payment</strong>
								</span>
							</div>
						<?php
						}
						// Free result set
						mysqli_free_result($result);

						// Close connection
						mysqli_close($conn);
						?>
					</div>

					<div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
						<div class="card-body">
							<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
							<table class="shop_table cart-totals mb-0">
								<tbody>
									<tr>
										<td>
											<strong class="d-block text-color-dark line-height-1 font-weight-bold">Products<span class="product-qty"></span></strong>
										</td>
										<td class="text-end align-top">
											<span class="text-color-dark line-height-1 font-weight-bold">Amount</span>
										</td>
									</tr>
									<?php
									// Include your connect.php file
									include 'connect.php';

									// Execute the SQL query to retrieve product name and sale price
									$query = "SELECT seller.productName, seller.salePrice
                          FROM seller
                          JOIN orders ON orders.product_id = seller.productid";

									// Execute the query and handle errors
									$result = mysqli_query($conn, $query);
									if (!$result) {
										die('Query failed: ' . mysqli_error($conn));
									}

									// Check if any rows are returned
									if (mysqli_num_rows($result) > 0) {
										// Loop through the result set and retrieve product details
										while ($row = mysqli_fetch_assoc($result)) {
									?>
											<tr>
												<td>
													<strong class="d-block text-color-dark line-height-1 font-weight-semibold"><?php echo $row['productName']; ?><span class="product-qty">x1</span></strong>
													<span class="text-1">COLOR BLACK</span>
												</td>
												<td class="text-end align-top">
													<span class="amount font-weight-medium text-color-grey">₹<?php echo $row['salePrice']; ?></span>
												</td>
											</tr>
				
									<tr class="shipping">
										<td class="border-top-0">
											<strong class="text-color-dark">Shipping</strong>
										</td>
										<td class="border-top-0 text-end">
											<strong><span class="amount font-weight-medium">Free Shipping</span></strong>
										</td>
									</tr>
									<tr class="total">
										<td>
											<strong class="text-color-dark text-3-5">Total</strong>
										</td>
										<td class="text-end">
											<strong class="text-color-dark"><span class="amount text-color-dark text-5">₹<?php echo $row['salePrice']; ?></span></strong>
										</td>
									</tr>
									<?php
										}
									} else {
										echo "<tr><td colspan='2'>No records found.</td></tr>";
									}

									// Free result set
									mysqli_free_result($result);

									// Close connection
									mysqli_close($conn);
									?>
								</tbody>
							</table>
						</div>
					</div>


					<input type="submit" name="update" value="Print" class="btn btn-primary" style="width: 130px; margin-left:540px" onclick="downloadContent()">
				</div>

			</div>


		</div>


		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.shop.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<script>
			function downloadContent() {
				// Get the HTML content of the token-container
				var tokenContainerHTML = document.getElementById('token-container').outerHTML;
				// Create a new window to print the content
				var printWindow = window.open('', '', 'height=400,width=600');
				// Write the HTML content to the new window
				printWindow.document.write('<html><head><title>Print</title></head><body>' + tokenContainerHTML + '</body></html>');
				// Print the window
				printWindow.print();
				// Close the new window
				printWindow.close();
			}
		</script>
		<?php include 'footer.php'; ?>
</body>

</html>