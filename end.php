<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Steen Papier Schaar</h1>
    <hr>
    <?php
        // if (!isset($_GET["Player1"]) || !isset($GET["Player2"])) {
        //     header("Location: game.php");
        // }
        $speler1 = $_GET["p1c"];
        $speler2 = $_GET["p2c"];
        echo "<h1>Speler 1 koos " . $speler1 . ".</h1>";
        echo "<h1>Speler 2 koos " . $speler2 . ".</h1>";
        if ($speler1 == "Stijn") {
            if ($speler2 == "Steen") {
                echo "Gelijkspel";
            }
            if ($speler2 == "Papier") {
                echo "Speler 2 wint";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 1 wint";
            }
        }
        if ($speler1 == "Papier") {
            if ($speler2 == "Steen") {
                echo "Speler 1 wint";
            }
            if ($speler2 == "Papier") {
                echo "Gelijkspel";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 2 wint";
            }
        }
        if ($speler1 == "Schaar") {
            if ($speler2 == "Steen") {
                echo "Speler 2 wint";
            }
            if ($speler2 == "Papier") {
                echo "Speler 1 wint";
            }
            if ($speler2 == "Schaar") {
                echo "Gelijkspel";
            }
        }
    ?>
</body>
</html>
