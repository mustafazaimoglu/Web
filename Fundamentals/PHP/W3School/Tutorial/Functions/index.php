<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>MKZ - PHP - SELF LEARNING</h1>

    <?php 
    
        // function writeTheGodDamnMessage()
        // {
        //     echo "Hello World!";s
        // }
        
        // writeTheGodDamnMessage();
        // echo "<br>";

        // function sayMyName($name)
        // {
        //     echo "Your name is $name. <br>";
        // }

        // sayMyName("Mustafa");
        // sayMyName("İlker");
        // sayMyName("Mehmet");
        // sayMyName("Ramazan");

        // declare(strict_types=1);

        // function addNumbers(int $a,int $b)
        // {
        //     return $a + $b;
        // }

        // echo addNumbers(5,"5 Days");

        // function setH(int $minH = 50) // Default value
        // {
        //     echo "The height is : $minH" . "<br>";
        // }

        // setH(350);
        // setH();
        // setH(123);

        // function sum(int $a ,int $b)
        // {
        //     $c = $a + $b;

        //     return $c;
        // }

        // echo "2 + 5 : " . sum(2,5) . "<br>";  
        // echo "8 + 3 : " . sum(8,3) . "<br>";  
        // echo "8 + 9 : " . sum(8,9) . "<br>";  

        function sum(float $a,float $b) : int // Dönüş Tipi STRICT nedir ?
        {
            return $a + $b;
        }

        echo "2.2 + 2.7 : " . sum(2.2,2.7) . "<br>";

    ?>
    
</body>
</html>