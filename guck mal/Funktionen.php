<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?PHP

    function writeMsg()
    {
        echo "Hallöchen Krieg" . "<br>";
    }

    writeMsg();

    function familyNameAndAge($fname, $age)
    {
        echo "$fname" . " is " . "$age years old." . "<br>";
    }

    // Alles was geprinted werden soll muss innerhalb der Anführungszeichen stehen. Auchn die leerzeichen. String
    familyNameAndAge("Kolle", 21);
    familyNameAndAge("De Leon", 39);

    function addNumbers($a, $b,)
    {
        $erg = 0;
        $erg = $a + $b;
        familyNameAndAge("Lt.Axt", $erg);
        return $erg;
    }

    addNumbers(3, 4);


    function Mill_Rang($Rang, $fname)
    {
        echo  " $Rang $fname." . "<br>";
    }

    Mill_Rang("Srg", "Kolle");
    Mill_Rang("Lt", "De Leon");
    Mill_Rang("Col", "Tube");
    Mill_Rang("Gen", "Axt");

    ?>
</body>

</html>