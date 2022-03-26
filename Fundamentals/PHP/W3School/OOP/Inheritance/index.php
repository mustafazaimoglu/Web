<?php
    // FINAL KEYWORD classları inherite edilmekten korur

    class Fruit
    {
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        protected function intro()
        {
            echo "The fruit is $this->name and color is {$this->color}.";
        }

        function overrideMe()
        {
            echo "Nimbus";
        }
    }

    class Strawberry extends Fruit
    {
        function message()
        {
            echo "Am I a fruit or a strawberry? <br>";

            $this->intro(); // Protectedler sadece inherite edilmiş classlardan kullanılabilir.
        }

        function overrideMe()
        {
            echo "First Nimbus";
        }
    }

    $strawberry = new Strawberry("Strawberry","red");
    $strawberry->message();
    echo "<br>";
    // $strawberry->intro(); 
    echo "<br>";
    $strawberry->overrideMe();

?>