<?php

    class Database 
    {
        private $hostname;
        private $username;
        private $password;
        private $dbname;

        function __construct()
        {
            $this->hostname = "localhost";
            $this->username = "shaun";
            $this->password = "test1234";
            $this->dbname = "ninja_pizza_car";
        }

        function connection()
        {
            $conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);

            if($conn)
            {
                return  $conn;
            }
            else
            {
                echo "Connection Err : " . mysqli_connect_error();
            }
        }
    }
?>