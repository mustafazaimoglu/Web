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
        $x = 0;

        while ($x < 5)
        {
            echo "just while : " . $x . "<br>";
            $x++;
        }

        do
        {
            echo "do while : " . $x . "<br>";
            $x += 3;
        }
        while ($x <= 20);

        do
        {
            echo "difference : " . $x . "<br>";
            $x += 5;
        }
        while ($x < 20);

        for ($x = 1; $x < 20; $x +=2)
        {
            echo "for loop : " . $x . "<br>";
        }
        
        $colors = array("red","green","blue","yellow");

        foreach($colors as $color)
        {
            echo "$color <br>";
        }

        echo "<br>";
        
        for ($x = 0; $x < 10; $x++)
        {
            if ($x === 3 or $x === 6)
            {
                continue;
            }
            else if($x === 8)
            {
                break;
            }
            echo "The Number : $x <br>";
        }

        ?>
</body>
</html>