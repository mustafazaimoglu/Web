<?php
try
{
    $dbhost = 'localhost';
    $dbname='joseph';
    $dbuser = 'root';
    $dbpass = '';
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e){
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>        