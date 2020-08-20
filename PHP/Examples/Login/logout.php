<?php
    session_start();
    ob_start();
   
    session_destroy();

    echo "Cıkış Yapıldı!";

    header("Refresh: 2; url=login.php");
    ob_end_flush();

?>