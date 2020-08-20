<?php
    // Part 1
    // // $quotes = readfile("Example.txt");

    // // echo $quotes;

    // $file = "Example.txt";

    // if (file_exists($file))
    // {
    //     // echo readfile($file) . "<br>";
        
    //     // copy($file, "quotes.txt");

    //     // echo realpath($file) . "<br>";

    //     // echo filesize($file) . "<br>";

    //     // rename($file, "Text.txt");
    // }
    // else
    // {
    //     echo "File does not exist";
    // }

    // mkdir("File Test");

    // Part 2

    $file = "quotes.txt";

    $handle = fopen($file, "r+");

    //read all
    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    //read a single line
    // echo fgets($handle); // 1.satır
    // echo fgets($handle); // 2.satır devrederek gidiyor.

    // read a char.
    // echo fgetc($handle);
    // echo fgetc($handle);

    // fwrite($handle, "\nEveryting is popular!"); Kodu değiştirmek gerekir.


?>