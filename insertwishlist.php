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
        // If insertion is successful, echo a success message
        echo "Product added to wishlist successfully!";
    } else {
        // If there's an error with the query, echo the error message
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // If the product ID is not received, echo an error message
    echo "Error: Product ID not received!";
}

// Close the database connection
mysqli_close($conn);
?>
