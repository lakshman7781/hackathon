<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['idnum'])) {
    // If not, redirect to another page
    header('Location: dumbindex.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta charset="utf-8">



	<title>Campus Online</title>

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
<style>
	/* Style the button that is used to open and close the collapsible content */
	.chat-icon {
		position: fixed;
		bottom: 20px;
		right: 20px;
		cursor: pointer;
		z-index: 1000;
	}
</style>

<body style="background-color:#f2f2f4 !important;">

	<?php include "header.php"; ?>



	<div id="testContainer"></div>



	<div class="containeeer">
		<div class="categorry" id="domain1">
			<img src="img/1.svg" style="height: 150px; width:575px">

		</div>

		<div class="categorry">
			<a href="eventshome.php">
				<img src="img/2.svg" style="height: 150px; width: 575px;">
			</a>
		</div>

	</div>

	<script>
		// Define the scrollToMain function
		function scrollToMain() {
			const mainSection = document.getElementById('mainSection');
			if (mainSection) {
				const offset = mainSection.getBoundingClientRect().top + window.scrollY - 20;
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
			<a href="stationary.php">
				<img src="img/1.png">
				<h6>Stationary</h6>
			</a>
		</div>
		<div class="category">
			<a href="food.php">
				<img src="img/2.png">
				<h6>Food</h6>
			</a>
		</div>
		<!-- Add similar blocks for other categories -->
		<div class="category">
			<a href="fashion.php">
				<img src="img/3.png">
				<h6>Fashion</h6>
			</a>
		</div>
		<div class="category">
			<a href="electronics.php">
				<img src="img/4.png">

				<h6>Electronics & Mobile</h6>
			</a>
		</div>
		<div class="category">
			<a href="textbooks.php">
				<img src="img/5.png">

				<h6>Notes & Records</h6>
			</a>
		</div>
		<div class="category">
			<a href="Xeorox.php">
				<img src="img/xerox.jpg" style="height:80px; width:80px;">

				<h6>Xerox</h6>
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

				<h1 class="top-deals-heading">Top Deals</h1>
				<!-- <a href="https://api.whatsapp.com/send?phone=9494410554" target="_blank">

    Chat with Seller on WhatsApp
</a>
<a href="tel:+918712131582">Call Seller</a> -->
				<button style="right:30px; top:720px;" class="next-btn">Next &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
						<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
					</svg></button>
			</div>


			<div class="masonry-loader masonry-loader-showing">
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
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
					<script>
						$(document).ready(function() {
							$('.addtocart-btn').click(function(e) {
								e.preventDefault();
								var productId = $(this).data('product-id');
								$.ajax({
									url: 'insertcart.php',
									method: 'POST',
									data: {
										productId: productId
									},
									success: function(response) {
                    // Create a success message element
                    var successMessage = $('<div/>', {
                        text: 'Product added to Cart successfully!',
                        class: 'success-message'
                    });
                    // Append the success message to the body
                    $('body').append(successMessage);
                    // Fade out the success message after a certain duration
                    setTimeout(function() {
                        successMessage.fadeOut('slow');
                    }, 2000);
                },
									error: function(xhr, status, error) {
										console.error(xhr.responseText);
									}
								});
							});
						});
					</script>
					<style>
						
						</style>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
					<script>
    $(document).ready(function() {
        $('.heart-icon').click(function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            $.ajax({
                url: 'insertwishlist.php', // URL of the PHP script that handles insertion
                method: 'POST',
                data: {
                    productId: productId
                }, // Data to send in the AJAX request
                success: function(response) {
                    // Create a success message element
                    var successMessage = $('<div/>', {
                        text: 'Product added to wishlist successfully!',
                        class: 'success-message'
                    });
                    // Append the success message to the body
                    $('body').append(successMessage);
                    // Fade out the success message after a certain duration
                    setTimeout(function() {
                        successMessage.fadeOut('slow');
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
<style>
    .success-message {
        position: fixed;
        top: 90px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 15px;
        border-radius: 5px;
        z-index: 9999;
    }
</style>





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
					<style>
						/* CSS for styling purposes */
						.chatcontainer {
							display: none;
							/* Hide the container by default */
							position: fixed;
							/* Make the container fixed */
							top: 163px;
							right: 60px;
							z-index: 1;
							width: 400px;
							height: 550px;
							border-radius: 5px;
						}

						.iframe-container {
							width: 400px;
							height: 550px;
							border: none;
							z-index: 1;
						}
					</style>


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


					<div class="chat-icon" onclick="toggleTestBot()">
						<img src="img/chatbot.gif" alt="Chat Icon" style="height: 75px; width:75px;">
					</div>

					<div class="chatcontainer" id="chatcontainer"></div>

					<script>
						// JavaScript function to toggle the visibility of the chat container
						function toggleTestBot() {
							var chatContainer = document.getElementById("chatcontainer");
							if (chatContainer.style.display === "none" || chatContainer.style.display === "") {
								// If container is hidden or not set, show it
								chatContainer.style.display = "block";
								// Create an iframe element
								var iframe = document.createElement('iframe');
								iframe.src = 'test.html';
								iframe.classList.add('iframe-container');
								// Append the iframe to the container
								chatContainer.appendChild(iframe);
							} else {
								// If container is visible, hide it
								chatContainer.style.display = "none";
								// Clear the content when hiding
								chatContainer.innerHTML = "";
							}
						}
					</script>
</body>

</html>