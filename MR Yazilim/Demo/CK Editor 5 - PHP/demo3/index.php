<?php
    if(isset($_POST["submit"]))
    {
        $editor = $_POST["editor"];
        $name = $_POST["name"];
        
        echo $name . "<br>";
        echo $editor . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
    <script src="./ckeditor5/ckeditor.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/monokai-sublime.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <textarea name="editor" id="editor"></textarea>
        <input type="text" name="name" id="name">
        <button type="submit" name="submit">Gönder</button>
    </form>


    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),
            {
                toolbar: ["heading", "|", "bold", "italic", "link", "bulletedList", "numberedList", "alignment", "|", "FontBackgroundColor", "FontColor", "Highlight", "|", "CodeBlock", "|", "indent","Outdent","BlockQuote","StrikeThrough", "HorizontalLine", "Subscript", "Superscript","Underline","|","InsertTable","MediaEmbed","ImageUpload","undo","redo","|","ckfinder"]
            })
            .then(editor =>
            {
                console.log( Array.from( editor.ui.componentFactory.names() ));
                console.log(editor);
            })
            .catch(error =>
            {
                console.error(error);
            });
    </script>
</body>
</html>