<?php
include_once "../dbconn.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$language = $_SERVER['HTTP_REFERER'];

$insertContactStmt = $nutzyjco_33ef8329->prepare("INSERT INTO Contact (FirstName, LastName, Email, Subject, Message) VALUES (?, ?, ?, ?, ?)");
$insertContactStmt->bind_param('sssss', $first_name, $last_name, $email, $subject, $message);

if ($insertContactStmt->execute()) {
    if (strpos($language, 'danish') !== false) {
        echo "<script>alert('Din besked er sendt, og vi svarer dig så hurtigt som muligt.');</script>";
    } else {
        echo "<script>alert('Your message has been sent, and we will be in touch as soon as possible.');</script>";
    }
} else {
    if (strpos($language, 'danish') !== false) {
        echo "<script>alert('Det gik noget galt. Prøv venligst igen.');</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}

$to = 'kasper.andreasen@gmail.com';
$headers = "From: $first_name $last_name - " . $email;
mail($to, $subject, $message, $headers);
