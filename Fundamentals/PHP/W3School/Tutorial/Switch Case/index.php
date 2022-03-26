<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h3>- PHP -</h3>
    
    <?php
        $color = "aqua";

        switch($color)
        {
            case "red":
                echo "My Favorite color is red!";
            break;
            case "green":
                echo "My Favorite color is green!";
            break;
            case "blue":
                echo "My Favorite color is blue!";
            break;
            case "pink":
                echo "My Favorite color is pink!";
            break;
            default : 
                echo "You don't like our colors bro, I'm Sorry.";
        }
    ?>
</body>
</html>