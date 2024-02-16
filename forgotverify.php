<?php
session_start();

include 'connect.php';
// Function to send OTP using Twilio
function sendOTP($mobileNumber, $otp)
{
    // Your Twilio credentials and other configurations
    require_once 'Twilio/autoload.php';

    // Twilio account credentials
    $sid = "AC2015e1f29a63bf5ea7005c4e3de06089"; // Your Twilio SID
    $token = "7e60ef33e4e04c5552b74a47012292e9"; // Your Twilio Auth Token
    $twilioNumber = "+13416675439"; // Your Twilio phone number

    // Prepend "91" to the mobile number
    $mobileNumber = "+91" . $mobileNumber;

    // Construct OTP message
    $message = "Your OTP is: $otp";

    // Initialize Twilio client
    $client = new Twilio\Rest\Client($sid, $token);

    // Send OTP message
    $client->messages->create(
        $mobileNumber,
        [
            'from' => $twilioNumber,
            'body' => $message
        ]
    );
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // If OTP verification is requested
    if (isset($_POST['verify'])) {
        $user_otp = $_POST['otp'];
        $stored_otp = $_SESSION['otp'];

        // Compare the user-entered OTP with the stored OTP
        if ($stored_otp == $user_otp) {
            // If OTP matches, display a success message
            $successMessage = "Login Successful";

            // Redirect to forgotform.php for password change
            header("Location: forgotform.php");
            exit(); // Terminate script execution after redirection
        } else {
            // If OTP does not match, display an error message
            $error = "Wrong OTP";
        }
    } else {
        // If registration number form is submitted
        $regNumber = $_POST['regNumber'];
        if (empty($regNumber)) {
            $error = "Please enter a registration number.";
        } else {
            // Execute a query to retrieve mobile number based on registration number
            $query = "SELECT mobile FROM verification WHERE registration = ?";
            if ($stmt = $conn->prepare($query)) {
                $stmt->bind_param("s", $regNumber);
                if ($stmt->execute()) {
                    $stmt->bind_result($mobileNumber);
                    if ($stmt->fetch()) {
                        // Generate OTP
                        $otp = rand(1000, 9999);

                        // Send OTP to the mobile number
                        sendOTP($mobileNumber, $otp);

                        // Store OTP in session for verification
                        $_SESSION['otp'] = $otp;

                        // Display OTP entry form
                        $showOTPForm = true;
                    } else {
                        $error = "No mobile number found for the provided registration number.";
                    }
                } else {
                    $error = "Error executing query: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $error = "Error preparing statement: " . $conn->error;
            }
        }
    }
}
$conn->close();
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
    <style>
        body::after {
            content: "";
            display: table;
            clear: both;


        }
    </style>
</head>

<body>
    <!-- Check that 'header.php' is properly formatted -->

    <div class="row justify-content-md-center" style="margin-top:50px !important;">
        <div class="#" style="width: 600px; margin:45px;margin-top:150px; height:900px !important;">
            <div class="featured-box featured-box-primary text-start mt-0">
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Reset ur Passowrd</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            


                        </div>

                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation">
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Register Number</label>
                                <div class="input-group">
                                    <input type="text" id="regNumber" name="regNumber" class="form-control form-control-lg" required value="<?php echo isset($regNumber) ? htmlspecialchars($regNumber) : ''; ?>">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div id="result"></div>
                </div>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                <style>
                    .otp-input {
                        width: 2.5em;
                        height: 2.5em;
                        text-align: center;
                        margin-left: 15px;
                        border-radius: 5px;
                        border-color: #ced4da;
                    }
                </style>
                <script>
                    function moveToNext(input) {
                        var maxLength = parseInt(input.getAttribute('maxlength'));
                        var currentLength = input.value.length;

                        if (currentLength >= maxLength) {
                            var nextInput = input.nextElementSibling;

                            while (nextInput) {
                                if (nextInput.tagName.toLowerCase() === 'input') {
                                    nextInput.focus();
                                    break;
                                }
                                nextInput = nextInput.nextElementSibling;
                            }
                        }
                    }
                </script>
                <!-- <form action="/" id="SignUp" method="post" class="needs-validation">
                    <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />
                    <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />
                    <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />
                    <input type="text" style="margin-bottom: 10px;" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />

                    <div class="row">
                        <div class="form-group col-lg-9">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="terms" required>
                                <label class="custom-control-label text-2" for="terms">I have read and agree to the <a href="#">terms of service</a></label>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <button type="submit" class="btn btn-primary btn-modern float-endy" name="verify">Verify</button>
                        </div>
                    </div>
                </form> -->
                <?php if (isset($showOTPForm) && $showOTPForm) : ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation" style="margin-top: -30px;">
        <label class="form-label" style="margin-left: 30px;">Enter OTP</label>

        <div class="row">
            <div class="form-group col" style="margin-left: 10px;">
                <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />
                <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />
                <input type="text" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />
                <input type="text" style="margin-bottom: 10px;" class="otp-input" maxlength="1" oninput="moveToNext(this)" required />

                <!-- Hidden input field to store concatenated OTP -->
                <input type="hidden" name="otp" id="otp">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-9">
                <div class="custom-control custom-checkbox" style="margin-left: 10px;">
                    <input type="checkbox" name="terms" class="custom-control-input" id="terms" required style="margin-left: 10px;">
                    <label class="custom-control-label text-2" style="margin-left: 20px;" for="terms">I have read and agree to the <a href="#">terms of service</a></label>
                </div>
            </div>
            <div class="form-group col-lg-3">
                <button type="submit" class="btn btn-primary btn-modern float-endy" name="verify">Verify</button>
            </div>
        </div>
    </form>
    <?php endif; ?>
    



<script>
    function moveToNext(input) {
        var maxLength = parseInt(input.getAttribute('maxlength'));
        var currentLength = input.value.length;

        if (currentLength >= maxLength) {
            var nextInput = input.nextElementSibling;

            while (nextInput) {
                if (nextInput.tagName.toLowerCase() === 'input') {
                    nextInput.focus();
                    break;
                }
                nextInput = nextInput.nextElementSibling;
            }
        }

        // Concatenate the input values
        var otpInputs = document.querySelectorAll('.otp-input');
        var concatenatedOTP = "";
        otpInputs.forEach(function(input) {
            concatenatedOTP += input.value;
        });

        // Assign the concatenated value to the hidden input field named "otp"
        document.getElementById('otp').value = concatenatedOTP;
    }
</script>




            </div>
        </div>
    </div>
    </div>
</body>

</html>
