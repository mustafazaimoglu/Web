<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h2>MKZ</h2>

    <?php
        $text = "Hello World!";

        echo("Harf Sayısı : " . strlen($text)); // Harf Sayısı
        echo("<br>");
        echo("Kelime Sayısı : " . str_word_count($text . "Mustafa Zaimoglu")); // Kelime Sayısı
        echo("<br>");
        echo("Tersten Yazım : " . strrev($text)); // Tersten Yazdırma
        echo("<br>");
        echo("Kelime Aramak İçin : " . strpos($text,"World!")); // Başlangıç İndexi 0 dan Başlar
        echo("<br>");
        echo("Text Yer Değiştirmek İçin : " . str_replace("World","Jarvis",$text));
    ?>

</body>
</html>