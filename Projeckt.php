<!-- FISI ARMY OF DOOOM -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAODt</title>
    <link rel="stylesheet" href="Styles/Style.css">


<body>


    <?php

    function writeMsg()
    {
        $text = "Willkommen in der FAOD-SCHULE";
        echo "<p class='headder'>" . $text . "</p>";
        echo "<br>";
    }

    writeMsg();

    ?>

    <br />

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


        <!-- Kisten -->
        <div class="flex2">
            <div class="grid-box">
                <div class="box-1">
                    <div>FISI-Alex</div>
                    <div>Gebä. 1a<br>
                        Spez. <br>
                        Rang <br>
                        Technick <br>
                        Lehrkörper
                    </div>
                </div>
                <div class="box-2">
                    <div>FISI-Davide</div>
                    <div>Gebä. 1a<br>
                        Spez. <br>
                        Rang <br>
                        Technick <br>
                        Lehrkörper
                    </div>
                </div>
                <div class="box-3">
                    <div>FISI-Moha.</div>
                    <div>Gebä. 1c<br>
                        Spez. <br>
                        Rang <br>
                        Technick <br>
                        Lehrkörper
                    </div>
                    <br>
                </div>
                <div class="box-4">
                    <div>FISI-Oleg</div>
                    <div>Gebä. 1b<br>
                        Spez. <br>
                        Rang <br>
                        Technick <br>
                        Lehrkörper
                    </div>
                </div>
                <div class="box-5">
                    <div>FISI-Patrick</div>
                    <div>Gebä. 1e<br>
                        Spez. <br>
                        Rang <br>
                        Technick <br>
                        Lehrkörper
                    </div>
                </div>
                <div class="box-6">
                    <div>FISI-Samar</div>
                    <div>Gebä. 1a<br>
                        Spez. <br>
                        Rang <br>
                        Technick <br>
                        Lehrkörper
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>