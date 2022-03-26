<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h1>M-K-Z</h1>

    <?php
        /*
            require - will produce a fatal error (E_COMPILE_ERROR) and stop the script
            include - will only produce a warning (E_WARNING) and the script will continue
        
        */

        Echo "* * * * * * * * * * * * * * * * <br><br>";

        include "wtf.php";
        echo "I have a $color $car. <br>";
        
        // include "wth.php";
        // echo "Bulamadık Abi";

        Echo "<br><br> * * * * * * * * * * * * * * * * <br><br>";

        require "wtf.php";
        echo "I have a $color $car. <br>";

        // require "wth.php";
        // echo "Bulamadık Abi";

        Echo "<br><br> * * * * * * * * * * * * * * * * <br><br>";

    ?>

    <?php
        include "wth.php";
        echo "------ -------- --------- >  Bulamadık Abi";
        
        Echo "<br><br> * * * * * * * * * * * * * * * * <br><br>";
    ?>

    <?php
        require "wth.php";
        echo "Bulamadık Abi";
        

        Echo "<br><br> * * * * * * * * * * * * * * * * <br><br>";
    ?>
</body>
</html>