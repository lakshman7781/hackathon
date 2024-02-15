<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">


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