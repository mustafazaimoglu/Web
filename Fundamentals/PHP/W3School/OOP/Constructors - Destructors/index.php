<?php
/*
    destruct = script sonunda çalışır. (OTOMATİK)

 */
    class Fruit
    {
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct()
        {
            echo "I am the last thing of this script";
        }
        
        function showInfos()
        {
            echo "Name : " . $this->name . "  ---  ";
            echo "Color : " . $this->color;
        }
    }
    
    $pear = new Fruit("Armut", "Yeşil");

    echo "***************";
    $pear->showInfos();
    echo "***************";
    
    echo "The end of the script : ";
?>