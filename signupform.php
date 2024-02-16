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
<?php
include 'connect.php';

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Check if all required fields are filled
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phonenumber']) && !empty($_POST['year']) && !empty($_POST['password'])) {
        
        // Set parameters
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phonenumber"];
        $academicYear = $_POST["year"];
        $password = $_POST["password"];

        // Retrieve registration number from verification table where mobile number matches
        $verificationQuery = "SELECT registration FROM verification WHERE mobile = '$phoneNumber'";
        $verificationResult = $conn->query($verificationQuery);

        // Check if the registration number exists in the verification table
        if ($verificationResult->num_rows > 0) {
            // Fetch registration number from the verification table
            $row = $verificationResult->fetch_assoc();
            $registrationNumber = $row["registration"];

            // Insert data into database table
            $insertQuery = "INSERT INTO users (firstname, lastname, email, phonenumber, year, password, reg_no) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$academicYear', '$password', '$registrationNumber')";
            
        

            if ($conn->query($insertQuery) === TRUE) {
                echo "<script>alert('Registration successful!');</script>";
                header("Location: login.php");
              


            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        } else {
            echo "Invalid registration number";
        }
    } else {
        echo "All fields are required";
    }
}
?>

<body>
<?php include 'dumbheader.php';?>

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

                    <form id="myForm"  action=" " method="post" class="needs-validation">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" name="firstname" value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" name="lastname" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault03">Email</label>
                                <input type="email" class="form-control" id="validationDefault03" name="email" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault05">Phone Number</label>
                                <input type="text" class="form-control" id="validationDefault05" name="phonenumber" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault04">Academic Year</label>
                                <select class="form-select form-control" id="validationDefault04" name="year" required>
                                    <option value="1">1 Year</option>
                                    <option>2 Year</option>
                                    <option>3 Year</option>
                                    <option>4 Year</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault03">Set Password</label>
                                <input type="text" class="form-control" id="validationDefault05" name="password" required>
                            </div>
                          

                        </div>


                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" style="text-align:left !important; cursor: pointer;" for="invalidCheck2" id="termsLabel">
                            Agree to terms and conditions
                        </label>
                        <button type="submit"  name="submit"class="btn btn-primary btn-modern float-endy" style="margin-left:30px; width:150px">Register</button>
                    </div>
                </div>
                </form>


            </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>