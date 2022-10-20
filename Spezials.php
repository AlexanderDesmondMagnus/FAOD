<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>FAOD</title>
    <link rel="stylesheet" href="Styles/Style.css">
    <style>
        /* p {
            color: rgb(199, 9, 206);
            font-weight: 1200;
        } */
    </style>
</head>

<body>




    <?php
    function writeMsg()
    {
        $text = "Labor";
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



        <!-- Kisten -->
        <div class="flex2 ">
            <div class="grid-box">
                <div class="box-1">
                    <div>FISI-Alex</div>
                    <div>
                        <form action="action.php" method="post">
                            <p>Ihr Spezial: <input type="text" name="Spezial" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </div>
                </div>
                <div class="box-2">
                    <div>FISI-Davide</div>
                    <div>
                        <form action="action.php" method="post">
                            <p>Ihr Spezial: <input type="text" name="Spezial" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </div>
                </div>
                <div class="box-3">
                    <div>FISI-Moha.</div>
                    <div>
                        <form action="action.php" method="post">
                            <p>Ihr Spezial: <input type="text" name="Spezial" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </div>
                </div>
                <br>
                <div class="box-4">
                    <div>FISI-Oleg</div>
                    <div>
                        <form action="action.php" method="post">
                            <p>Ihr Spezial: <input type="text" name="Spezial" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </div>
                </div>
                <div class="box-5">
                    <div>FISI-Patrik</div>
                    <div>
                        <form action="action.php" method="post">
                            <p>Ihr Spezial: <input type="text" name="Spezial" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </div>
                </div>
                <div class="box-6">
                    <div>FISI-Samar</div>
                    <div>
                        <form action="action.php" method="post">
                            <p>Ihr Spezial: <input type="text" name="Spezial" /></p>
                            <p><input type="submit" /></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>



</body>

</html>