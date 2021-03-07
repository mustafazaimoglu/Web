// Karşılaştırma Operatorleri

// ==
// ===
// !=
// !==
// < 
// >
// <=
// >=

// console.log (2 == 2); 
// console.log ("Ahmet" == "Ahmet");
// console.log (2 == "2"); // Otomatik Tür Dönüşümü Yaparak Kontrol Sağladığı için true
// console.log (2 === "2") // Türleri de Kontol ediyor bunu kullanmak daha sağlıklı

// console.log (4 < 2);
// console.log (1 < 2);

// console.log (2 <= 2);
// console.log (5 >= 3);

// console.log (3 != 4);

// MANTIKSAL OPERATORLER

// // NOT !

// console.log (!(2 == 2));

// // OR ||  bir tanesi evet olsa evet için yeterli

// console.log ((1 === "1") || ("Ahmet" === "Ahmet"));

// // AND &&  hepsi evet olmalı for evet

// console.log ((2 === 2) && ("Mustafa" === "Mustafa"));

// const error = false;

// if (error == true) 
// {
//     console.log("Hata Bulundu");
// }
// else
// {
//     console.log("Hata Bulunamadı");
// }

// const process = "5";

// if (process === "1")
// {
//     console.log("İŞLEM 1");
// }
// else if (process === "2")
// {
//     console.log("İŞLEM 2");
// }
// else if (process === "3")
// {
//     console.log("İŞLEM 3");
// }
// else if (process === "4")
// {
//     console.log("İŞLEM 4");
// }
// else
// {
//     console.log("İŞLEM BULUNAMADI!");
// }

const number = 100;

// if (number === 100) 
// {
//     console.log ("Sayı = 100");
// }
// else 
// {
//     console.log ("Sayı != 100");
// }

if (number === 100) console.log("Sayı = 100");
else console.log("Sayı != 100");


// TERNARY OPERATOR
// (kosul ? sonuc1 : sonuc2)

console.log (number === 100 ? "Sayı = 100" : "Sayı != 100");


console.log("MKZ ********************* MKZ");

let a = 154;
let b = 1453;

console.log (a >= b ? "A daha buyuk" : "B daha buyuk");