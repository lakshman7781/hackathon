<?php
session_start();
// Include the file for database connection
include "connect.php";

if (isset($_POST['submit'])) {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
   
    // Query to check if the username and password match in the database
    $query = "SELECT * FROM users WHERE reg_no = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // If username and password are correct, store user details in session
        $_SESSION['idnum'] = $username;
        // Then redirect to another page
        header("Location: index.php");
        exit; // Always exit after a header redirection
    } else {
        // If username and password do not match, store the attempted username in session
        $_SESSION['attempted_username'] = $username;
        // Redirect to the same page to display an error message
        header("Location: login.php?error=1");
        exit; // Always exit after a header redirection
    }
}
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    <style>
        body::after {
            content: "";
            display: table;
            clear: both;


        }
 /* .forgot-password-link {
  text-align: right;
  margin-top: 10px;
  
}

.forgot-password-link a {
  color: #0077cc;
  text-decoration: none;
  font-size: 14px;
  position: relative;
  
}*/
.forgot-password-link {
  margin-top: 10px;
  margin-bottom: 20px;
  text-align: right;
}

.forgot-password-link a {
  color: #0077cc;
  text-decoration: none;
  font-size: 14px;
  position: relative;
  top: -150px; /* move the link up by 10px */
}

.forgot-password-link a:hover {
  text-decoration: underline;
} 

    </style>
</head>

<body>
<?php include 'dumbheader.php';?>

    <div class="row justify-content-md-center" >
        <div class="#" style="width: 600px; margin:45px; height:900px !important;margin-bottom:-450px!important; ">
            <div class="featured-box featured-box-primary text-start mt-0"style="margin-top:10px !important; ">

                <div class="box-content">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Login Here</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="signup.php" style="text-decoration: none; ">
                                <p class="font-weight-semibold  mb-3" style="color: red; margin-left:-160px; margin-top:5px;"> Register An Account ?</p>
                            </a>


                        </div>


                    </div>
                    <form id="frmSignUp" method="post" action="" class="needs-validation">
    <div class="row">
        <label class="form-label" for="username">Register Number</label>
        <input type="text" id="username" name="username" class="form-control form-control-lg" required>
    </div>
    <div class="row">
        <label class="form-label" for="password">Password</label>
        <input style="margin-bottom: 10px;" type="password" id="password" name="password" class="form-control form-control-lg" required>
    </div>

    <!-- Error message for incorrect credentials -->
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<script>alert("Incorrect username or password!");</script>';
    }
    ?>

    <!-- reCAPTCHA -->
    <div class="g-recaptcha" data-sitekey="6Ldw-2cpAAAAAKCQkKIcOGEgkUBoMTUuRAVE0o_x"></div>
    <br><br>

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary btn-modern float-endy" style="width: 150px; margin-top: 170px;">Login</button>

    <!-- Forgot Password link -->
    <div class="forgot-password-link" style="margin-top: 5px;">
        <a href="forgotverify.php" >Forgot Password?</a>
    </div>
</form>

                    <!-- Replace the variables below. -->
                    <script>
                        function onSubmit(token) {
                            document.getElementById("demo-form").submit();
                        }
                    </script>



                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>