<?php
session_start();
// Include the file to establish a database connection
include 'connect.php';

// Check if the product ID is received
if(isset($_POST['productId'])) {
    // Get the product ID from the POST data
    $productId = $_POST['productId'];
    $reg_no = $_SESSION['idnum'];
    // Write your SQL query to insert the product ID into the database table
    $sql = "INSERT INTO wishlist (productid,reg_no) VALUES ('$productId','$reg_no')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // If insertion is successful, echo a success message with a custom class
        echo "Product added to wishlist successfully!";
    } else {
        // If there's an error with the query, echo the error message
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    }
} else {
    // If the product ID is not received, echo an error message
    echo "<div class='alert alert-danger'>Error: Product ID not received!</div>";
}

// Close the database connection
mysqli_close($conn);
?>
