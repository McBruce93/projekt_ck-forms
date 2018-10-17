<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projekt_ck/wp-content/plugins/forms_plugin/dbconn.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$days = $_POST['day'];
$jobs = $_POST['job'];

$language = $_SERVER['HTTP_REFERER'];

$daysList = "";
$jobsList = "";

foreach ($days as $day) {
    $daysList .= " - " . $day;
}

for ($i = 0; $i < count($jobs); $i++) {
    $jobsList .= " - " . $jobs[$i];
}

$checkEmailStmt = $nutzyjco_33ef8329->prepare("SELECT * FROM Volunteers WHERE Email=?");
$insertVolunteerStmt = $nutzyjco_33ef8329->prepare("INSERT INTO Volunteers (FirstName, LastName, Email, PhoneNumber) VALUES (?, ?, ?, ?)");
$insertDaysStmt = $nutzyjco_33ef8329->prepare("INSERT INTO Days (Email, WeekDays) VALUES (?, ?)");
$insertJobStmt = $nutzyjco_33ef8329->prepare("INSERT INTO Jobs (Email, JobType) VALUES (?, ?)");

$checkEmailStmt->bind_param("s", $email);
$checkEmailStmt->execute();
$emailRes = $checkEmailStmt->get_result();

if ($emailRes->num_rows !== 0) {
    if (strpos($language, 'danish') !== false) {
    echo "<script>
            alert('Der er allerede oprettet en frivillig, med denne email. Såfremt du vil ændre noget, bedes du kontakte (indsæt rigtig email her)');
            window.location.href='../volunteer_form_danish.html';
        </script>";
    } else {
        echo "<script>
            alert('Someone has already volunteered, using this email. If you would like to make changes, please contact (insert proper email here)');
            window.location.href='../volunteer_form_english.html';
        </script>";
    }
} else {
    $insertVolunteerStmt->bind_param("ssss", $first_name, $last_name, $email, $phone);
    $insertDaysStmt->bind_param('ss', $email, $daysList);
    $insertJobStmt->bind_param('ss', $email, $jobsList);
    if ($insertVolunteerStmt->execute()) {
        $insertDaysStmt->execute();
        $insertJobStmt->execute();
        if (strpos($language, 'danish')) {
            echo "<script>
            alert('Du er nu tilføjet til vores database over mulige frivillige. Såfremt vi vil vide mere, vil du få tilsendt en email, med flere detaljer.');
            window.location.href='../volunteer_form_danish.html';
          </script>";
        } else {
            echo "<script>
            alert('You have now been added to our database, of volunteers. If we are interested, we will send you an email, containing more details.');
            window.location.href='../volunteer_form_english.html';
          </script>";
        }
       
    }
    $insertVolunteerStmt->close();
    $insertDaysStmt->close();
    $insertJobStmt->close();
}
$checkEmailStmt->close();
