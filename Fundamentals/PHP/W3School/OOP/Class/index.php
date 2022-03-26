<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <h2>Nimbus</h2>

    <?php
        class Fruit 
        {
            public $name;
            public $color;

            function set_name($names)
            {
                $this->name = $names;
            }

            function get_name()
            {
                return $this->name;
            }
        }

        $banana = new Fruit();

        $banana->set_name("Muz");
        $banana->color = "Sarı";

        echo "***************** " . $banana->get_name();
        echo "<br>***************** " . $banana->color;
    ?>  
</body>
</html>