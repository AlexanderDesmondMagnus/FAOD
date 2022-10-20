<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>FAOD</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>

<?php
function writeMsg()
{
    $text = "Hof";
    echo "<p class='headder'>" . $text . "</p>";
    "<br>";
}

writeMsg();

// FISI's:

// Alex, Patrick, Oleg, Mohamed. Samar. Burcu



?>

<body>

    <!-- Knöpfe -->
    <div class="links">
        <div class="Sidebar">
            <a href=" Kadetten.php"><button class="glow-on-hover navbut">Kadettem</button> </a> <br>
            <br>
            <a href="Gebäude.php"><button class="glow-on-hover navbut">Gebäude</button> </a> <br>
            <br>
            <a href="Spezials.php"><button class="glow-on-hover navbut">Spezials</button> </a> <br>
            <br>
            <a href="Rang.php"><button class="glow-on-hover navbut">Rang</button> </a> <br>
            <br>
            <a href="Technick.php"><button class="glow-on-hover navbut">Technick</button> </a> <br>
            <br>
            <a href="Lehrkörper.php"><button class="glow-on-hover navbut">Lehrkörper</button> </a>
        </div>

        <form action="Gebäudex.php" method="POST">

            <div class="flex2">
                <div class="grid-box">
                    <div class="box-1"> Barracke A </div>
                    <div class="box-2"> Barracke B</div>
                    <div class="box-3"> Baaracke C</div>
                    <div class="box-4"> Barracke D</div>
                    <div class="box-5"> Barracke E</div>
                    <div class="box-6"> Barracke F</div>

                </div>

        </form>
    </div>
</body>

</html>