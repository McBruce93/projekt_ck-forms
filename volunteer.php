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
    echo "<script>
            alert('Du skal udfylde alle felterne');
            window.location.href='../volunteer_form_danish.html';
        </script>";
}

function testEmail($email)
{
    $testEmailQuery = "SELECT * FROM Volunteers WHERE Email='$email';";
    $result = mysqli_query($dbc, $testEmailQuery);
    if (!$row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<script>
            alert('Der er allerede oprettet en frivillig, med denne email. Såfremt du vil ændre noget, skal du kontakte system admin (indsæt rigtig email her)');
            window.location.href='../volunteer_form_danish.html';
        </script>";
    }
}
