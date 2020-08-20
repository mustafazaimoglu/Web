<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <?php
        $name = $email = $gender = $comment = $website = "";

        if (isset($_GET["submit"]))
        {
            $name = test_inputs($_GET["name"]);
            $email = test_inputs($_GET["email"]);
            $website = test_inputs($_GET["url"]);
            $comment = test_inputs($_GET["comment"]);
            $gender = test_inputs($_GET["gender"]);
        }

        function test_inputs($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    ?>


    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
        <label for="name">Name :</label>
        <input type="text" name="name" id="name"> 
        <br><br>

        <label for="email">E-mail :</label>
        <input type="email" name="email" id="email"> 
        <br><br>

        <label for="url">Wbsite :</label>
        <input type="text" name="url" id="url">
        <br><br>

        <label for="comment">Comment :</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <br><br>

        Gender :
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="other"> Other
        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php
        echo "<h2> Your Input : </h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>

</body>
</html>