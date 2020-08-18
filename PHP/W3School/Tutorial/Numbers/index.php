<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h2>MKZ</h2>

    <?php
        $x = 5958;
        var_dump(is_int($x));
        echo "<br>";
        echo(is_int($x) . "<br>");

        $x = 59.58;
        var_dump(is_int($x));
        echo "<br>";
        echo(is_int($x) . "<br>");

        $x = 59.58;
        var_dump(is_float($x));
        echo "<br>";
        echo(is_float($x) . "<br>");

        $x = 1.9e411; //INFINITY
        var_dump($x);
        echo "<br>";

        $x = acos(8); //Not A Number = NaN NAN
        var_dump($x);
        echo "<br>";
        
        $x = 5895; // is_numeric = Sayıya Dönüştürülebilme
        var_dump(is_numeric($x));
        echo "<br>";

        $x = "5895";
        var_dump(is_numeric($x));
        echo "<br>";

        $x = "58.95" + 100;
        var_dump(is_numeric($x));
        echo("<br>" . $x);
        echo "<br>";

        $x = "Hello";
        var_dump(is_numeric($x)); //False
        echo("<br>");

        $x = 1234.584;
        $int_cast = (int)$x; // Noktalı Kısmı Sildi;
        echo $int_cast . "<br>";

        $x = "15984.768";
        $int_cast = (int)$x; // Aynı Sekilde Noktalı kısım atılıp Stringden Integer e Dönüştü.
        echo($int_cast);

    ?>

</body>
</html>