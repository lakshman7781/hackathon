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
            background-color: lightgreen;

        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?> <!-- Check that 'header.php' is properly formatted -->

    <div class="row justify-content-md-center">
        <div class="#" style="width: 600px; margin:45px; height:900px !important;">
            <div class="featured-box featured-box-primary text-start mt-0">
                <div class="box-content">
                    <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Register An Account</h4>
                    <form action="/" id="frmSignUp" method="post" class="needs-validation">
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Register Number</label>
                                <div class="input-group">
                                    <input type="text" name="number" value="" class="form-control form-control-lg" required>
                                    <div class="input-group-append">
                                        <a href="#" class="btn btn-secondary" id="sendOtpLink">Send OTP</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-9">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                                    <label class="custom-control-label text-2" for="terms">I have read and agree to the <a href="#">terms of service</a></label>
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                <input type="submit" value="Register" class="btn btn-primary btn-modern float-end" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                    
                    <script>
    $(document).ready(function() {
        var extraInputAdded = false;

        $("#sendOtpLink").click(function(e) {
            e.preventDefault();

            // Check if the extra input has not been added
            if (!extraInputAdded) {
                // Create the HTML content using jQuery
                var extraInputHtml = '\
                    <div class="row">\
                        <div class="form-group col">\
                            <p class="otp-info" style="color:#0088cc;">Enter the Otp sent to 91 + 7794022444</p>\
                            <input type="text" name="extraInput" class="form-control" required>\
                        </div>\
                    </div>';

                // Append the created HTML content below the existing rows
                $(this).closest('.row').after(extraInputHtml);
                extraInputAdded = true; // Set the flag to true
            }
        });
    });
</script>


                </div>
            </div>
        </div>
    </div>
</body>

</html>