<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <?php include 'header.php'; ?> <!-- Check that 'header.php' is properly formatted -->

    <div class="row justify-content-md-center">
        <div class="#" style="width: 600px; margin:45px; height:900px !important;">
            <div class="featured-box featured-box-primary text-start mt-0">
                <div class="box-content">
                <div class="row">
                <div class="col-md-6 mb-3">
                            <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Registering An Account</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="login.php" style="text-decoration: none; ">
                                <h4 class="font-weight-semibold text-4 text-uppercase mb-3" style="color: green; margin-left:-35px;"> Login ?</h4>
                            </a>


                        </div>

                    </div>
                    <form action="/" id="frmSignUp" method="post" class="needs-validation">
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Register Number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary">Send OTP</button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </form>


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
                    <form action="/" id="SignUp" method="post" class="needs-validation">
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
                                <a id="boxcontent">
                                <button type="submit" class="btn btn-primary btn-modern float-endy">Verify</button>
                                </a> <!-- <button class="btn btn-primary btn-modern float-endy" style="bottom:0 !important; right:0;" type="submit">Submit form</button> -->
                            </div>
                        </div>
                    </form>

                    <!-- id="boxcontent" -->


                    <script>
                        document.getElementById('boxcontent').addEventListener('click', function() {
                            var boxarea = document.querySelector('.box-content');

                            // Modify the content dynamically using insertAdjacentHTML
                            boxarea.innerHTML = `
        <div class="row">
    <div class="">
        <h3 style="text-align: left; color: #0088cc; text-transform: none; margin: bottom -10px !important;">Welcome to Campus Online</h3> 
    </div>
    <div class="col-md-6 mb-3 mt-3">
       
    </div>
</div>

				
				<form id="myForm" class="needs-validation">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">First name</label>
                <input type="text" class="form-control" name="firstname" id="validationDefault01" value="" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault02">Last name</label>
                <input type="text" class="form-control" name="lastname" id="validationDefault02" value="" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Email</label>
                <input type="email" class="form-control" name="email" id="validationDefault03" required>
            </div>

			
			<div class="col-md-3 mb-3">
				<label for="validationDefault05">Phone Number</label>
				<input type="text" class="form-control" name="phonenumber" id="validationDefault05" required>
			</div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault04">Academic Year</label>
                <select class="form-select form-control" name="year" id="validationDefault04" required>
                    <option  value="">1 Year</option>
                    <option>2 Year</option>
					<option>3 Year</option>
					<option>4 Year</option>
                </select>
            </div>
			<div class="col-md-6 mb-3">
    <label for="validationDefault03">Register Number</label>
    <input type="text" class="form-control" name="registernumb" id="validationDefault05" required>
</div>
<div class="col-md-6 mb-3">
    <label for="validationDefault03">Password</label>
    <input type="text" class="form-control" name="password" id="validationDefault06" required>
</div>


           
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" style="text-align:left !important; cursor: pointer;" for="invalidCheck2" id="termsLabel" >
                    Agree to terms and conditions
                </label>
                <button type="register" name="register" class="btn btn-primary btn-modern float-endy" style="margin-left:30px; width:150px">Register</button>
            </div>
        </div>
    
       
       
    </form>

    
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
    
</div>
            
        `;
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
// Step 1: Handle form submission
if (isset($_POST['register'])) {

    // Step 2: Establish a connection to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "campusonline";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Step 3: Retrieve form data
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $academicyear = mysqli_real_escape_string($conn, $_POST['academicyear']);
    $registernumber = mysqli_real_escape_string($conn, $_POST['registernumb']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Step 5: Prepare SQL INSERT statement
    $sql = "INSERT INTO register (firstname, lastname, email, phonenumber, year, registernumb, password) 
            VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$academicyear', '$registernumber', '$password')";

    // Step 6: Execute INSERT statement
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Step 7: Close database connection
    mysqli_close($conn);
}
?>

