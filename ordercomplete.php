<!DOCTYPE html>
<html lang="en">
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

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

</head>

<body style="background-color:#f2f2f4 !important;">
	<?php include "header.php"; ?>
	<div class="body">


		<div class="row justify-content-center">
			<div style="height: 700px; width:500px;">
				<div id="token-container">
    <div class="card border-width-3 border-radius-0 border-color-success">
        <div class="card-body text-center">
            <p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success me-1"></i> Thank You. Your Order has been received.</p>
        </div>
    </div>

    <div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
        <div class="card-body">
            <h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
            <table class="shop_table">
                <tbody>
                    <tr>
                        <td colspan="2" class="d-block text-color-dark line-height-1 font-weight-semibold">
                            <strong class="text-color-dark">Product Name</strong>
                        </td>
                        <td colspan="2" class="text-end align-top">
                            <strong class="text-color-dark">Amount</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
                        </td>
                        <td class="text-end align-top">
                            <span class="amount font-weight-medium text-color-grey">$15</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-top-0 pt-0">
                            <strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong>
                        </td>
                        <td class="border-top-0 text-end align-top pt-0">
                            <span class="amount font-weight-medium text-color-grey">$15</span>
                        </td>
                    </tr>
                    <tr class="shipping">
                        <td class="border-top-0">
                            <strong class="text-color-dark">Shipping</strong>
                        </td>
                        <td class="border-top-0 text-end">
                            <strong><span class="amount font-weight-medium">Free Shipping</span></strong>
                        </td>
                    </tr>
                    <tr class="total">
                        <td>
                            <strong class="text-color-dark text-3-5">Total</strong>
                        </td>
                        <td class="text-end">
                            <strong class="text-color-dark"><span class="amount text-color-dark text-5">$431</span></strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function downloadContent() {
        // Get the HTML content of the token-container
        var tokenContainerHTML = document.getElementById('token-container').outerHTML;
        // Create a new window to print the content
        var printWindow = window.open('', '', 'height=400,width=600');
        // Write the HTML content to the new window
        printWindow.document.write('<html><head><title>Print</title></head><body>' + tokenContainerHTML + '</body></html>');
        // Print the window
        printWindow.print();
        // Close the new window
        printWindow.close();
    }
</script>
<input type="submit" name="update" value="Download" class="btn btn-primary" style="width: 130px; margin-left:160px" onclick="downloadContent()">

			</div>




			<!-- Vendor -->
			<script src="vendor/plugins/js/plugins.min.js"></script>

			<!-- Theme Base, Components and Settings -->
			<script src="js/theme.js"></script>

			<!-- Current Page Vendor and Views -->
			<script src="js/views/view.shop.js"></script>

			<!-- Theme Custom -->
			<script src="js/custom.js"></script>

			<!-- Theme Initialization Files -->
			<script src="js/theme.init.js"></script>
			<?php include 'footer.php'; ?>
</body>

</html>