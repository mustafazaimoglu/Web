<?php
    $conn = mysqli_connect("localhost","shaun","test1234","ninja_pizza");

    if(!$conn)
    {
        echo "Connection Err : " . mysqli_connect_error();
    }

?>