<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- WENN/DANN in PHP -->
    <?php
    $bool = false;
    $pi = 3.14;
    $zahl = 100;
    $wort = "Feierabend";




    if (!$bool) {
        echo "true";
    } else {
        echo "else";
    }

    // || ist ODER
    // && ist UND

    if ($pi == 3.14 || $zahl < 20) {
        echo "ODER";
    }
    echo "<br>";
    if ($pi == 3.14 && $zahl < 20) {
        echo "UND";
    } else {
        echo "false";
    }
    echo "<br>";
    if ($pi != 3.14 || $zahl > 75 && $wort == "feierabend" || 12 <= 20) {
        echo "Richtig";
    } else {
        echo "Falsch";
    }

    echo "<br>";

    if (!$pi) {
        echo $pi;
    } elseif ($zahl == 100) {
        echo $zahl;
    } elseif ($wort == 5) {
        echo $wort;
    } else {
        echo "else";
    }
    echo "<br>";

    if ($pi) {
        if ($zahl == 100) {
            if ($wort == "Feierabend") {
                echo $wort;
            }
            echo "auch richtig";
        }
        echo " ebenfalls richtig";
    } else {
        echo "else";
    }
    ?>
</body>

</html>