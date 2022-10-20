<?php
$userTechnick = $_POST["Technick"];
require("conn.php");
$insert = $connection->query(
    "INSERT INTO technick (Technick)
    VALUES('$userTechnick');"
);
