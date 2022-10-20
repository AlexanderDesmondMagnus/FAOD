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
        $text = "Offiziersmesse";
        echo "<p class='headder'>" . $text . "</p>";
        "<br>";
    }

    writeMsg();

    // FISI's:

    // Alex, Patrick, Oleg, Mohamed. Samar. Burcu



    ?>


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


        <div class="flex2">
            <div class="grid-box">
                <div class="box-1"> Stumpem </div>
                <div class="box-2"> Neuer</div>
                <div class="box-3"> AzuBi</div>
                <div class="box-4"> FISI</div>
                <form action="Rangx.php" method="POST">
                </form>
            </div>


        </div>


    </div>
</body>

</html>