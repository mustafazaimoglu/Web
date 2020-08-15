<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h2>PHP is Love;</h2>
    

    <?php
        // $GLOBALS global verilere eişmek için

        // $x = 10;
        // $y = 13;

        // function add()
        // {
        //     $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
        // };

        // add();
        // echo $z . "<br>";

        // // $_SERVER headers paths ve scripts hakkında bilgi tutar;

        // echo $_SERVER["PHP_SELF"];
        // echo "<br>";
        // echo $_SERVER["SERVER_NAME"];
        // echo "<br>";
        // echo $_SERVER["HTTP_HOST"];
        // echo "<br>";
        // echo $_SERVER["HTTP_REFERER"];
        // echo "<br>";
        // echo $_SERVER["HTTP_USER_AGENT"];
        // echo "<br>";
        // echo $_SERVER["SCRIPT_NAME"];
        // echo "<br>";        

    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            Name : <input type="text" name="fname">
            <input type="submit">
    </form>

    <?php
        // if ($_SERVER["REQUEST_METHOD"] === "POST")
        // {
        //     $name = htmlspecialchars($_REQUEST["fname"]);

        //     if(empty($name))
        //     {
        //         echo "Name is Empty";
        //     }
        //     else
        //     {
        //         echo $name;
        //     }
        // }            
    
    
        // if ($_SERVER["REQUEST_METHOD"] === "POST")
        // {
        //     $name = htmlspecialchars($_POST["fname"]);

        //     if(empty($name))
        //     {
        //         echo "Name is Empty";
        //     }
        //     else
        //     {
        //         echo $name;
        //     }
        // }            

        // $_GET["x"] Urlden ve formlardan bilgi almak için 
    ?>
    </body>
</html>