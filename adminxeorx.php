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
    <!-- <link rel="stylesheet" href="css/profile.css"> -->
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

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .form-labell {
            margin-bottom: 5px;
            text-align: left;
            font-weight: bold;
        }

        .form-control-container {
            position: relative;
            width: 70%;
            /* Reduced width */
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .edit-save-text {
            position: absolute;
            top: -20px;
            /* Adjust as needed */
            right: 5px;
            font-size: 12px;
            color: #007bff;
            cursor: pointer;
        }

        .accordion {
            display: flex;
            flex-direction: column;
            width: 600px;
        }

        .question {
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            cursor: pointer;
            border: 1px solid #ddd;
            text-align: left;
        }

        .answer {
            display: none;
            padding: 10px;
            text-align: start;

        }

        .question.active {
            background-color: #ddd;
        }

        .answer.active {
            display: block;
        }

        /* Button Container */
        .button-container {
            text-align: center;
            justify-content: space-evenly;
            text-align: center;
            /* Center buttons horizontally within the container */
        }

        /* Save Changes Button */
        .custom-btn.primary-btn {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            /* Adjusted padding for reduced width */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 120px;
            /* Set desired width */
            height: 40px;
            /* Set desired height */
            display: inline-block;
            /* Ensure inline-block to apply width and height */
            line-height: 40px;
            text-align: center;
            /* Center text vertically */
        }

        .custom-btn.primary-btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        /* Cancel Button */
        .custom-btn.default-btn {
            background-color: #fff;
            color: #007bff;
            border: 1px solid #007bff;
            /* Adjusted padding for reduced width */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            width: 120px;
            /* Set desired width */
            height: 40px;
            /* Set desired height */
            display: inline-block;
            /* Ensure inline-block to apply width and height */
            line-height: 40px;
            /* Center text vertically */
        }

        .custom-btn.default-btn:hover {
            background-color: #f0f0f0;
            color: #0056b3;
        }
    </style>
    </style>
</head>

<body data-plugin-page-transition>

    <?php include 'header.php'; ?>
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
                <li><a href="adminstdetails.php">Students Details</a></li>
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
                <li><a href="adminaddevents.php">Add Events</a></li>
                <li><a href="#">Add Poll</a></li>
            </ul>
        </li>

        <li>
            <a href="adminxeorx.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
                </svg>
                &nbsp; Xerox
            </a>
           
        </li>

        <li class="">
            <a href="adminaddfood.php">
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
    min-width: 150px; /* Adjust as needed */
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
   
        table {
  width: 90%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
}

/* CSS for table header */
th {
  background-color: #f2f2f2;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}

/* CSS for table body */
td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

/* Alternating row colors */
tr:nth-child(even) {
  background-color: #f9f9f9;
}

/* Hover effect */
tr:hover {
  background-color: #f2f2f2;
}
    </style>


    <div class="right-section">
        <div class="right-section-inner">

            <div role="main" class="main shop pb-4">




                <section class="card card-admin">
                    <header class="card-header">
                        <h4 style="color: #0088cc;" class="card-title">Xeorox Orders</h4 style="color: #0088cc;">
                    </header>
                    <div class="card-body">
                        <div class="row">

                        </div>
                        <table >
                            <thead style=" width: 500px !important;">
                                <tr>
                                    <th> S.No</th>
                                    <th>Time & Date</th>
                                    <th> File Name</th>
                                    <th>Category</th>
                                    <th>Printing Sides</th>
                                    <th>Cover</th>
                                    <th>No.of pages</th>
                                    <th>Amount Paid</th>
                                    <th>Phone Number</th>
                                    <th>Download</th>

                                </tr>
                            </thead>
                            <tbody >
                                <?php
                                // Include the file to establish a database connection
                                include 'connect.php';

                                // Write your SQL query
                                // Write your SQL query
                                $sql = "SELECT *, users.phonenumber 
                                 FROM xeorx
                                 INNER JOIN users ON xeorx.reg_no = users.reg_no";
                                // Execute the query
                                $result = mysqli_query($conn, $sql);

                                // Check if there are any results
                                if (mysqli_num_rows($result) > 0) {
                                    // Output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Output the HTML structure with product details
                                ?>
                                        <tr data-item-id="1">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['time']; ?></td>
                                            <td><?php echo $row['file']; ?></td>
                                            <td><?php echo $row['category']; ?></td>
                                            <td><?php echo $row['category1']; ?></td>
                                            <td><?php echo $row['category2']; ?></td>
                                            <td><?php echo $row['pages']; ?></td>
                                            <td><?php echo $row['total']; ?></td>
                                            <td><?php echo $row['phonenumber']; ?></td>
                                            <td><a href="uploads/<?php echo $row['file']; ?>" download>Download</a></td>




                                            <td class="actions">
                                                <a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                        </tr>

                            </tbody>
                    <?php
                                    }
                                } else {
                                    echo "0 results";
                                }

                                // Close the database connection
                                mysqli_close($conn);
                    ?>

                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>







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
</body>

</html>