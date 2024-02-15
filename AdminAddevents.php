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

    <?php include 'Adminheader.php'; ?>
    <?php include  'connect.php'; ?>
    <div class="body">
        <div class="left-section">
            <div class="left-section-top">
                <a href="img/12.png"> <img src="img/12.png" alt="12" width="100" height="100"> </a>
                Hello&nbsp;
                <h4>Admin</h4>
            </div>


            <div class="left-section-bottom">
                <ul class="profile-menu">



                    <li class="">
                        <a href="#" id="generalLink">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                            </svg>
                            &nbsp;Ecommerce
                        </a>
                        <ul class="submenu" id="submenu1">
                            <li><a href="#">Verify Product</a></li>
                            <li><a href="Adminstdetails.php">Students Details</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" id="changePasswordLink">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                            </svg>
                            &nbsp; Events
                        </a>
                        <ul class="submenu" id="submenu2">
                            <li><a href="#">Add Events</a></li>
                            <li><a href="#">Add Poll</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
                            </svg>
                            &nbsp; Xerox
                        </a>

                    </li>

                    <li class="">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                                <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                            </svg>
                            &nbsp; Food
                        </a>

                    </li>

                </ul>

            </div>
        </div>
    </div>
    <script>
        // JavaScript to handle dropdown menu functionality

        // Function to toggle the visibility of the submenu when its corresponding link is clicked
        function toggleSubMenu(submenuId, linkId) {
            var submenu = document.getElementById(submenuId);
            submenu.classList.toggle("show");

            // Get the height of the submenu
            var submenuHeight = submenu.clientHeight;

            // Get the elements below the dropdown
            var elementsBelow = document.querySelectorAll(".move-down");

            // Adjust the position of each element below the dropdown
            elementsBelow.forEach(function(element) {
                element.style.marginTop = submenu.classList.contains("show") ? submenuHeight + "px" : "0";
            });
        }

        // Function to close the submenu when clicking outside of it
        function closeSubMenu(submenuId, linkId) {
            var submenu = document.getElementById(submenuId);
            var link = document.getElementById(linkId);
            if (!submenu.contains(event.target) && !link.contains(event.target)) {
                submenu.classList.remove("show");

                // Reset the position of the elements below the dropdown
                var elementsBelow = document.querySelectorAll(".move-down");
                elementsBelow.forEach(function(element) {
                    element.style.marginTop = "0";
                });
            }
        }

        // Add event listeners to handle the dropdown menus
        document.getElementById("generalLink").addEventListener("click", function(e) {
            e.preventDefault();
            toggleSubMenu("submenu1", "generalLink");
        });

        document.getElementById("changePasswordLink").addEventListener("click", function(e) {
            e.preventDefault();
            toggleSubMenu("submenu2", "changePasswordLink");
        });

        // Add event listener to close the submenu when clicking outside of it
        document.addEventListener("click", function(e) {
            closeSubMenu("submenu1", "generalLink");
            closeSubMenu("submenu2", "changePasswordLink");
        });
    </script>
    <style>
        .submenu {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            z-index: 1;
            min-width: 150px;
            /* Adjust as needed */
            text-align: left;
        }

        .submenu.show {
            display: block;
        }

        .submenu li {
            display: block;
        }

        .submenu li a {
            padding: 8px 16px;
            color: #333;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease;
        }

        .submenu li a:hover {
            background-color: #0088cc;
        }
    </style>



    <div class="right-section">
        <div class="right-section-inner">

            <div role="main" class="main shop pb-4">

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>






                <!-- end: page -->


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
                        background-color: #e0e0e0;
                        /* Change background color on hover */
                        /* You can add other styles for the hover effect */
                    }

                    /* Optionally, you can add a transition for a smoother effect */
                    .tabs .nav-link {
                        transition: background-color 0.3s ease;
                    }

                    /* Add hover effect for Price and Inventory tabs */
                    .tabs .nav-link:hover {
                        background-color: #e0e0e0;
                        /* Change background color on hover */
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
                        margin: 10px;
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
                        display: none;
                        /* Hide the default file input */
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
                                            <h2 class="card-big-info-title">Event Info</h2>
                                            <p class="card-big-info-desc">Add here the Event description with all details and necessary information.</p>
                                        </div>
                                        <div class="col-lg-3-5 col-xl-4-5">
                                            <div class="form-group row align-items-center pb-3">
                                                <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Event Name</label>
                                                <div class="col-lg-7 col-xl-6">
                                                    <input type="text" class="form-control form-control-modern" name="eventName" value="" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Event Description</label>
                                                <div class="col-lg-7 col-xl-6">
                                                    <textarea class="form-control form-control-modern" name="eventDescription" rows="6" required></textarea>
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
                                            <h2 class="card-big-info-title">Event Image</h2>
                                            <p class="card-big-info-desc">Upload your Event image. You can add multiple images</p>
                                        </div>
                                        <div class="col-lg-3-5 col-xl-4-5">
                                            <div class="form-group row align-items-center">
                                                <div class="col">
                                                    <div id="dropzone-form-image" class="dropzone-modern dz-square">
                                                        <span class="dropzone-upload-message text-center">
                                                            <i class="bx bxs-cloud-upload"></i>
                                                            <label for="file-upload" class="text-color-primary"><b class="text-color-primary">Drag/Upload</b> your images here.<b>
200x200 Size</label>
                                                            <input type="file" id="file-upload" name="eventimage" class="text-color-primary" required onchange="previewImage(event)" />
                                                        </span>
                                                        <div id="image-preview" class="text-center mt-3">
                                                            <img id="preview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 200px;" />
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
                            <section class="card card-modern card-big-info">
                                <div class="card-body" style="border: 2px solid #666; border-radius:5px;">
                                    <div class="tabs-modern row">
                                        <div class="col-lg-2-5 col-xl-1-5" style="background-color:none">
                                            <div class="nav flex-column tabs" id="tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="inventory-tab" data-bs-toggle="pill" data-bs-target="#inventory" role="tab" aria-controls="inventory" aria-selected="false">Inventory</a>
                                                <a class="nav-link " id="price-tab" data-bs-toggle="pill" data-bs-target="#price" role="tab" aria-controls="price" aria-selected="true">Date</a>

                                                <!-- <a class="nav-link" id="attributes-tab" data-bs-toggle="pill" data-bs-target="#attributes" role="tab" aria-controls="attributes">Attributes</a> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-3-5 col-xl-4-5">
                                            <div class="tab-content" id="tabContent">
                                                <div class="tab-pane fade " id="price" role="tabpanel" aria-labelledby="price-tab">
                                                    <div class="form-group row align-items-center pb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Starting Date</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input type="text" class="form-control form-control-modern" name="startdate" value="" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Ending Date</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input type="text" class="form-control form-control-modern" name="enddate" value="" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show active" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
                                                    <div class="form-group row align-items-center pb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Category</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <select class="form-control form-control-modern" name="Category">
                                                                <option value="Internships" selected>Internships</option>
                                                                <option value="IEI">IEI</option>

                                                                <option value="ACE">ACE</option>
                                                                <option value="EOC">EOC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group row align-items-center pb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Stock Status</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <select class="form-control form-control-modern" name="stockStatus">
                                                                <option value="in-stock" selected>In Stock</option>
                                                                <option value="out-of-stock">Out of Stock</option>
                                                                <option value="on-backorder">On Backorder</option>
                                                            </select>
                                                        </div>
                                                    </div> -->

                                                </div>

                                                <!-- <div class="tab-pane fade" id="attributes" role="tabpanel" aria-labelledby="attributes-tab">
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

                                                </div> -->

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>

                            <div class="row action-buttons d-flex justify-content-between">
                                <div class="col-12 col-md-auto">
                                    <button name="save" class="submitt-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
                                        <i class="bx bx-save text-4 me-2"></i> Add Event
                                    </button>
                                </div>
                                <br>

                            </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>


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

if (isset($_POST['save'])) {
    if (!empty($_POST['eventName']) && !empty($_POST['eventDescription']) && !empty($_POST['startdate']) && !empty($_POST['enddate']) && !empty($_POST['Category']) && !empty($_FILES['eventimage']['name'])) {

        $eventName = $_POST["eventName"];
        $Category = $_POST["Category"];
        $eventDescription = $_POST["eventDescription"];

        $startdate = date('Y-m-d', strtotime($_POST['startdate']));
        $enddate = date('Y-m-d', strtotime($_POST['enddate']));

        // Sanitize inputs
        $eventName = mysqli_real_escape_string($conn, $eventName);
        $Category = mysqli_real_escape_string($conn, $Category);
        $eventDescription = mysqli_real_escape_string($conn, $eventDescription);
        $startdate = mysqli_real_escape_string($conn, $startdate);
        $enddate = mysqli_real_escape_string($conn, $enddate);

        // File upload handling
        $targetDirectory = "eventuploads/";
        $targetFile = $targetDirectory . basename($_FILES["eventimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check file size, format, etc. (as you already did)

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["eventimage"]["tmp_name"], $targetFile)) {
                $image = $targetFile;

                $insertQuery = "INSERT INTO event (eventname, eventdescription, image, Category, startdate, enddate) VALUES ('$eventName', '$eventDescription', '$image', '$Category', '$startdate', '$enddate')";

                if ($conn->query($insertQuery) === TRUE) {
                    echo "<script>alert('Event added successfully!');</script>";
                    // Redirect or display success message
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