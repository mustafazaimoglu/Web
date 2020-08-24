<?php
class Database
{
    private $hostname;
    private $username;
    private $password;
    private $dbname;

    public function __construct()
    {
        $this->hostname = "localhost";
        $this->username = "db_mr_yazilim";
        $this->password = "Mustafa.Ege3301";
        $this->dbname = "mr_yazilim";
    }

    public function connection()
    {
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);

        if ($conn) {
            return $conn;
        } else {
            echo "Connection Err : " . mysqli_connect_error();
        }
    }
}
?>