<?php
include_once 'dbhandler.php';
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])
    && isset($_POST['phone']) && isset($_POST['day']) && isset($_POST['job'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $days[] = $_POST['day'];
    $job[] = $_POST['job'];
} else {
    echo "<script>alert('Du skal udfylde alle punkterne.')</script>";
}
