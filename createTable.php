<?php

require('conn.php');




$createTable = $connection->query('CREATE TABLE Kadetten(
    Kadetten_id INT AUTO_INCREMENT, 
    Rang INT ,
    Kadetten INT,
    Gebäude INT,
    Spezial INT,
    Technick INT,
    Lehrkörper INT,
    Name varchar(255),

        primary key(Kadetten_id)) 
    ENGINE = INNODB');



// $altertable = $connection->query('ALTER TABLE kadetten_technick
// ADD FOREIGN KEY(Kadetten) REFERENCES kadetten(Kadetten_id);');
// $altertable = $connection->query('ALTER TABLE kadetten_technick
// -- ADD FOREIGN KEY(Technick) REFERENCES technick(Technick_id);');

$createTable = $connection->query('CREATE TABLE Rang(
    Rang_id INT AUTO_INCREMENT, 
    Rang varchar(255) ,
            primary key(Rang_id)) 
    ENGINE = INNODB');

$createTable = $connection->query('CREATE TABLE Spezial(
    Spezial_id INT AUTO_INCREMENT, 
    Spezials VARCHAR(255),
        primary key(Spezial_id)) 
    ENGINE = INNODB');

$createTable = $connection->query('CREATE TABLE Gebäude(
    Gebäude_id INT AUTO_INCREMENT, 
    Gebäude VARCHAR(255),
        primary key(Gebäude_id)) 
    ENGINE = INNODB');

$createTable = $connection->query('CREATE TABLE Technick(
    Technick_id INT AUTO_INCREMENT, 
    Technick VARCHAR(255),
            primary key(Technick_id)) 
    ENGINE = INNODB');

$createTable = $connection->query('CREATE TABLE Lehrkörper(
    Lehrkörper_id INT AUTO_INCREMENT, 
    Lehrkörper VARCHAR(255),
        primary key(Lehrkörper_id)) 
    ENGINE = INNODB');

$createTable = $connection->query('CREATE TABLE Kadetten_Technick(
    Kadetten_Technick_id INT AUTO_INCREMENT, 
    Kadetten INT , Technick INT ,
               primary key(Kadetten_Technick_id)) 
    ENGINE = INNODB');

$createTable = $connection->query('CREATE TABLE Kadetten_Lehrkörper(
    Kadetten_Lehrkörper_id INT AUTO_INCREMENT, 
    Kadetten INT , Lehrkörper INT ,
        primary key(Kadetten_Lehrkörper_id)) 
    ENGINE = INNODB');


$altertable = $connection->query('ALTER TABLE kadetten
    ADD FOREIGN KEY(Rang) REFERENCES rang(Rang_id);');

$altertable = $connection->query('ALTER TABLE kadetten
    ADD FOREIGN KEY(Spezial) REFERENCES spezial(Spezial_id);');

$altertable = $connection->query('ALTER TABLE kadetten
    ADD FOREIGN KEY(Gebäude) REFERENCES gebäude(Gebäude_id);');

$altertable = $connection->query('ALTER TABLE kadetten
    ADD FOREIGN KEY(Technick) REFERENCES technick(Technick_id);');

$altertable = $connection->query('ALTER TABLE kadetten
    ADD FOREIGN KEY(Lehrkörper) REFERENCES lehrkörper(Lehrkörper_id);');


$altertable = $connection->query('ALTER TABLE kadetten_technick
ADD FOREIGN KEY(Kadetten) REFERENCES kadetten(Kadetten_id);');
$altertable = $connection->query('ALTER TABLE kadetten_technick
ADD FOREIGN KEY(Technick) REFERENCES technick(Technick_id);');

$altertable = $connection->query('ALTER TABLE kadetten_lehrkörper
ADD FOREIGN KEY(Kadetten) REFERENCES kadetten(Kadetten_id);');
$altertable = $connection->query('ALTER TABLE kadetten_lehrkörper
ADD FOREIGN KEY(Lehrkörper) REFERENCES lehrkörper(Lehrkörper_id);');



// https://www.w3schools.com/sql/sql_ref_foreign_key.asp


$connection = null;
