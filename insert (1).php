<?php

// Verbindung herstellen

require('dbcon.php');

$userName = $_POST['userKadetten'];
$userRang = $_POST['userRang'];
$userSpezial = $_POST['userSpezial'];
$userGebäude = $_POST['userGebäude'];
$userTechnick = $_POST['userTechnick'];
$userLehrkörper = $_POST['userLehrkörper'];
$userKadettTechnick = $_POST['userKadettTechnick'];
$userKadettLehrkörper = $_POST['userKadettLehrkörper'];


$insert = $connection->query(
    "INSERT INTO kadetten (Name, Rang, Special, Gebäude, Technick, Lehrkörper)
    VALUES('$userName, $userRang, $userSpezial, $userGebäude, $userTechnick, $userLehrkörper');"
);








$connection = null;
