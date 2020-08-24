<?php
include "./config/dboperations.php";
session_start();
ob_start();
$error = "";

if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    if ($username === "" || $password === "") {
        $error = "Lütfen Verilen Alanları Boş Bırakmayınız!";
    } else {
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($result);

        if ($row === 1) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;

            header("Location:admin.php");
        } else {
            $error = "Giriş Başarısız!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../system/logo/icon.png">
    <title>Login</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        #main
        {
            height: 100vh;
            width: 100vw;
            background-color: rgb(228, 228, 228);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        form {
            border-radius: .5rem;
            background-color: #2395c5;
            padding: 1rem;
            width: 400px;
            height: 300px;
            display: flex;
            flex-direction: column;
            margin-top: -50px;
        }

        .enter {
            font-size: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1.3rem;
        }

        .enter i {
            margin-bottom: -7px;
            margin-right: 5px;
        }

        input {
            padding: .6rem;
            border:none;
            border-radius: 4px;
            width: 250px;
            align-self: center;
            font-size: medium;
        }

        #submit {
            width: 120px;
        }

        #submit:hover {
            background-color: rgb(206, 206, 206);
        }

        h1 {
            display: block;
            text-align: center;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div id="main">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <hr>
            <div class="enter">
                <i>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      </svg>
                </i>
                <input type="text" name="username" placeholder="Username" id="username">
            </div>
            <div class="enter">
                <i>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                      </svg>
                </i>
                <input type="password" name="password" id="password" placeholder="Password">

            </div>
            <input id="submit" type="submit" name="login" value="Login">
        </form>
        <div style="color:red;font-size:large"><?php echo htmlspecialchars($error) ?></div>
    </div>
</body>
</html>