<?php
session_start();
// Include the file to establish a database connection
include 'connect.php';

// Check if the product ID is received
if(isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $reg_no = $_SESSION['idnum'];

    // Get the quantity of the product in the user's cart
    $cart_quantity_query = "SELECT SUM(cart_quantity) AS cart_quantity FROM cart WHERE productid = '$productId' AND reg_no = '$reg_no'";
    $cart_quantity_result = mysqli_query($conn, $cart_quantity_query);
    $cart_quantity_row = mysqli_fetch_assoc($cart_quantity_result);
    $cart_quantity = $cart_quantity_row['cart_quantity'];

    // Get the stock quantity of the product
    $stock_query = "SELECT stock_quantity FROM seller WHERE productid = '$productId'";
    $stock_result = mysqli_query($conn, $stock_query);
    $stock_row = mysqli_fetch_assoc($stock_result);
    $stock_quantity = $stock_row['stock_quantity'];

    // Calculate the total quantity of the product in the cart and check if it exceeds the stock quantity
    if ($cart_quantity >= $stock_quantity) {
        echo "You cannot add more of this product to your cart. Stock quantity exceeded.";
    } else {
        // Check if the user has already added this product to their cart
        $check_cart_query = "SELECT * FROM cart WHERE productid = '$productId' AND reg_no = '$reg_no'";
        $check_cart_result = mysqli_query($conn, $check_cart_query);
        $num_rows = mysqli_num_rows($check_cart_result);

        if ($num_rows > 0) {
            // If the product is already in the cart, update the quantity
            $update_query = "UPDATE cart SET cart_quantity = cart_quantity + 1 WHERE productid = '$productId' AND reg_no = '$reg_no'";
            if(mysqli_query($conn, $update_query)) {
                echo "Quantity Updated in Cart!";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            // Write your SQL query to insert the product ID into the database table
            $insert_query = "INSERT INTO cart (productid, reg_no, cart_quantity) VALUES ('$productId','$reg_no', 1)";

            // Execute the query
            if (mysqli_query($conn, $insert_query)) {
                echo "Product Added to Cart successfully!";
            } else {
                echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
            }
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
