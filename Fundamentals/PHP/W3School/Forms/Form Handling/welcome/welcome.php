<?php
    if (isset($_GET["submit"]))
    {
        $username = $_GET["username"];
        $email = $_GET["email"];
        $message = $_GET["body"];

        echo $email . "              ";
        echo $username . "              ";
        echo $message . "              ";

    }
?>