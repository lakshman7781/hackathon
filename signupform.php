<?php
session_start();

// Check if the registration number is set in the session
if (isset($_GET['regNumber'])) {
    $regNumber = $_GET['regNumber'];


    // Now you can use $regNumber variable to display or process the registration number
} else {
    // If the registration number is not set in the session, handle the situation accordingly
   
}

// Don't forget to unset the session variable if it's no longer needed

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

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

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- latest css -->
    <link rel="stylesheet" href="css/latest.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
</head>

<body>
    <!-- Check that 'header.php' is properly formatted -->

    <div class="row justify-content-md-center" style="margin-top:-30px !important;">
        <div class="#" style="width: 600px; margin-top:150px !important;">
            <div class="featured-box featured-box-primary text-start mt-0">
                <div class="box-content">
                <div class="row">
                    <div class="">
                        <h3 style="text-align: left; color: #0088cc; text-transform: none; ">Welcome to Campus Online</h3> <br>
                    </div>
                </div>

                <form id="myForm" class="needs-validation">
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
                                <option value="">1 Year</option>
                                <option>2 Year</option>
                                <option>3 Year</option>
                                <option>4 Year</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Set Password</label>
                            <input type="text" class="form-control" id="validationDefault05" required>
                        </div>
                        <!-- Display the registration number directly -->
                        <div class="col-md-6 mb-6">
   
   <!-- Display the registration number directly -->
<div class="col-md-6 mb-6">
    <label for="validationDefault03">RegistrationNumber</label>
    <input type="text" class="form-control" id="validationDefault04" readonly value="<?php echo isset($_SESSION['regNumber']) ? htmlspecialchars($_SESSION['regNumber']) : ''; ?>">
</div>


</div>

                       
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" style="text-align:left !important; cursor: pointer;" for="invalidCheck2" id="termsLabel" >
                                Agree to terms and conditions
                            </label>
                            <button type="submit" class="btn btn-primary btn-modern float-endy" style="margin-left:30px; width:150px">Register</button>
                        </div>
                    </div>
                </form>
         
                
                </div>
        </div>
    </div>
    </div>
    
</body>

</html>
      
    