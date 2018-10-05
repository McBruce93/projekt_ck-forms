<?php
include_once 'dbconn.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$days[] = $_POST['day'];
$job[] = $_POST['job'];

$stmt = $nutzyjco_33ef8329->prepare("SELECT * FROM Volunteers WHERE Email=?");
$stmt->bind_param("s", $email);

$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows !== 0) {
    echo "<script>
            alert('Der er allerede oprettet en frivillig, med denne email. Såfremt du vil ændre noget, skal du kontakte system admin (indsæt rigtig email her)');
            window.location.href='../volunteer_form_danish.html';
        </script>";
} else {
    
    echo "It works!";
}
$stmt->close();

