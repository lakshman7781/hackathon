<?php 
include('connect.php');
$amount = $_GET['amount'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<a  class="buynow">Buy Now</a>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$(document).ready(function() {
    $(".buynow").click(function(e) {
        e.preventDefault(); // Prevent default behavior of anchor tag click
        var amount = <?php echo $amount; ?>;
        var productname = "Xerox"; // Assuming this variable is defined elsewhere in your code
        var options = {
            "key": "rzp_live_2D4bAGktbYxm16",
            "amount": amount * 100,
            "name": "Campus Online",
            "description": productname,
            "image": "http://localhost/hackathon/img/Campus.png",
            "handler": function(response) {
                var paymentid = response.razorpay_payment_id;
                $.ajax({
                    url: "payment-process.php",
                    type: "POST",
                    data: { product_id: 'your_product_id', payment_id: paymentid }, // Replace 'your_product_id' with the actual product ID
                    success: function(finalresponse) {
                        if (finalresponse == 'done') {
                            window.location.href = "http://localhost/hackathon/success.php";
                        } else {
                            alert('Please check console.log to find error');
                            console.log(finalresponse);
                        }
                    }
                });
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    });
});
</script>

</body>
</html>
