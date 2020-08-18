<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <?php
        // $text = "Hello F*cking World!";

        // $x = 5;

        // $y = 10.5;

        // /*
        // A variable starts with the $ sign, followed by the name of the variable
        // A variable name must start with a letter or the underscore character
        // A variable name cannot start with a number
        // A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
        // Variable names are case-sensitive ($age and $AGE are two different variables)
        // */

        // echo $text . "<br>";
        // echo $x . "<br>";
        // echo $y . "<br>";

        // echo "14.08.2020 $text <br>";
        // echo "14.08.2020 " . $text . " :)";

        // echo "<br> $x + $y" . "<br>" . ($x + $y) . "<br>";
        
        // ECHO ($text + $x); //Eklenemez
    ?>  

    <?php
        // $x = 5; // Global Scope

        // function myTest() {
        //     echo "<p>Variable x : $x</p>"; // Error
        // }

        // myTest();

        // echo "Variable x : $x";

    ?>

    <?php
        // function myTest()
        // {
        //     $x = 5; // Local Scope

        //     echo "Variable x : $x"; 
        // }

        // myTest();

        // echo "Variable x : $x"; //Error 

        // $x = 5;
        // $y = 10;

        // function myTest()
        // {
        //     global $x, $y; //Global ile Dğişkenleri Dışardan Aldık.

        //     $y = $y + $x;
        // }

        // myTest();

        // echo $y;

        // $x = 5;
        // $y = 15;

        // function myTest()
        // {
        //     $GLOBALS["y"] = $GLOBALS["x"] + $GLOBALS["y"]; // Array Seklinde Global Scope Kullanilabilir.
        // }
        
        // myTest();

        // echo $y;

        function myTest()
        {
            static $x = 5; // Globalde Kullanılamaz Ama Fonksiyon Çağırıldıkça Artar.
            echo "$x" . "<br>";
            $x++;
        }
        
        myTest();
        myTest();
        myTest();

        ?>
    
</body>
</html>