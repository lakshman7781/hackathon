<?php
session_start();
// Include the file to establish a database connection
include 'connect.php';

// Check if the product ID is received
if(isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $reg_no = $_SESSION['idnum'];

    // Get the quantity of the product in the user's cart
    $cart_quantity_query = "SELECT cart_quantity FROM cart WHERE productid = '$productId' AND reg_no = '$reg_no'";
    $cart_quantity_result = mysqli_query($conn, $cart_quantity_query);
    $cart_quantity_row = mysqli_fetch_assoc($cart_quantity_result);
    $cart_quantity = $cart_quantity_row['cart_quantity'];

    if ($cart_quantity > 1) {
        // If the quantity is greater than 1, decrement it by 1
        $update_query = "UPDATE cart SET cart_quantity = cart_quantity - 1 WHERE productid = '$productId' AND reg_no = '$reg_no'";
        if(mysqli_query($conn, $update_query)) {
            echo "Product quantity decremented in Cart!";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        // If the quantity is 1, delete the product from the cart
        $delete_query = "DELETE FROM cart WHERE productid = '$productId' AND reg_no = '$reg_no'";
        if(mysqli_query($conn, $delete_query)) {
            echo "Product removed from Cart successfully!";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
