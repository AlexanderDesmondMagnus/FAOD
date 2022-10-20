<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>FAOD</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>

<body>

    <?php
    function writeMsg()
    {
        $text = "Aula";
        echo "<p class='headder'>" . $text . "</p>";
        "<br>";
    }

    writeMsg();
    ?>

    <!-- Knöpfe -->
    <div class="links">
        <div class="Sidebar">
            <a href="Kadetten.php"><button class="glow-on-hover navbut">Kadettem</button> </a> <br>
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



        <div class="flex2">
            <div class="grid-box">
                <div class="box-1"> Alex </div>
                <div class="box-2"> Burcu</div>
                <div class="box-3"> Mohamed</div>
                <div class="box-4"> Oleg</div>
                <div class="box-5"> Patrick</div>
                <div class="box-6"> Samar</div>

            </div>
        </div>
</body>

</html>