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

//  Array
$cars = array("Volvo", "Toyota", "Renaault");

var_dump($cars);
echo "<br>";
echo $cars[2];
echo "<br>";
// Multidimensionales Array
$animals = array("hund", "katze", ["maus", "hamster", "ratte"]);
var_dump($animals);
echo "<br>";
echo $animals[2][2];

// KLASSEN
class Car {
    public $farbe;
    public $model;

    public function __construct($farbe, $model){
        $this->farbe = $farbe;
        $this->model = $model;
    }

    public function message(){
        return "Meine Auto ist ".$this->farbe." ".$this->model;

    }


}

$mycar = new Car("Black","Volvo");
echo $mycar->message();
echo "<br>";

$_float = 0.5;

$mycar = new Car("red", "Toyota");
echo $mycar->message();
echo "<br>";
$null = null;
var_dump($_float);

$x = (int)$_float;

echo $x;
echo "<br>";
// Auslesen der Eigenschafen
var_dump($x);                                   

                    $string = 8 ;
// Mathe
$y = (int)$string;
echo"<br>";

var_dump($y);
$x =11;
echo $y + $x;                                 
echo"<br>";

echo $y % $x;
echo"<br>";

echo $y ** $x;
echo"<br>";

                    $z = 10;

echo$z += $x;
echo"<br>";

echo $z -= 2;
echo"<br>";

echo $z %= $x;
echo"<br>";
// Vergeleichen von Werten
var_dump($y == $x);
echo"<br>";
// vergleuichen von werten mit Variablen
var_dump($z == $string);
echo"<br>";
// Vergelcuhen von werten Variablen und Typ
var_dump($z === $string);
echo"<br>";
// Negation der Funktion
var_dump($z !== $string);
echo"<br>";
// Negation der Funktion
var_dump($z != $string);

// Vergleichen von Werten den wert von nicht zahlen ergibt sich aus der Position inn der Askitabelle 
                    $a = 7;
                    $b = 7;
                    $c = 8;
echo"<br>";
var_dump($a > $b);

echo"<br>";
var_dump($a <= $b);
echo"<br>";

$abc = "abc";
$def = "def";
echo $abc.$def;

?>
</body>
</html>