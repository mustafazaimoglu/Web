<?php

    // $_SERVER

    // ECHO $_SERVER["SERVER_NAME"] . "<br>";
    // ECHO $_SERVER["PHP_SELF"] . "<br>";
    // ECHO $_SERVER["SCRIPT_FILENAME"] . "<br>";
    // ECHO $_SERVER["REQUEST_METHOD"] . "<br>";

    // SESSION

    if(isset($_POST["submit"]))
    {
        session_start();

        $_SESSION["name"] = $_POST["name"];

        header("Location:app.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>