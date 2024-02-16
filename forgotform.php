<?php
session_start(); // Start the session

include 'connect.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve registration number from session
    $registration_number = $_SESSION['attempted_username']; // Assuming username is stored in $_SESSION['idnum']

    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if passwords match
    if ($new_password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Prepare SQL statement to update password
        $sql = "UPDATE users SET password=? WHERE reg_no=?";

        // Prepare and bind parameters
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $new_password, $registration_number);

            // Execute the statement
            if ($stmt->execute()) {
                header("Location: login.php");
            } else {
                $error_message = "Error updating password: " . $conn->error;
            }

            // Close statement
            $stmt->close();
        } else {
            $error_message = "Error preparing statement: " . $conn->error;
        }
    }
}
// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 14px;
            margin-top: 20px;
            text-align: center;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Forgot Password</h1>
        <form action="forgotform.php" method="post">
            <!-- <label for="registration_number">Registration Number</label>
            <input type="text" id="registration_number" name="registration_number" required> -->
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <button type="submit">Reset Password</button>
        </form>
        <p>Remembered? <a href="login.php">Sign In!</a></p>
      
    <!-- Display success message -->
    <?php
    if (isset($success_message)) {
        echo "<p class='success-message'>" . $success_message . "</p>";
    }
    ?>
    </div>
</body>
</html>


		