<?php

$userTechnick = $_POST["Lehrkörper"];
require("conn.php");
$insert = $connection->query(
    "INSERT INTO lehrkörper (Lehrkörper)
    VALUES('$userTechnick');"
);
