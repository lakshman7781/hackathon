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
            width: 32%;
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
            width: 68%;
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
                <div class="col-lg-4 position-relative">
                    <div class="card border-width-3 border-radius-0 border-color-hover-dark" style="min-height: 450px; min-width: 310px; margin-left:-10px;">

                        <div class="card-body">
                            <h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order Details</h4>
                            <table class="shop_table cart-totals mb-3">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="border-top-0">
                                            <strong class="text-color-dark">
                                                <p id="page-count-info"></p>
                                            </strong>

                                        </td>
                                    </tr>

                                    <tr class="total">
                                        <td>
                                            <strong class="text-color-dark text-3-5">Total</strong>
                                        </td>
                                        <td class="text-end">
                                            <strong class="text-color-dark"><span class="amount text-color-dark text-5">#0</span></strong>
                                        </td>
                                    </tr>
                                    <tr class="payment-methods">
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
                                    </tr>

                                </tbody>
                            </table>
                            <a href="ordercomplete.php" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Place Order <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="right-section">
        <div class="right-section-inner">

            <div role="main" class="main shop pb-4">
<br>
                <div class="row">

                <?php
					// Include the file to establish a database connection
					include 'connect.php';

					// Write your SQL query
					$sql = "SELECT * FROM food";

					// Execute the query
					$result = mysqli_query($conn, $sql);

					// Check if there are any results
					if (mysqli_num_rows($result) > 0) {
						// Output data of each row
						while ($row = mysqli_fetch_assoc($result)) {
							// Output the HTML structure with product details
					?>

                    <div class="col-sm-4 mb-4 mb-sm-0">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-0">

                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce text-bg-success"><?php echo $row['type']; ?></span>
                                    <span class="badge badge-ecommerce text-bg-danger">15% OFF</span>
                                </div>

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a class=" text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="">
                                    <div class="product-thumb-info-image product-thumb-info-image-effect">
                                       

                                        <img alt="" class="img-fluid" src="<?php echo $row['image']; ?>">

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="summary entry-summary">


                            <div class="pb-0 clearfix d-flex align-items-center">
                               

                                <div class="review-num">
                                    <a href="shop-product-sidebar-left.html#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="0" data-hash-offset-lg="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000">
                                        <h2 class="mb-0 font-weight-bold text-7"><a class="text-color-dark text-color-hover-primary text-decoration-none" style=""><?php echo $row['foodname']; ?></a></h2>
                                    </a>
                                </div>
                            </div>

                            <div class="divider divider-small">
                                <hr class="bg-color-grey-400">
                            </div>

                            <p class="price mb-3">
                                <span class="sale text-color-dark">₹<?php echo $row['saleprice']; ?></span>
                                <span class="amount">₹<?php echo $row['regularprice']; ?></span>
                            </p>

                            <p class="text-3-5 mb-3"><?php echo $row['foodDescription']; ?></p>

                            <ul class="list list-unstyled text-2" style="margin-left: -400px;">
                                <li class="mb-0">AVAILABILITY: <strong class="text-color-dark"><?php echo $row['Category']; ?></strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <hr class="my-5">
                    </div>
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

                <div class="row">
                    <div class="col">

                    </div>
                </div>

                <!-- Bootstrap JS and Popper.js -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>

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

    <?php include 'footer.php'; ?>


</body>


</html>