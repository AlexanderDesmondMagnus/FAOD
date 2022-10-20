<?php


$userTechnick = $_POST["Rang"];
require("conn.php");
$insert = $connection->query(
    "INSERT INTO rang (Rang)
    VALUES('$userTechnick');"
);
