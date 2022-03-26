<?php
include "database.php";


function getTheResult($toSearch)
{
    $sql = "SELECT * FROM products WHERE product_name LIKE ? ";

    $result = $GLOBALS["conn"]->prepare($sql);
    $result->execute(["%$toSearch%"]);

    $data = $result->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}





?>