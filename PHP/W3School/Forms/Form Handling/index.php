<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
    <style>
        body {
            height : 2500px;
        }
    </style>
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

    <div id="mkz">
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
            // $doc = new DomDocument;
            // $doc->loadHTMLFile("index.php");
            // $xpath = new DOMXPath($doc);
            // $element = $xpath->query('//div[id="id"]');
            // echo $msg . "<br>";
            // // $element = $doc->getElementById("id")->nodeValue;

            // echo $element;


            // $doc = new DomDocument;
            // $doc->loadHTML("index.php");
            // $xpath = new DOMXPath($doc);
            // $element = $xpath->query('//div[id="id"]');
            // echo $msg . "<br>";
            // // $element = $doc->getElementById("id")->nodeValue;

            // echo var_dump($element);

            // $dom = new DOMDocument();
            // $dom->loadHTML("index.php");

            // $xpath = new DOMXPath($dom);
            // $result = '';
            // foreach($xpath->evaluate('//div[@id="mkz"]/node()') as $childNode) {
            // $result .= $dom->saveHtml($childNode);
            // }
            // var_dump($result);

            // $html= file_get_contents("index.php");
            // $dom = new DOMDocument();
            // $dom->loadHTML($html);
            // $xpath = new DOMXPath($dom);
            // $div = $xpath->query('//div[@id="mkz"]');
            // $div = $div->item(0);
            // $result = $dom->saveXML($div);
            // echo var_dump($result);

        ?>
    </div>
    <h2>****** ************ ************ ************* **********</h2>
     <?php
        $html= file_get_contents("index.php");
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        $xpath = new DOMXPath($dom);
        $div = $xpath->evaluate('//div[@id="mkz"]');
        $div = $div->item(0);
        $result = $dom->saveXML($div);
        echo($result);
     ?>


<!-- 
     <textarea name="asd" id="ads" value="<?php echo $result ?>" cols="30" rows="10"></textarea> -->

</body>
</html>