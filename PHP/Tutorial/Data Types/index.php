<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h3>MKZ</h3>
    <hr>

    <?php
    /*
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
    */

    #String
    $txt = "Hello World";

    echo $txt;
    echo "<br>";
    var_dump($txt);

    echo "<br> ************* <br>";
    #Integer
    $number = 75;

    echo $number;
    echo "<br>";
    var_dump($number);
    
    echo "<br> ************* <br>";
    #Float
    $float = 10.365;
    
    echo $float;
    echo "<br>";
    var_dump($float);
    
    #Boolean
    echo "<br> ************* <br>";
    $boolean = true;
    
    echo $boolean;
    echo "<br>";
    var_dump($boolean);
    
    #Array
    echo "<br> ************* <br>";
    $carArray = array("Volvo","BMW","Toyota");
    
    for ($i = 0; $i < 3; $i++)
    {
        echo $carArray[$i] . "<br>";
    }
    echo "<br>";
    var_dump($carArray);
    
    #Object
    echo "<br> ************* <br>";
    class Car
    {
        function Car()
        {
            $this->model = "Porsche";
        }
    }
    
    $herCar = new Car();
    
    echo $herCar->model;
    echo "<br>";
    var_dump($herCar);
    print("<br>");
    var_dump($herCar->model);

    #Null
    echo "<br> ************* <br>";
    $null = "Hello Freaking World";
    echo $null;
    $null = null;
    print("<br>");
    var_dump($null);
    ?>
</body>
</html>