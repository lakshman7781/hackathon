<!DOCTYPE html>
<html lang="en">
<?php

use Twilio\TwiML\Voice\Number;

 session_start(); ?>

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
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap"
        rel="stylesheet" type="text/css">

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
    <div class="body">
    <?php
                // Start or resume the session


                // Include the file to establish a database connection
                include 'connect.php';

                // Check if the session variable 'reg_no' is set
                if (isset($_SESSION['idnum'])) {
                    // Sanitize the session variable to prevent SQL injection
                    $reg_no = mysqli_real_escape_string($conn, $_SESSION['idnum']);

                    // Fetch data from the users table based on the session variable 'reg_no'
                    $sql = "SELECT * FROM xeorx WHERE reg_no = '$reg_no'";

                    // Execute the query
                    $result = mysqli_query($conn, $sql);

                    // Check if there are any results
                    if (mysqli_num_rows($result) > 0) {
                        // Output data of the user
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
    <div class="left-section">
			<div class="left-section-top">
				<a href="img/12.png"> <img src="img/12.png" alt="12" width="100" height="100"> </a>
				Hello &nbsp;
				<h4>Left Top</h4>
			</div>
			<div class="left-section-bottom">
				<div class="col-lg-4 position-relative">
					<div class="card border-width-3 border-radius-0 border-color-hover-dark" style="min-height: 450px; width: 300px;">
						<div class="card-body">
							<h4 class="font-weight-bold text-uppercase text-4 mb-3">Cart Totals</h4>
							<table class="shop_table cart-totals mb-4">
								<tbody>
                                <tr class="cart-subtotal">
										<td class="border-top-0">
											<strong class="text-color-dark">File Name</strong>
										</td>
                                         <td class="border-top-0 text-end">
											<strong><span class="amount font-weight-medium"><?php echo $row['file']; ?></span></strong>
										</td>
									</tr>
									
									<tr class="cart-subtotal">
										<td class="border-top-0">
											<strong class="text-color-dark">Number of Pages</strong>
										</td>
                                         <td class="border-top-0 text-end">
											<strong><span class="amount font-weight-medium"><?php echo $row['pages']; ?></span></strong>
										</td>
									</tr>
                                    <tr class="cart-subtotal">
										<td class="border-top-0">
											<strong class="text-color-dark">Category</strong>
										</td>
                                         <td class="border-top-0 text-end">
											<strong><span class="amount font-weight-medium"><?php echo $row['category']; ?></span></strong>
										</td>
									</tr>
                                    <tr class="cart-subtotal">
										<td class="border-top-0">
											<strong class="text-color-dark">Printingsides</strong>
										</td>
                                         <td class="border-top-0 text-end">
											<strong><span class="amount font-weight-medium"><?php echo $row['category1']; ?></span></strong>
										</td>
									</tr>
                                    <tr class="cart-subtotal">
										<td class="border-top-0">
											<strong class="text-color-dark">Cover</strong>
										</td>
                                         <td class="border-top-0 text-end">
											<strong><span class="amount font-weight-medium"><?php echo $row['category2']; ?></span></strong>
										</td>
									</tr>
                                    <tr class="cart-subtotal">
										<td class="border-top-0">
                                        <h2><span class="amount font-weight-medium">Total</span></h2>										</td>
                                         <td class="border-top-0 text-end">
											<h2><span class="amount font-weight-medium">₹<?php echo $row['total']; ?></span></h2>
										</td>
									</tr>
								</tbody>
							</table>
							
                            <a class ="btn btn-primary   text-uppercase border-radius-0 w-100 text-3 py-3 buynow">Buy Now</a>

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
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
    <?php include 'connect.php'; ?>

    <div class="right-section">
        <div class="right-section-inner">
            <div role="main" class="main shop pb-4">
                <div class="poster1"></div>
                
                <td colspan="2" class="border-top-0">
                    <strong class="text-color-dark">
                        <p id="page-count-info"></p>
                    </strong>

                </td>
                <div class="row">
                    <div class="col">
                        <section class="card card-modern card-big-info">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="card-body" style="border: 2px solid #666; border-radius: 5px;">
                                    <div class="row">
                                        <div class="col-lg-2-5 col-xl-1-5">
                                            <i class="card-big-info-icon bx bx-camera"></i>
                                            <br>
                                            <h3 class="card-big-info-title">Upload Your Files</h3>
                                        </div>
                                        <div class="col-lg-3-5 col-xl-4-5"
                                            style="border: 2px dashed #666; background-color: #f2f4f4;">
                                            <div class="form-group row align-items-center">
                                                <div class="col">
                                                    <div id="dropzone-form-image" class="dropzone-modern dz-square">
                                                        <span class="dropzone-upload-message text-center"
                                                            style="border-color: #007bff;">
                                                            <i class="bx bxs-cloud-upload"></i>
                                                            <br>
                                                            <label for="file-upload" class="custom-file-upload">
                                                                <span id="file-name"></span>
                                                            </label>
                                                            <input type="file" id="file" name="file" required
                                                                onchange="handleFileUpload(this.files)" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div aria-labelledby="inventory-tab"
                                        style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.5); padding: 10px; border-radius: 5px;">
                                        <br>
                                        <div class="form-group row align-items-center pb-3">
                                            <label
                                                class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Category</label>
                                            <div class="col-lg-7 col-xl-6">
                                                <select class="form-control form-control-modern" name="category">
                                                    <option value="Color" selected>Color</option>
                                                    <option value="Black & White">Black & White</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center pb-3">
                                            <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Printing
                                                Sides</label>
                                            <div class="col-lg-7 col-xl-6">
                                                <select class="form-control form-control-modern" name="category1">
                                                    <option value="Both Sides Of page" selected>Both sides of Page
                                                    </option>
                                                    <option value="One side of Page">One side of Page</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center pb-3">
                                            <label
                                                class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Cover</label>
                                            <div class="col-lg-7 col-xl-6">
                                                <select class="form-control form-control-modern" name="category2">
                                                    <option value="Spiral Binding" selected>Spiral Binding</option>
                                                    <option value="Stick File">Stick File</option>
                                                    <option value="None">None</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center pb-3">
                                            <p id="page-count-info"></p>
                                            <div class="col-lg-7 col-xl-6">
                                                <button type="submit" name="submit" class="btn btn-primary"
                                                    style="left: 300px; width: 120px; margin-bottom: 10px;">Submit</button>
                                                <?php
                                                $query = "SELECT * FROM xeorx";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $id = $row['id'];
                                                    $file = $row['file'];
                                                    $category = $row['category'];
                                                    $category1 = $row['category1'];
                                                    $category2 = $row['category2'];
                                                    $finalamount = $row['total'];
                                                    
                                                }
                                                ?>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
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


    <style>
        .custom-file-upload span {
            font-size: 16px;
            font-weight: 100;
            color: white;
        }

        /* Hide the default file input button */
        .custom-file-upload input[type="file"] {
            display: none;
        }
    </style>


    <!-- end: page -->

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


           
    <?php
    include('connect.php');
    include 'connect.php';

    require_once('vendor/autoload.php');

    use setasign\Fpdi\Fpdi;

    function count_pdf_pages($pdf_path)
    {
        try {
            $pdf = new Fpdi();
            $num_pages = $pdf->setSourceFile($pdf_path);
            return $num_pages;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    // Check if form is submitted and file is uploaded
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
        // Check for errors during file upload
        if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
            echo "Error uploading file.";
        } else {
            $temp_file = $_FILES['file']['tmp_name'];
            $page_count = count_pdf_pages($temp_file);
            if (is_numeric($page_count)) {
                $numpages = $page_count;
            } else {
                echo $page_count;
            }
        }
    }
    if (isset($_SESSION['idnum'])) {
        // Sanitize the session variable to prevent SQL injection
        $reg_no = mysqli_real_escape_string($conn, $_SESSION['idnum']);

    if (isset($_POST['submit'])) {
        // Check if file was uploaded without errors
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $file_name = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];

            // Move the uploaded file to a specified directory
            $upload_dir = 'uploads/'; // Change this to your desired upload directory
            move_uploaded_file($file_tmp, $upload_dir . $file_name);

            // Retrieve other form data
            $category = $_POST['category'];
            $category1 = $_POST['category1'];
            $category2 = $_POST['category2'];
            $colourprice = 5;
            $bwprice = 2;
            $spiralprice = 30;
            $stickprice = 20;
            $pages = $numpages;

            $colour = $category;
            $spiral = $category2;

            

            if ($colour == "Color" && $spiral == "Spiral Binding") {
                $total = $pages * $colourprice + $spiralprice;
            } else if ($colour == "Color" && $spiral == "Stick File") {
                $total = $pages * $colourprice + $stickprice;
            } else if ($colour == "Black & White" && $spiral == "Spiral Binding") {
                $total = $pages * $bwprice + $spiralprice;
            } else if ($colour == "Black & White" && $spiral == "Stick File") {
                $total = $pages * $bwprice + $stickprice;
            } else if ($colour == "Black & White" && $spiral == "None") {
                $total = $pages * $bwprice;
            } else if ($colour == "Color" && $spiral == "None") {
                $total = $pages * $colourprice;
            } else {
                $total = 10;
            }

            // Insert data into the database
            $sql = "INSERT INTO xeorx (file,pages, category, category1, category2,total,reg_no) VALUES ('$file_name','$pages', '$category', '$category1', '$category2', '$total','$reg_no')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Pdf Uploaded successfully!');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            // Close the database connection
            mysqli_close($conn);
        } else {
            echo "File upload error.";
        }
    }
}


    ?>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
<script>
$(document).ready(function() {
    $(".buynow").click(function(e) {
        e.preventDefault(); // Prevent default behavior of anchor tag click
        var amount = <?php echo $finalamount; ?>;
        var productname = "Xerox"; // Assuming this variable is defined elsewhere in your code
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
                    data: { product_id: 'your_product_id', payment_id: paymentid }, // Replace 'your_product_id' with the actual product ID
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

</html>