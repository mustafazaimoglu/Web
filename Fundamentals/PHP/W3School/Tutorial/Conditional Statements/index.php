<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h1>PHP</h1>

    <?php
    //if elseif else
        $t = date("H"); // Saati Aliyor.

        if ($t < 10)
        {
            echo "Have a good morning!";
        }
        else if ($t < 20)
        {
            echo "Have a nice day!";
        }
        else
        {
            echo "Have a good night!";
        }





    ?>

</body>
</html>