<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h1>Nimbus</h1>
    
    <?php
        function my_callback($item)
        {
            return strlen($item);
        }

    ?>
        

    <?php
        $str = ["Mustafa Zaimoglu","MKZ","MKZ"];

        $result = array_map("my_callback", $str);

        print_r($result);
    ?>
    
</body>
</html>