<?php
    /*
        public - the property or method can be accessed from everywhere. This is default
        protected - the property or method can be accessed within the class and by classes derived from that class
        private - the property or method can ONLY be accessed within the class
    */

    class Fruit 
    {
        public $name;
        public $name2;
        public $name3;
        protected $color;
        private $weight;

        function set_name($n)
        {
            $this->name = $n;
        }
        
        protected function set_name1($n)
        {
            $this->name1 = $n;
        }

        private function set_name2($n)
        {
            $this->name2 = $n;
        }
    }

    $mango = new Fruit();

    $mango->name = "Mango"; // Ok 
    // $mango->color = "Yellow"; // Err
    // $mango->weight = "300"; // Err

    $mango->set_name("n1"); //Ok
    // $mango->set_name2("n2"); // Err
    // $mango->set_name3("n3"); // Err

?>