<?php
    if(isset($_GET["submit"]))
    {
        $editor = $_GET["editor"];
        $name = $_GET["name"];

        echo $editor;
        echo $name;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
</head>

<body>
    <form action="index.php" method="get">
        <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
        <input type="text" name="name" id="name">
        <!-- <div id="editor">This is some sample content.</div> -->
        <input type="submit" name="submit" value="Gönder">
    </form>

    <div id="babba">

    </div>


    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor =>
            {
                console.log(editor);
            })
            .catch(error =>
            {
                console.error(error);
            });

    </script>
    <!-- <script>
        document.querySelector("#mkz").addEventListener("click",() =>
        {
            let a = document.querySelector(".ck-content").innerHTML;

            document.querySelector("#babba").innerHTML = a;
        })
    </script> -->

</body>

</html>