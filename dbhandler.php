<?php

/**
 * This is the file for creating the Database connection. This file contains
 * development information, and will be changed, when in production.
 */

$dbc = mysqli_connect("mysql71.unoeuro.com", "cck_webogit_dk", "CecilieChristofferKasper", "cck_webogit_dk_db2", "3306");
// if (!$dbc) {
//     echo "Unable to connect. Error: " . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// } else {
//     echo "Connection is working! WOOHOO!";
// }
