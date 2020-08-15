<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MKZ </title>
</head>
<body>
    <h2>MKZ</h2>

    <?php
        // $exp = "/w3schools/i"; / = delimiter : sınırlayıcı, i : case-insensitive
        // https://www.w3schools.com/php/php_regex.asp

        $str = "Visit W3Schools";
        $pattern = "/w3schools/i";
        $pattern2 = "/w3s/u";

        echo preg_match($pattern, $str);
        echo "<br>";
        echo preg_match($pattern2, $str);
        echo "<br>";
        
        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i"; // i = 4 , m , u = 3
        
        echo preg_match_all($pattern, $str);
        echo "<br>";
        
        $str = "Visit Apple!";
        $pattern = "/Apple/i";
        echo preg_replace($pattern, "W3Schools", $str);
        echo "<br>";
        
        /*
        i	Performs a case-insensitive search
        m	Performs a multiline search (patterns that search for the beginning or    end of a string will match the beginning or end of each line)
        u	Enables correct matching of UTF-8 encoded patterns
        */

        $str = "Apples and bananas.";
        $pattern = "/ba(na){2}/i";
        echo preg_match($pattern, $str);
    ?>
</body>
</html>