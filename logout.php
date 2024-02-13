<?php
// Start or resume the session
session_start();

// Destroy all session data
session_destroy();

// Redirect the user to the login page or any other page after logout
header("Location: dumbindex.php");
exit; // Ensure that no more output is sent after the redirect
?>
