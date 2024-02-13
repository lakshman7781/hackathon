<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cart | Porto - Multipurpose Website Template</title>

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
    </style>
</head>
<?php
$productid = $_GET['productid'];
// Include your connect.php file
include('connect.php');

// Assuming $row is fetched from the seller table
$query = "SELECT seller.*, users.phonenumber
          FROM seller
          INNER JOIN users ON seller.reg_no = users.reg_no
          WHERE seller.productid = '$productid'";

$result = $conn->query($query);
$row = $result->fetch_assoc();

// Assuming these fields exist in the result
$productName = $row['productName'];
$productDescription = $row['productDescription'];
$regularPrice = $row['regularPrice'];
$image = $row['image'];
$salePrice = $row['salePrice'];
$Category = $row['Category'];
$stockStatus = $row['stockStatus'];
$size = $row['size'];
$colour = $row['colour'];
$phoneNumber = '91' . $row['phonenumber']; // Get phone number from the joined result

$conn->close();
?>


<body data-plugin-page-transition>

    <?php include 'header.php'; ?>
    <div class="body">
        <div class="left-section">

            <div class="left-section-bottom">

                <aside class="sidebar">

                    <h5 class="font-weight-semi-bold pt-3" style="width: 100%;">Categories</h5>
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item"><a class="nav-link" href="textbooks.php">Books</a></li>
                        <li class="nav-item"><a class="nav-link" href="electronics.php">accessories</a></li>
                        <li class="nav-item"><a class="nav-link" href="stationary.php">Stationary</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Food</a></li>
                        <li class="nav-item"><a class="nav-link" href="Xeorox.php">Xerox</a></li>

                    </ul>

            </div>

        </div>


        <div class="right-section">
            <div class="right-section-inner">

                <div role="main" class="main shop pb-4">
                    <h4 style="text-align: left; color:#0088cc">Shopping Cart</h4>

                    <div class="container">
                        <div class="thumb-gallery-wrapper">
                        <img alt="" class="" src="<?php echo $image; ?>" data-zoom-image="img/1.png"
                                        style="height: 300px; width:300px">                        </div>

                        <div class="summary entry-summary position-relative">

                <h1 class="mb-0 font-weight-bold text-7"><?php echo $row['productName']; ?></h1>

               

                <div class="divider divider-small">
                    <hr class="bg-color-grey-400">
                </div>
              
                <p class="price mb-3">
                    <span class="sale text-color-dark"><?php echo $row['regularPrice']; ?></span>
                    <span class="amount"><?php echo $row['salePrice']; ?></span>
                </p>

                <p class="text-3-5 mb-3"><?php echo $row['productDescription']; ?></p>

                <ul class="list list-unstyled text-2">
                    <li class="mb-0">AVAILABILITY: <strong class="text-color-dark"><?php echo $row['stockStatus']; ?></strong></li>
                    <!-- <li class="mb-0">SKU: <strong class="text-color-dark"></strong></li> -->
                </ul>

                <form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">
                    <table class="table table-borderless" style="max-width: 300px;">
                        <tbody>
                            <tr>
                                <td class="align-middle text-2 px-0 py-2">SIZE:</td>
                                <td class="px-0 py-2">
                                    <div class="custom-select-1">
                                       <h6><?php echo $row['size']; ?></h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-2 px-0 py-2">COLOR:</td>
                                <td class="px-0 py-2">
                                    <div class="custom-select-1">
                                    <h6><?php echo $row['colour']; ?></h6>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="quantity quantity-lg">
                        <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                        <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                        <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                    </div>
                    <br>                    <hr>
                </form>

                <div class="d-flex align-items-center" >
                   <a href="https://api.whatsapp.com/send?phone=<?php echo $row['phonenumber']; ?>">
                <div type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary" style="margin-right: 10px; background-color: #28a745 !important;" >Whatsapp</div>
                </a>
                <a href="tel:+918712131582">
                <div type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary" style="margin-right: 10px; background-color: rgb(5, 142, 255) !important;" >Contact</div>  
                </a> 
                <div type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add to cart</div>
    
            </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col" style="background-color: white; padding:10px">
            <h4 class="font-weight-semibold text-4 mb-3" style="margin-left: 30px;">PEOPLE ALSO BOUGHT</h4>
            <hr class="mt-0">
            <div class="products row">
                <div class="col">
                    <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-outside nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true, 'stagePadding': '75', 'navVerticalOffset': '50px'}">

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce text-bg-success">NEW</span>

                                </div>

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">electronics</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Photo Camera</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce text-bg-success">NEW</span>
                                    <span class="badge badge-ecommerce text-bg-danger">27% OFF</span>
                                </div>

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image product-thumb-info-image-effect">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">

                                        <img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Porto Headphone</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Golf Bag</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-badges-wrapper">

                                    <span class="badge badge-ecommerce text-bg-danger">27% OFF</span>
                                </div>

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <div class="countdown-offer-wrapper">
                                    <div class="text-color-light text-2" data-plugin-countdown data-plugin-options="{'textDay': 'DAYS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 'SEC', 'date': '2025/01/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFFER ENDS IN </span>', 'textDay': 'DAYS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}"></div>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Workout</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Luxury Bag</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-5.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Styled Bag</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">hat</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Blue Hat</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
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

                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="addtocart-btn-wrapper">
                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>

                                <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="img/products/product-grey-9.jpg">

                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Baseball Ball</a></h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
                                <span class="amount">$299,00</span>
                            </p>
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