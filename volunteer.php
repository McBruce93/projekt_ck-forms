<?php
include_once 'dbconn.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$days[] = $_POST['day'];
$job[] = $_POST['job'];


$testEmailQuery = "SELECT * FROM Volunteers WHERE Email='$email';";
$result = mysqli_query($nutzyjco_33ef8329, $testEmailQuery);
if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<script>
        alert('Der er allerede oprettet en frivillig, med denne email. Såfremt du vil ændre noget, skal du kontakte system admin (indsæt rigtig email her)');
        window.location.href='../volunteer_form_danish.html';
    </script>";
} else {
    echo "Something!!";
}
