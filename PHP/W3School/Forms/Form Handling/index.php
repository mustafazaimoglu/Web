<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <?php
        $msg = "";
        $clr = "red";

        if (isset($_POST["submit"]))
        {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $message = $_POST["body"];

            if(empty($username) || empty($message) || empty($email))
            {
                $msg = "Please fill the all areas!";
            }
            else if(strlen($username) < 3)
            {
                $msg = "Check Your Username!";
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $msg = "Check Your Email!";
            }
            else if(strlen($message) < 10)
            {
                $msg = "Your Message is too short!";
            }
            else
            {
                $msg = "Thanks For reaching us!";
                $clr = "green";
            }

        }
    ?>

    <form method="post" id="form" action="index.php">
        <input type="text" name="username" placeholder="username..."> <br>
        <input type="email" name="email" placeholder="email..."> <br>
        <textarea name="body" placeholder="message..."></textarea> <br>
       <input type="submit" value="Gönder" name="submit">
    </form>

    <div id="id">
        <pre>   
        asdasdasdasdasdasd
            </pre>
        <p>
            asd
            <h2>mkz</h2>
        </p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, reprehenderit.
    </div>

    <div  style="color: <?php echo $clr?>;">
        <?php
            $doc = new DomDocument;
            $doc->loadHTMLFile("index.php");
            $doc->validateOnParse = true;
            echo $msg . "<br>";
            $element = $doc->getElementById("id")->nodeValue;

            echo $element;

        ?>
    </div>

    

</body>
</html>