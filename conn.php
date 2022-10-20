<?php
$servername = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'daten_1';
try {
    $connection = new PDO('mysql:host=' . $servername . '; dbname=' . $dbName . '; charset=utf8', $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection successfully";
} catch (PDOException $e) {
    echo "connection faild" . $e->getMessage();
}
