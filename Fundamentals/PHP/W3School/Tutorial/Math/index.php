<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h1>PHP BABA</h1>

    <?php
        echo pi() . "<br>";
        echo 3*pi() + 2 . "<br>";

        $arr = array(0,45,563,32,5,6,-15,3);

        echo(min(0,45,563,32,5,6,-15,3) . "<br>");
        echo(max($arr));

        // Absolute Mutlak Değer...
        echo ("<br>" . abs(-6.07) . "<br>");

        // sqrt() square root;
        echo(sqrt(64) . "<br>");

        echo("*********************************<br>");
        echo(round(0.60) . "<br>"); // Up
        echo(round(0.49) . "<br>"); // Down
        echo(round(0.50) . "<br>"); // Up
        echo(round(0.51) . "<br>"); // Up

        // Rastegele Sayı Uretme
        echo(rand() . "<br>");
        echo(rand(0,10) . "<br>"); // 0 dan 10 a 10 is inclusive




    ?>
</body>
</html>