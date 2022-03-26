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
        echo "<h2>PHP is Fun!</h2>";
        ECHO "Hello World!<br>";
        echo("Hello F*cking Wolrd!<br>");

        echo "This "."String "."was "."made "."with Multiple parameters.";

        $x = 15;
        $text1 = "Learn PHP";
        echo "<h2>" , $text1 . "</h2>";
        echo "<br>X : ", $x , " !!!<br>";

        echo("***************************************************************");

        print("<h2>PHP is a Man!</h2>");
        print "Hello World!<br>";
        print "<h2>" . $text1 . "</h2>";
        print "<br>X : ". $x . " !!!<br>";

        /*
            echo has no return value while print has a return value of 1 so it can be used in expressions.
            print parametre ayırırken sadece nokta kullanılır.
            echo da nokta veya virgül kullanılbilir.
        */
    ?>

</body>
</html>