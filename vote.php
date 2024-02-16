<?php
session_start();
include "connect.php";

if (isset($_POST['option']) && isset($_SESSION['idnum'])) {
    $option = mysqli_real_escape_string($conn, $_POST['option']);
    $register_no = mysqli_real_escape_string($conn, $_SESSION['idnum']);

    $sql = "INSERT INTO poll_results (register_no, option) VALUES ('$register_no', '$option')";
    mysqli_query($conn, $sql);
}
?>