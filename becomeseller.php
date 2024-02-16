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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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

		.poster1 {
			background-image: url('img/2.svg');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			height: 150px;
			width: 100%;
			margin-top: 20px;

		}

		.contentnew {

			color: black;
			text-align: center;
			margin-top: -29px;

			height: 250px;


		}

		.form-check-label {
			cursor: pointer;
		}

		.modal-content {
			background-color: #ffffff;
		}

		.modal-header {
			border-bottom: none;
		}

		.modal-title {
			font-size: 1.5rem;
		}

		.modal-body {
			font-size: 1rem;
		}

		.btn-primary {
			background-color: #007bff;
			border-color: #007bff;
		}

		.btn-primary:hover {
			background-color: #0056b3;
			border-color: #0056b3;
		}
	</style>
</head>

<body data-plugin-page-transition>

	<?php include 'header.php'; ?>
	<?php include  'connect.php'; ?>
	<div class="body">
		<div class="left-section">
			<div class="left-section-top">
				<a href="img/12.png"> <img src="img/12.png" alt="12" width="100" height="100"> </a>
				Hello &nbsp;
				<h4>Left Top</h4>
			</div>
			<div class="left-section-bottom">
				<ul class="profile-menu">

					<li class="">
						<a href="#" id="generalLink">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
								<path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
							</svg>
							&nbsp;General
						</a>
					</li>


					<li class="">
						<a href="#" id="addproduct">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
								<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
							</svg>
							&nbsp; Add Products
						</a>
					</li>

					<li class="">
						<a href="#" id="sellerorder">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
								<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
							</svg>
							&nbsp; SellerOrders
						</a>
					</li>


				</ul>

			</div>
		</div>
	</div>

	<div class="right-section">
		<div class="right-section-inner">

			<div role="main" class="main shop pb-4">
				<!-- <h4 style="text-align: center; color:#0088cc" >Become a Seller</h4> -->
				<div class="poster1">

				</div>

				<div class="alert alert-warning alert-dismissible" role="alert" style="margin-top: 10px;">
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					<strong>Alert!</strong> You Need Some More Authentication to make u an Seller
				</div>
				<div class="row">
					<h3 style="text-align: left; color:#0088cc; margin-top: 20px; text-transform:none">Simple Steps to Sell Ur Products</h3>
					<div class="col-md-4">
						<div class="card flip-card flip-card-3d text-center rounded-0">
							<div class="flip-front p-5" style="height: 250px;">
								<div class="flip-content">
									<div class="contentnew">
										<strong style="font-size:xx-large; color:black; margin-top:8px">1</strong>
										<h4 style="font-size: large; color:#0088cc;  margin-bottom:-6px;">FIRST STEP</h4>
										<p>You must first register on CampusOnline in order to sell goods there.  </p>
									</div>
								</div>
							</div>
							<div class="flip-back d-flex align-items-center p-5" style="color:black; background-size: cover; background-position: center; height:250px">
								<div class="flip-content my-4">

									<p class="font-weight-light"></p>
									<!-- <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold"></a> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card flip-card flip-card-3d text-center rounded-0">
							<div class="flip-front p-5" style="height: 250px;">
								<div class="flip-content">
									<div class="contentnew">
										<strong style="font-size:xx-large; color:black; margin-top:8px">2</strong>
										<h4 style="font-size: large; color:#0088cc;  margin-bottom:-6px;">SECOND STEP</h4>
										<p>Go to the "Add Product" section located on the left sidebar if you have already registered.  </p>
									</div>
								</div>
							</div>
							<div class="flip-back d-flex align-items-center p-5" style="color:black; background-size: cover; background-position: center; height:250px">
								<div class="flip-content my-4">

									<p class="font-weight-light"></p>
									<!-- <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold"></a> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card flip-card flip-card-3d text-center rounded-0">
							<div class="flip-front p-5" style="height: 250px;">
								<div class="flip-content">
									<div class="contentnew">
										<strong style="font-size:xx-large; color:black; margin-top:8px">3</strong>
										<h4 style="font-size: large; color:#0088cc;  margin-bottom:-6px;">THIRD STEP</h4>
										<p>Fill up the product details, image, price, inventory, and attributes in the "Add Product" area.</p>
									</div>
								</div>
							</div>
							<div class="flip-back d-flex align-items-center p-5" style="color:black; background-size: cover; background-position: center; height:250px">
								<div class="flip-content my-4">

									<p class="font-weight-light"></p>
									<!-- <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold"></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<!-- <div class="row">
    <div class="col-md-6 mb-3 mt-3">
        <h3 style="text-align: left; color: #0088cc; text-transform: none; margin: bottom -10px !important;">Apply For Your SellerID</h3> <p style="text-align: left; color: red; text-transform: none;">If You had already applied Ignore it. </p>
    </div>
    <div class="col-md-6 mb-3 mt-3">
       
    </div>
</div>

				
				<form id="myForm">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">First name</label>
                <input type="text" class="form-control" id="validationDefault01" value="" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault02">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" value="" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Email</label>
                <input type="email" class="form-control" id="validationDefault03" required>
            </div>

			
			<div class="col-md-3 mb-3">
				<label for="validationDefault05">Phone Number</label>
				<input type="text" class="form-control" id="validationDefault05" required>
			</div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault04">Academic Year</label>
                <select class="form-select form-control" id="validationDefault04" required>
                    <option selected disabled value="">1 Year</option>
                    <option>2 Year</option>
					<option>3 Year</option>
					<option>4 Year</option>
                </select>
            </div>
			<div class="col-md-6 mb-3">
                <label for="validationDefault03">RegisterNumber</label>
                <input type="text" class="form-control" id="validationDefault05" required>
            </div>
           
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" style="text-align:left !important; cursor: pointer;" for="invalidCheck2" id="termsLabel" data-toggle="modal" data-target="#termsModal">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="btn btn-primary" type="submit">Submit form</div>
    </form>

    
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="termsModalLabel">Terms and Conditions</p>
                    <div type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                   
                    This is an example of terms and conditions.
                </div>
                <div class="modal-footer">
                    <div type="button" class="btn btn-secondary" data-dismiss="modal">Close</div>
                </div>
            </div>
        </div>
    </div>
</div> -->

				<!-- Bootstrap JS and Popper.js -->
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
			</div>
		</div>
	</div>
	</div>


	</div>
	</div>





	<!-- end: page -->

	</div>
	<script>
		// Store the original content when the page loads
		var originalContent = document.querySelector('.right-section-inner').innerHTML;

		document.getElementById('addproduct').addEventListener('click', function() {
			var rightSectionInner = document.querySelector('.right-section-inner');

			// Modify the content dynamically using insertAdjacentHTML
			rightSectionInner.innerHTML = `
		<style>
		/* Apply basic styling to form */
.ecommerce-form {
    max-width: 800px;
    margin: auto;
}

/* Style the card sections */
.card-modern {
    margin-bottom: 20px;
}

/* Style form labels */
.control-label {
    font-weight: bold;
}

/* Style form inputs and textareas */
.form-control-modern {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;	
    border-radius: 4px;
}

/* Style submit and cancel buttons */
.submitt-button,
.cancel-button,
.delete-button {
    display: inline-block;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.submitt-button {
    background-color: #007bff;
    color: #fff;
}

.cancel-button {
    background-color: #f8f9fa;
    border: 1px solid #ccc;
    color: #343a40;
}

.delete-button {
    background-color: #dc3545;
    color: #fff;
}

/* Style checkbox and radio buttons */
.checkbox {
    padding-top: 5px;
}

/* Style the dropzone container */
#dropzone-form-image {
    border: 2px dashed #ccc;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    background-color: #f8f9fa;
    color: #495057;
}

/* Style the tabs */
.tabs {
	shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 15px;
    border-radius: 5px;
	cursor: pointer;
}
/* Add hover effect for Price and Inventory tabs */
.tabs .nav-link:hover {
    background-color: #e0e0e0; /* Change background color on hover */
    /* You can add other styles for the hover effect */
}

/* Optionally, you can add a transition for a smoother effect */
.tabs .nav-link {
    transition: background-color 0.3s ease;
}

/* Add hover effect for Price and Inventory tabs */
.tabs .nav-link:hover {
    background-color: #e0e0e0; /* Change background color on hover */
    /* You can add other styles for the hover effect */
}

/* Optionally, you can add a transition for a smoother effect */
.tabs .nav-link {
    transition: background-color 0.3s ease;
}

/* Style active tab */
.tabs .nav-link.active {
    background-color: #0088cc;
    color: #fff;
	margin:10px;
	border-radius: 5px;
	
}

/* Style attribute rows */
.ecommerce-attribute-row {
    margin-bottom: 20px;
}

/* Style attribute remove link */
.ecommerce-attribute-remove {
    color: #dc3545;
    cursor: pointer;
}

/* Style add new attribute button */
.ecommerce-attribute-add-new {
    background-color: #28a745;
    color: #fff;
    padding: 8px 15px;
    border-radius: 4px;
    text-decoration: none;
    cursor: pointer;
}

/* Responsive styles for small screens */
@media (max-width: 576px) {
    .col-lg-2-5,
    .col-lg-3-5,
    .col-xl-1-5,
    .col-xl-4-5 {
        width: 100%;
        margin-bottom: 20px;
    }
}
#dropzone-form-image input[type="file"] {
    display: none; /* Hide the default file input */
}

</style>
<form class="#" action=" " method="post" enctype="multipart/form-data">
  
							<div class="row mt-2">
								<div class="col">
									<section class="card card-modern card-big-info">
										<div class="card-body" style="border: 2px solid #666; border-radius:5px;">
											<div class="row">
												<div class="col-lg-2-5 col-xl-1-5">
													<i class="card-big-info-icon bx bx-box"></i>
													<h2 class="card-big-info-title">Product Info</h2>
													<p class="card-big-info-desc">Add here the product description with all details and necessary information.</p>
												</div>
												<div class="col-lg-3-5 col-xl-4-5">
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Product Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="productName" value="" required />
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Product Description</label>
														<div class="col-lg-7 col-xl-6">
															<textarea class="form-control form-control-modern" name="productDescription" rows="6" required></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
    <div class="col">
        <section class="card card-modern card-big-info">
            <div class="card-body" style="border: 2px solid #666; border-radius:5px;">
                <div class="row">
                    <div class="col-lg-2-5 col-xl-1-5">
                        <i class="card-big-info-icon bx bx-camera"></i>
                        <h2 class="card-big-info-title">Product Image</h2>
                        <p class="card-big-info-desc">Upload your Product image. You can add multiple images</p>
                    </div>
                    <div class="col-lg-3-5 col-xl-4-5">
                        <div class="form-group row align-items-center">
                            <div class="col">
                                <div id="dropzone-form-image" class="dropzone-modern dz-square">
                                    <span class="dropzone-upload-message text-center">
                                        <i class="bx bxs-cloud-upload"></i>
                                        <label for="file-upload" class="text-color-primary"><b class="text-color-primary">Drag/Upload</b> your images here.</label>
                                        <input type="file" id="file-upload" name="productimage" class="text-color-primary" required onchange="previewImage(event)" />
                                    </span>
                                    <div id="image-preview" class="text-center mt-3">
                                        <img id="preview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 200px;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
							<div class="row">
								<div class="col">
									<section class="card card-modern card-big-info" >
										<div class="card-body" style="border: 2px solid #666; border-radius:5px;">
											<div class="tabs-modern row" >
												<div class="col-lg-2-5 col-xl-1-5" style="background-color:none">
													<div class="nav flex-column tabs" id="tab" role="tablist" aria-orientation="vertical">
											      		<a class="nav-link active" id="price-tab" data-bs-toggle="pill" data-bs-target="#price" role="tab" aria-controls="price" aria-selected="true">Price</a>
											      		<a class="nav-link" id="inventory-tab" data-bs-toggle="pill" data-bs-target="#inventory" role="tab" aria-controls="inventory" aria-selected="false">Inventory</a>
											      		<a class="nav-link" id="attributes-tab" data-bs-toggle="pill" data-bs-target="#attributes" role="tab" aria-controls="attributes">Attributes</a>
											      	</div>
												</div>
												<div class="col-lg-3-5 col-xl-4-5">
													<div class="tab-content" id="tabContent">
											      		<div class="tab-pane fade show active" id="price" role="tabpanel" aria-labelledby="price-tab">
															<div class="form-group row align-items-center pb-3">
																<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Regular Price ($)</label>
																<div class="col-lg-7 col-xl-6">
																	<input type="text" class="form-control form-control-modern" name="regularPrice" value="" required />
																</div>
															</div>
															<div class="form-group row align-items-center">
																<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Sale Price ($)</label>
																<div class="col-lg-7 col-xl-6">
																	<input type="text" class="form-control form-control-modern" name="salePrice" value="" required />
																</div>
															</div>
											      		</div>
											      		<div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
														  <div class="form-group row align-items-center pb-3">
																<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Category</label>
																<div class="col-lg-7 col-xl-6">
																	<select class="form-control form-control-modern" name="Category" >
																		<option value="Stationary" selected>Stationary</option>
																		<option value="Fashion">Fashion</option>
																		<option value="Electronics/Mobile">Electronics/Mobile</option>
																		<option value="Books/Records">Books/Records</option>
																	</select>
																</div>
															</div>
															<div class="form-group row align-items-center pb-3">
																<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Stock Status</label>
																<div class="col-lg-7 col-xl-6">
																	<select class="form-control form-control-modern" name="stockStatus">
																		<option value="in-stock" selected>In Stock</option>
																		<option value="out-of-stock">Out of Stock</option>
																		<option value="on-backorder">On Backorder</option>
																	</select>
																</div>
															</div>
															
											      		</div>
											      		
											      		<div class="tab-pane fade" id="attributes" role="tabpanel" aria-labelledby="attributes-tab">
															<div class="ecommerce-attributes-wrapper">
																<div class="form-group row justify-content-center ecommerce-attribute-row pb-3">
																	
																	<div class="col-xl-6">
																		
																		<label class="control-label">Size</label>
																		<textarea class="form-control form-control-modern" name="size" rows="4" placeholder="None|Blue|Red|Green"></textarea>
																	</div>
																</div>
																<div class="form-group row justify-content-center ecommerce-attribute-row">
																	<div class="col-xl-6">
											
																		<label class="control-label">Colour</label>
																		<textarea class="form-control form-control-modern" name="colour" rows="4" placeholder="None|Blue|Red|Green"></textarea>
																	</div>
																</div>
															</div>
															
											      		</div>
											      		
											    	</div>
												</div>
												
											</div>
											
										</div>
									</section>

									<div class="row action-buttons d-flex justify-content-between">
        <div class="col-12 col-md-auto">
            <button name="save" class="submitt-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
                <i class="bx bx-save text-4 me-2"></i> Add Product
            </button>
        </div>
		<br>
       
    </div>
</form>
            
        `;
		});

		document.getElementById('generalLink').addEventListener('click', function() {
			var rightSectionInner = document.querySelector('.right-section-inner');

			// Restore the original content
			rightSectionInner.innerHTML = originalContent;
		});


		document.getElementById('sellerorder').addEventListener('click', function() {
			var rightSectionInner = document.querySelector('.right-section-inner');

			// Modify the content dynamically using insertAdjacentHTML
			rightSectionInner.innerHTML = `
			<style>
			/* Style the select dropdown */
			/* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

/* Style for the header */
.datatable-header {
    padding: 20px;
    background-color: #f0f0f0;
    border-bottom: 1px solid #ddd;
}

/* Style for the filter and show select boxes */
.filter-by,
.results-per-page {
    margin-bottom: 10px;
}

/* Style for the search input */
.search-term {
    border: 1px solid #ddd;
    padding: 8px;
}

/* Style for the search icon */
.search .bi-search {
    font-size: 1.2rem;
    color: #007bff;
    cursor: pointer;
}

/* Style for the table */
.table-ecommerce-simple {
    width: 100%;
}

/* Style for the table header */
.table-ecommerce-simple th {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
}

/* Style for the table rows */
.table-ecommerce-simple tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Style for the bulk action select box */
.bulk-action {
    margin-right: 10px;
}

/* Style for the pagination wrapper */
.pagination-wrapper {
    display: flex;
    justify-content: flex-end;
}

/* Style for the footer */
.datatable-footer {
    padding: 20px;
    border-top: 1px solid #ddd;
}

/* Style for the results info wrapper */
.results-info-wrapper {
    font-size: 14px;
}

/* Additional styles for the status labels */
.ecommerce-status {
    padding: 6px 12px;
    border-radius: 4px;
    font-weight: bold;
}

.on-hold {
    background-color: #ffc107;
    color: #333;
}

.processing {
    background-color: #17a2b8;
    color: #fff;
}

.completed {
    background-color: #28a745;
    color: #fff;
}

.canceled {
    background-color: #dc3545;
    color: #fff;
}
/* Additional styles for the status labels */
.ecommerce-status {
    padding: 6px 12px;
    border-radius: 4px;
    font-weight: bold;
}

/* Specific width for "Completed," "Processing," and "Canceled" labels */
.ecommerce-status.completed,
.ecommerce-status.processing,
.ecommerce-status.canceled,
.ecommerce-status.on-hold {
    width: 120px; /* Adjust the width as needed */
    display: inline-block;
    text-align: center;
}

.on-hold {
    background-color: #ffc107;
    color: #333;
}

.processing {
    background-color: #17a2b8;
    color: #fff;
}

.completed {
    background-color: #28a745;
    color: #fff;
	
}
/* Style for the bulk action select box */
.bulk-action {
    padding: 8px;
    border: 1px solid #ddd;
    width: 170px; /* Adjust the width as needed */
    background-color: #fff;
    color: #333;
}

/* Style for the options within the select box */
.bulk-action option {
    color: #333;
}

			</style>
			<!-- start: page -->

					<div class="row">
						<div class="col">

							<div class="card card-modern">
								<div class="card-body">
									<div class="datatables-header-footer-wrapper">
										<div class="datatable-header">
											<div class="row align-items-center mb-3">

												

												<div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Filter By:</label>
														<select class="form-control select-style-1 filter-by" name="filter-by">
															<option value="all" selected>All</option>
															<option value="1">ID</option>
															<option value="2">Customer Name</option>
															<option value="3">Date</option>
															<option value="4">Total</option>
															<option value="5">Status</option>
														</select>
													</div>
												</div>
												<div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-lg-center flex-column flex-lg-row">
														<label class="ws-nowrap me-3 mb-0">Show:</label>
														<select class="form-control select-style-1 results-per-page" name="results-per-page">
															<option value="12" selected>12</option>
															<option value="24">24</option>
															<option value="36">36</option>
															<option value="100">100</option>
														</select>
													</div>
												</div>
												<div class="col-12 col-lg-auto ps-lg-1">
													<div class="search search-style-1 search-style-1-lg mx-lg-auto">
														<div class="input-group">
															<input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order">
															<div class="btn btn-default " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<table class="table table-ecommerce-simple table-borderless table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 640px;">

											<thead>
												<tr>
													<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
													<th width="8%">ID</th>
													<th width="28%">Customer Name</th>
													<th width="18%">Date</th>
													<th width="18%">Total</th>
													<th width="15%">Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>191</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example</strong></a></td>
													<td>Nov 21, 2019</td>
													<td>$200</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>192</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 2</strong></a></td>
													<td>Nov 22, 2019</td>
													<td>$70</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>193</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 3</strong></a></td>
													<td>Nov 23, 2019</td>
													<td>$20</td>
													<td><span class="ecommerce-status processing">Processing</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>194</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 4</strong></a></td>
													<td>Nov 24, 2019</td>
													<td>$399</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>195</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 5</strong></a></td>
													<td>Nov 25, 2019</td>
													<td>$1.000</td>
													<td><span class="ecommerce-status processing">Processing</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>196</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 6</strong></a></td>
													<td>Nov 26, 2019</td>
													<td>$1.300</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>197</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 7</strong></a></td>
													<td>Nov 27, 2019</td>
													<td>$50</td>
													<td><span class="ecommerce-status processing">Processing</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>198</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 8</strong></a></td>
													<td>Nov 28, 2019</td>
													<td>$879</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>199</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 9</strong></a></td>
													<td>Nov 29, 2019</td>
													<td>$621</td>
													<td><span class="ecommerce-status completed">Completed</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>200</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 10</strong></a></td>
													<td>Nov 30, 2019</td>
													<td>$245</td>
													<td><span class="ecommerce-status canceled">Canceled</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>201</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 11</strong></a></td>
													<td>Nov 11, 2019</td>
													<td>$178</td>
													<td><span class="ecommerce-status completed">Completed</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>202</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 12</strong></a></td>
													<td>Nov 12, 2019</td>
													<td>$63</td>
													<td><span class="ecommerce-status canceled">Canceled</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>203</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 13</strong></a></td>
													<td>Nov 13, 2019</td>
													<td>$91</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>204</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 14</strong></a></td>
													<td>Nov 14, 2019</td>
													<td>$568</td>
													<td><span class="ecommerce-status processing">Processing</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>205</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 15</strong></a></td>
													<td>Nov 15, 2019</td>
													<td>$796</td>
													<td><span class="ecommerce-status on-hold">On Hold</span></td>
												</tr>
												<tr>
													<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
													<td><a href="ecommerce-orders-detail.html"><strong>206</strong></a></td>
													<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example 16</strong></a></td>
													<td>Nov 16, 2019</td>
													<td>$213</td>
													<td><span class="ecommerce-status completed">Completed</span></td>
												</tr>
											</tbody>
										</table>
										
										<div class="datatable-footer">
											<div class="row align-items-center justify-content-between mt-3">
												<div class="col-md-auto order-1 mb-3 mb-lg-0">
													<div class="d-flex align-items-stretch">
														<select class="form-control select-style-1 bulk-action" name="bulk-action">
															<option value="bulk-action" selected>Bulk Action</option>
															<option value="bulk-action">Delete</option>
															<option value="bulk-action">Mark as Completed</option>
															<option value="bulk-action">Mark as Processing</option>
															<option value="bulk-action">Mark as On Hold</option>
															<option value="bulk-action">Mark as Canceled</option>
														</select>
														<div class="btn btn-primary btn-px-4 btn-py-2 ms-2">Apply</div>
													</div>
												</div>
												<div class="col-lg-auto text-center order-3 order-lg-2">
													<div class="results-info-wrapper"></div>
												</div>
												<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
													<div class="pagination-wrapper"></div>
												</div>
											</div>
										</div>
									</table>
								</div>
							</div>

						</div>
					</div>
					<!-- end: page -->
            
        `;
		});
		
	</script>



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

	<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
</body>
<?php
include 'connect.php';

// Check if form is submitted
if (isset($_POST['save'])) {

	// Check if all required fields are filled
	if (!empty($_POST['productName']) && !empty($_POST['productDescription']) && !empty($_POST['regularPrice']) && !empty($_POST['salePrice']) && !empty($_POST['Category']) && !empty($_POST['stockStatus']) && !empty($_POST['size']) && !empty($_POST['colour']) && !empty($_FILES['productimage']['name'])) {

		// Set parameters
		$productName = $_POST["productName"];
		$productDescription = $_POST["productDescription"];
		$regularPrice = $_POST["regularPrice"];
		$salePrice = $_POST["salePrice"];
		$Category = $_POST["Category"];
		$stockStatus = $_POST["stockStatus"];
		$size = $_POST["size"];
		$colour = $_POST["colour"];
		$reg_no = $_SESSION['idnum'];

		// File upload handling
		$targetDirectory = "uploads/";
		$targetFile = $targetDirectory . basename($_FILES["productimage"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

		// Check file size
		if ($_FILES["productimage"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}

		// Check if file already exists
		if (file_exists($targetFile)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}

		// Check file format
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		} else {
			// If everything is ok, try to upload file
			if (move_uploaded_file($_FILES["productimage"]["tmp_name"], $targetFile)) {
				// File uploaded successfully, now insert data into database
				$image = $targetFile;
				
				$insertQuery = "INSERT INTO seller (productName, productDescription, image, regularPrice, salePrice, Category, stockStatus, size, colour,reg_no) VALUES ('$productName', '$productDescription', '$image', '$regularPrice', '$salePrice', '$Category', '$stockStatus', '$size', '$colour','$reg_no')";

<<<<<<< HEAD
                if ($conn->query($insertQuery) === TRUE) {
                    // Product added successfully, display success message
                    echo "<div class='success-message'>Product added successfully!</div>";
                } else {
                    echo "Error: " . $insertQuery . "<br>" . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "All fields are required";
    }
=======
				if ($conn->query($insertQuery) === TRUE) {
					echo "<script>alert('Product added successfully!');</script>";
				} else {
					echo "Error: " . $insertQuery . "<br>" . $conn->error;
				}
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	} else {
		echo "All fields are required";
	}
>>>>>>> eeec437beef4b37bafb476c8402e2a5359702562
}
?>
<style>
    .success-message {
		position: fixed;
        top: 90px;
        right: 20px;
        background-color: #dff0d8; /* Light green background color */
        color: #3c763d; /* Dark green text color */
        padding: 10px;
        margin: 20px 0;
        border: 1px solid #d6e9c6; /* Border color */
        border-radius: 4px;
    }
</style>


</html>