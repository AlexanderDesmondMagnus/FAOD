<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // BSP. für funktionsschreibweise

    function _func()
    {
    };
    function funcNummerZwei()
    {
    };

    function writeMsg()
    {
        echo "Hello World" . "<br>";
    }

    writeMsg();

    function familyNameAndAge($fname, $age)
    {
        echo "$fname" . " is " . "$age years old." . "<br>";
    }
    // Alles was geprinted werden soll muss innerhalb der Anführungszeichen stehen. Auchn die leerzeichen. String
    familyNameAndAge("Peter", 12);
    familyNameAndAge("Eberhardt", 52);


    function addNumbers($a, $b,)
    {
        $erg = 0;
        $erg = $a + $b;
        familyNameAndAge("Klaus", $erg);
        return $erg;
    }

    addNumbers(3, 4);


    ?>
</body>

</html>