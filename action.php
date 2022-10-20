<?php

// Verbindung herstellen

require('dbcon.php');

$userName = $_POST['userKadetten'];
$userRang = $_POST['Spezial'];



// $insert = $connection->query('
//     "UPDATE kadetten SET Rang = $userRang
//     WHERE Kadetten_id = $userName ');

$insert = $connection->query('
    "UPDATE kadetten SET Spezial = $userRang
    WHERE Kadetten_id = $userName ');



// https://www.informatikzentrale.de/php-formular-gleiche-seite.html