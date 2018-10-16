<?php
include_once '../wp-content/plugins/forms_plugin/dbconn.php';
define ('UPLOAD_ROOT', realpath(dirname(dirname(dirname(dirname(((((__FILE__))))))))));
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$sponsor_level = $_POST['sponsor_level'];
$banner = $_POST['banner'];

if (isset($_POST['details'])) {
    $details = $_POST['details'];
} else {
    $details = "No details provided";
}

$target_dir = "wp-content/uploads/";
$target_file = $target_dir . basename($_FILES['pic']["name"]);
$uploadOK = 1;
$insertSponsorStmt = $nutzyjco_33ef8329->prepare("INSERT INTO Sponsor (FirstName, LastName, CompanyName, Email, PhoneNumber, SponsorLevel, BannerAtTrack, Details, ImageName) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$insertSponsorStmt->bind_param('sssssssss', $first_name, $last_name, $company_name, $email, $phone, $sponsor_level, $banner, $details, basename($_FILES['pic']['name']));

if (isset($_POST["send"])) {
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOK = 1;
    } else {
        $uploadOK = 0;
    }
}

if ($uploadOK == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], UPLOAD_ROOT . "/uploads/uploaded_sponsor_images/" . basename($_FILES['pic']['name']))) {
        $insertSponsorStmt->execute();
        if ($insertSponsorStmt->affected_rows() === 1) {
            echo "Your image " . basename($_FILES['pic']['name']) . " has been successfully uploaded, and your details have been saved. We will be in contact.";
        }
    } else {
        echo "Sorry, there was an error uploading your file. None of your info has been saved. Please try again, or contact a sysadmin.";
    }
}


