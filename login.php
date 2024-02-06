<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Document</title>
    <style>
        body::after {
            content: "";
            display: table;
            clear: both;


        }
    </style>
</head>

<body>
    
<?php
// require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Your login logic goes here

    // Verify reCAPTCHA
    $recaptcha_secret = "6Ldw-2cpAAAAAOnPxnirztcAyRzWxe1Iei7AiLZx";
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $result = json_decode($result, true);

    if ($result['success']) {
        // CAPTCHA verification passed, process the login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Your authentication logic goes here
        // Example: Check credentials against a database
        if ($username === 'demo' && $password === 'password') {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        // CAPTCHA verification failed
        echo "CAPTCHA verification failed. Please try again.";
    }
}
?>
    <?php include 'header.php'; ?> <!-- Check that 'header.php' is properly formatted -->

    <div class="row justify-content-md-center">
        <div class="#" style="width: 600px; margin:45px; height:900px !important;">
            <div class="featured-box featured-box-primary text-start mt-0">
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Login Here</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="signup.php" style="text-decoration: none; ">
                                <h4 class="font-weight-semibold text-4 text-uppercase mb-3" style="color: green; margin-left:-160px;"> Register An Account ?</h4>
                            </a>


                        </div>


                    </div>
                    <form action="/" id="frmSignUp" method="post" class="needs-validation">
                        <div class="row">
                            <label class="form-label" for="username">Register Number</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg" required>
                        </div>
                        <div class="row">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                        </div>
                      
                        <br>
                        <div class="g-recaptcha" data-sitekey="6Ldw-2cpAAAAAKCQkKIcOGEgkUBoMTUuRAVE0o_x"></div><br><br>
                        <button type="submit" class="btn btn-primary btn-modern float-endy" style="width: 150px; margin-top: 170px;">Login</button>

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
   
</body>

</html>