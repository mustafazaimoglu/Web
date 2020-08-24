<?php
session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"] === true)
{
    $username = $_SESSION["username"];
}
else
{
    header("Location:login.php");
    die();
    exit;
}

?>