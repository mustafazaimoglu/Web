<?php
    session_start();

    if(isset($_SESSION["login"]) && $_SESSION["login"] === true)
    {
        echo "Welcome : " . $_SESSION["username"];
    }
    else
    {
        header("Location:login.php");
        die();
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h3>Welcome</h3>
    <h5>We were waiting for you!</h5>
    <a href="logout.php">Çıkış</a>
</body>
</html>