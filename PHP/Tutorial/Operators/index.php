<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKZ</title>
</head>
<body>
    <h2>Daddy is Back!</h2>

    <?php
        // ** Üssü Operatörü

        // ==  "17" == 17 => TRUE

        // === "17" === 17 => FALSE Tür Kontrolü de geçerli

        // <> Eşit değil

        // <=> spaceship x <=> y => x buyukse +1 esitlerse 0 y buyukse -1 döner.

        // and = && ve

        // or = || yada

        // xor sadece ikisnden biri doğru olduğunda her ikisi de doğru olursa hatalı

        // . birbirine bağlamak için kullanılır. concatenation

        // .= ekler birbirine like += appends

        // whatever = koşul ? sonuç1 : sonuc2; 

        // whatever = durum1 ?? durum2 ; durum1 null yada bossa durum2 olusur tamtersi de geçerlidir.

        $x = 10;
        $y = 2;
        $z = "Hello Freakin World";

        echo $x ** $y . "<br>"; /* 10^2 */

        echo $x > 5 ? "Buyuk" : "Kucuk";
        echo "<br>";
        echo strlen($z) > 8 ? "8 den Cok Karakter Var" : "8 den Az Karakter Var";
        echo "<br>";

        $t = "asd";
        $r = "";

        echo $t ?? $r;

    ?>
</body>
</html>