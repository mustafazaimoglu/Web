<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>

    <style>
        .error {
            color : red;
        }

    </style>
</head>
<body>
    <?php
        $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = " * ";
        $name = $email = $gender = $comment = $website = "";

        if (isset($_POST["submit"]))
        {
            $name = test_inputs($_POST["name"]);
            // $email = test_inputs($_POST["email"]);
            $website = test_inputs($_POST["url"]);
            $comment = test_inputs($_POST["comment"]);
            // $gender = test_inputs($_POST["gender"]);

            if(empty($name))
            {
                $nameErr = $nameErr . "Name is required!";
            }
            else
            {
                if(!preg_match("/^[a-zA-Z ]*$/", $name))
                {
                    $nameErr = $nameErr . "Only letters and white space allowed";
                }
            }

            if(!empty($_POST["email"]))
            {
                if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                {
                    $email = test_inputs($_POST["email"]);
                }
                else
                {
                    $emailErr = $emailErr . "Email is invalid!";
                }
                
            }
            else
            {
                $emailErr = $emailErr . "Email is required!";
            }

            if(empty($_POST["gender"]))
            {
                $genderErr = $genderErr . "Gender is required!";
            } 
            else 
            {
                $gender = test_inputs($_POST["gender"]);
            }

            if(empty($website))
            {
                $websiteErr = "";
            }
            else
            {
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website))
                {
                    $websiteErr = $websiteErr . "Url is Invalid";
                }
            }

            if(empty($comment))
            {
                $commentErr = $commentErr . "Comment is required!";
            }
        }

        function test_inputs($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    ?>


    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post"> 
        <span class="error"> * = required fields</span> <br><br>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" value="<?php echo $name;?>"> 
        <span class="error"><?php echo $nameErr?></span> 
        <br><br>

        <label for="email">E-mail :</label>
        <input type="email" name="email" id="email" value="<?php echo $email;?>"> 
        <span class="error"><?php echo $emailErr?></span>
        <br><br>

        <label for="url">Website :</label>
        <input type="text" name="url" id="url" value="<?php echo $website;?>"> 
        <span class="error"><?php echo $websiteErr?></span>
        <br><br>

        <label for="comment">Comment :</label>
        <textarea name="comment" id="comment" cols="30" rows="10"> <?php echo $comment;?> </textarea> 
        <span class="error"><?php echo $commentErr?></span>
        <br><br>

        Gender :
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>  value="other"> Other 
        <span class="error"><?php echo $genderErr?></span>
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