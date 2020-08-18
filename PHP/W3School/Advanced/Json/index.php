<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h1>MKZ</h1>

    <?php
        /*
            json_encode() -> Stringe Dönüştürür.
            json_decode() -> Stringi JSON a dönüştürür. (Nesne Olarak)
            json_decode(x , true) -> Stringi JSON a dönüştürür. (Array Olarak)
        */

        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>42);

        echo json_encode($age); 

        echo "<br>";
        $cars = array("Volvo","Porsche","Toyota");

        echo json_encode($cars);

        for($i = 0; $i < 3; $i++)
        {
            echo "<br>" . $cars[$i] . "<br>";
        }

        echo var_dump(json_encode($cars));

        $jsonObj = '{"Peter":35,"Ben":"20","Sen":85}';
        echo "<br>";

        echo var_dump(json_decode($jsonObj)) . "<br>";

        $obj = json_decode($jsonObj); // Object
        $arr = json_decode($jsonObj, true); // Array

        echo $obj->Peter . " - ";
        echo $obj->Ben . " - ";
        echo $obj->Sen;
        
        echo "<br> <br>";
        
        echo $arr["Peter"] . " - ";
        echo $arr["Ben"] . " - ";
        echo $arr["Sen"];
        
        ?>
</body>
</html>