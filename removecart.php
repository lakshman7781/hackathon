
<?php
session_start();
// Include the file to establish a database connection
include 'connect.php';

// Check if the product ID is received
if(isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $reg_no = $_SESSION['idnum'];

    // Write your SQL query to delete the product from the cart table
    $sql = "DELETE FROM cart WHERE productid = '$productId' AND reg_no = '$reg_no'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Product removed from Cart successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>