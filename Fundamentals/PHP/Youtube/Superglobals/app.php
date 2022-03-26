<?php
    session_start();

    // if ($_SERVER["QUERY_STRING"] == "noname");
    // {
    //     unset($_SESSION["name"]);
    //     // session_unset();
    // }

    echo $_SESSION["name"];

    $gender = $_COOKIE["gender"];

    echo "(" . $gender . ")";


?>