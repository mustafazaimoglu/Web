<?php
    class Goodbye
    {
        const LEAVING_MESSAGE = "Thank you for visiting us <br>";

        function byebye()
        {
            echo self::LEAVING_MESSAGE;
        }
    }

    echo Goodbye::LEAVING_MESSAGE;

    $gb = new Goodbye();
    $gb->byebye();
?>