<?php
    include("users.php");
    session_start();
    ob_start();

    if(isset($_POST["login"]))
    {
        $u = $_POST["username"];
        $p = $_POST["password"];

        if ($u === $username && $p === $password)
        {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $u;
            
            header("Location:admin.php");
        }
        else
        {
            echo "Giriş Başarısız!";
        }
        
    }

    /*
           //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
    
    https://www.javatpoint.com/php-mysql-login-system
    */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form action="login.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" name="login">
    </form>
    
</body>
</html>