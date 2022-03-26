<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h2>php</h2>

    <?php
        $cars = array("Volvo","BMW","Toyota");

        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";

        echo count($cars); // array length
        echo "<br>";

        for ($i = 0; $i < count($cars); $i++)
        {
            echo $cars[$i] . "<br>";
        }

        //Associative (key => value)

        $age = array("Peter"=>"35","Ben"=>"20","Joe"=>"45","Ahmet"=>"16","İlker"=>"48");

        $age2["Peter"] = "35";
        $age2["Ben"] = "20";
        $age2["Joe"] = "45";

        echo "Peters age is " . $age["Peter"] . ".<br>";

        foreach($age as $x => $value)
        {
            echo "Key : " . $x . ", Value : " . $value . "<br>";
        }

        //Multidimensional

        $arabalar = array(
            array("Volvo",25,15),
            array("Ford",15,15),
            array("Renault",150,149),
            array("Saab",35,5)
        );

        echo ($arabalar[0][0] . " " . $arabalar[0][1] . " " . $arabalar[0][2] . "<br>");
        echo ($arabalar[1][0] . " " . $arabalar[1][1] . " " . $arabalar[1][2] . "<br>");
        echo ($arabalar[2][0] . " " . $arabalar[2][1] . " " . $arabalar[2][2] . "<br>");
        echo ($arabalar[3][0] . " " . $arabalar[3][1] . " " . $arabalar[3][2] . "<br>");

        for ($row = 0; $row < count($arabalar); $row++)
        {
            echo "<h4>Row Number : $row</h4>";
            echo "<ul>";
            for ($col = 0; $col < count($arabalar[$row]); $col++)
            {
                echo "<li>" . $arabalar[$row][$col] . "</li>";
            }
            echo "</ul>";
        }

        echo "<br><br><br><br>";

        // Sorting

        /*
            sort() - sort arrays in ascending order
            rsort() - sort arrays in descending order
            asort() - sort associative arrays in ascending order, according to the value
            ksort() - sort associative arrays in ascending order, according to the key
            arsort() - sort associative arrays in descending order, according to the value
            krsort() - sort associative arrays in descending order, according to the key

        */

        sort($cars); // rsort = Tersten Sıralamak için

        PrintOut($cars);

        function PrintOut($arr)
        {
            echo "<br>";
            for($i = 0; $i < count($arr); $i++)
            {
                echo $arr[$i] . "<br>";
            }
        }

        rsort($cars); //    tersten Sıralama r = "REVERSE"

        PrintOut($cars);

        asort($age);  // Value ye göre İlişkisel Arr kucükten Büyüğe 

        PrintOutAssoc($age);
        
        function PrintOutAssoc($arr)
        {
            echo "<br>";
            foreach($arr as $x => $value)
            {
                echo "Name : " . $x . ",  Age : " . $value . "<br>";
            } 
        }

        arsort($age); // Value ye göre Büyükten Küçüğe

        PrintOutAssoc($age);

        ksort($age); // Key e göre Küçükten Büyüğe

        PrintOutAssoc($age);

        krsort($age); // Key e göre Büyükten Küçüğe

        PrintOutAssoc($age);

    
    ?>
</body>
</html>