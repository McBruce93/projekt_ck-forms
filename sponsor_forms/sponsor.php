<?php
define ('SITE_ROOT', realpath(dirname(dirname(dirname(dirname(__FILE__))))));
//include_once "wp-content/plugins/forms_plugin/dbconn.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
//$package = $_POST['package'];
//$uploaded_file = $_POST[''];
$banner = $_POST['banner'];
$details = $_POST['details'];
$target_dir = "wp-content/uploads/";
$target_file = $target_dir . basename($_FILES['image_upload']["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["send"])) {
    $check = getimagesize($_FILES["image_upload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOK = 1;
    } else {
        $uploadOK = 0;
    }
}

// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
//     echo "Sorry, only JPG, JPEG and PNG files are allowed.";
// }

if ($uploadOK == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], SITE_ROOT . '/uploads/' . basename($_FILES['image_upload']['name']))) {
        echo "The file ". basename( $_FILES["image_upload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}