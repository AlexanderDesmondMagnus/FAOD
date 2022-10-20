<?php

$userTechnick = $_POST["Gebäude"];
require("conn.php");
$insert = $connection->query(
    "INSERT INTO gebäude (Gebäude)
    VALUES('$userTechnick');"
);
