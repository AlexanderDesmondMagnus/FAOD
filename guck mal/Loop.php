<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Kopfgesteuerte Schleife -->
    <!-- ' Es geht so nur Incremental !' -->
    <?php
    $x = 42;
    $Alpha = "einundzwanzig";
    $y = 0;

    while ($x > $y) {

        echo $y;
        echo "<br>";
        $y++;
    }
    // // Fussgesterute Schleife Do while
    do {
        echo $y;
        echo "<br>";
        $y += 0.1;
    } while ($x > $y);
    // Forschleife

    for ($i = 0; $i <= 10; $i++) {
        echo $i;
    }

    // // Besser für array geeignet 
    $blumen = array("Rosen", "pusteblume", ["Tulpe", "Orchide"]);
    // Durch den Var_Dump werden auch die Eigenschaften der Elemente asugegeben 
    foreach ($blumen as $flower) {
        var_dump($flower);
        echo "<br>";
    }

    $age = array("Klaus" => "35",  "Bill" => "102", "Peter" => "52");

    foreach ($age as $z => $val) {
        echo "$z = $val<br>";
    }

    $cars = array(
        array("Volvo", 1950),
        array("Saab", 1967),
        array("Hyundai", 1382)
    );

    for ($row = 0; $row < 3; $row++) {
        echo "<p><b> Rheine Nummer $row </b> </p>";
        echo "<ul>";
        for ($col = 0; $col < 2; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    ?>
</body>

</html>