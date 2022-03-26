<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h2>PHP Baba</h2>

    <?php
        // define(name,value,case-insensitive(true,false));
        // The Constants Are Global.

        define("GREETING","Welcome");
        define("MEETING","What Up!",true);

        echo (GREETING . "<br>");
        echo meEtiNg . "<br><br>"; // Buyuk Kucuk Harf Duyarsız;

        define("cars", ["Porsche","Tesla","Ferrari","R34 GTR"]);

        for($i = 0; $i < 4; $i++)
        {
            echo cars[$i] . "<br>";
        }
        echo "<br>";

        function test()
        {
            echo GREETING;
        }

        test();

    ?>
</body>
</html>