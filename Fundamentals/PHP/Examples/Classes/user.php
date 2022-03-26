<?php
    class User
    {
        public $name;
        public $surname;

        function __construct($n,$s)
        {
            $this->name = $n;
            $this->surname = $s;
        }

        function toString()
        {
            echo "Name : " . $this->name . "<br>";
            echo "Surname : " . $this->surname . "<br>";
        }

    }

    $user1 = new User("Mustafa", "Zaimoglu");

    $user1->toString();


?>