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
                                            <strong class="text-color-dark"> <p id="page-count-info"></p></strong>
                                           
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
                <!-- <h4 style="text-align: center; color:#0088cc" >Become a Seller</h4> -->
                <div class="poster1">

                </div>

                <div class="alert alert-warning alert-dismissible" role="alert" style="margin-top: 10px;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Alert!</strong> You Need Some More Authentication to make u an Seller
                </div>
                <div class="row">
                    <div class="col">
                        <section class="card card-modern card-big-info">
                            <form>
                                <div class="card-body" style="border: 2px solid #666; border-radius:5px;">
                                    <div class="row">
                                        <div class="col-lg-2-5 col-xl-1-5">
                                            <i class="card-big-info-icon bx bx-camera"></i>
                                            <br>
                                            <h3 class="card-big-info-title">Upload Ur Files</h3>

                                        </div>

                                        <div class="col-lg-3-5 col-xl-4-5" style="border: 2px dashed #666; background-color:#f2f4f4;">
                                            <div class="form-group row align-items-center">
                                                <div class="col">
                                                    <div id="dropzone-form-image" class="dropzone-modern dz-square">
                                                        <span class="dropzone-upload-message text-center" style="border-color: #007bff;">
                                                            <i class="bx bxs-cloud-upload"></i>
                                                            <br>

                                                            <label for="file-upload" class="custom-file-upload">
    <span id="file-name"></span>
</label>
<input type="file" id="file-upload-input" name="productimage" required onchange="handleFileUpload(this.files)" />


                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div aria-labelledby="inventory-tab" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.5); padding: 10px; border-radius: 5px;">
                                        <br>
                                        <div class="form-group row align-items-center pb-3">

                                            <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Category</label>
                                            <div class="col-lg-7 col-xl-6">
                                                <select class="form-control form-control-modern" name="Category">
                                                    <option value="" selected>Colour</option>
                                                    <option value="">Black & White</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center pb-3">

                                            <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Printins Sides</label>
                                            <div class="col-lg-7 col-xl-6">
                                                <select class="form-control form-control-modern" name="Category">
                                                    <option value="" selected>Both sides of Page</option>
                                                    <option value="">One side of Page</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center pb-3">
                                            <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">cover</label>
                                            <div class="col-lg-7 col-xl-6">
                                                <select class="form-control form-control-modern" name="stockStatus">
                                                    <option value="" selected>Spiral Binding</option>
                                                    <option value="">Stick File</option>
                                                    <option value="">None</option>
                                                </select>

                                            </div>



                                        </div>
                                        <div class="form-group row align-items-center pb-3">
                                            <p id="page-count-info"></p>
                                            <div class="col-lg-7 col-xl-6">
                                                <button type="submit" class="btn btn-primary" style="left: 300px; width:120px; margin-bottom:10px;">Submit</button>
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
    <script>
        //img upload
        function handleFileUpload(files) {
    console.log('Files:', files); // Check files parameter
    const fileNameSpan = document.getElementById('file-name');
    if (files.length > 0) {
        console.log('File name:', files[0].name); // Check file name
        fileNameSpan.textContent = files[0].name;
    } else {
        fileNameSpan.textContent = 'Choose File';
    }
};


        // Store the original content when the page loads
        // var originalContent = document.querySelector('.right-section-inner').innerHTML;

        // document.getElementById('addproduct').addEventListener('click', function() {
        //     var rightSectionInner = document.querySelector('.right-section-inner');

        //     // Modify the content dynamically using insertAdjacentHTML
        //     rightSectionInner.innerHTML = `


        // `;
        // });

        let pdfInput = document.getElementById('file-upload-input');



        // Event listener for file input change
        pdfInput.onchange = function(event) {
            let file = event.target.files[0];

            // Create a FileReader object
            let filereader = new FileReader();

            // Event listener for FileReader's load event
            filereader.onload = function() {
                let typedarray = new Uint8Array(this.result);
                console.log('FileReader onload triggered. Result:', this.result);

                // Use PDF.js to parse the PDF file
                pdfjsLib.getDocument(typedarray).promise.then(function(pdf) {
                    let numPages = pdf.numPages;
                    console.log('Number of pages in the PDF:', numPages);
                    // Display number of pages in the HTML
                    document.getElementById('page-count-info').textContent = 'Number of pages in the PDF: ' + numPages;
                }).catch(function(error) {
                    console.error('Error reading PDF:', error);
                });
            };

            // Read the uploaded file as an ArrayBuffer
            filereader.readAsArrayBuffer(file);
        };
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
                $insertQuery = "INSERT INTO seller (productName, productDescription, image, regularPrice, salePrice, Category, stockStatus, size, colour) VALUES ('$productName', '$productDescription', '$image', '$regularPrice', '$salePrice', '$Category', '$stockStatus', '$size', '$colour')";

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
}
?>

</html>