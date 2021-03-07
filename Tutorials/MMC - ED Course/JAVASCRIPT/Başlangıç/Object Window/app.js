// console.log(this);

// window.alert("Selamın Aleyküm!!!");


// const answer = confirm("Emin Misin Bro?"); // TRUE -- FALSE dönüyor.

// console.log(answer);

// if (answer === true)
// {
//     console.log("you can delete it.");
// }
// else
// {
//     console.log("you shouldn't have delete that.");
// }

// const answer = prompt("2 + 2 = ?");

// console.log(answer);
// console.log(typeof answer);

// if (answer !== null)
// {
//     if (answer === "4")
//     {
//         console.log("That is true");
//     }
//     else
//     {
//         console.log("That is false");
//     }
// }
// else
// {
//     console.log("İşlem İptal edildi!");
// }

let value;

value = window;
value = window.location;
value = window.location.host;
value = window.location.hostname;
value = window.location.port;
value = window.location.href;

// if (confirm("Sayfa Yenilensin Mi?"))
// {
//     window.location.reload();
//     console.log("Sayfa Yenilendi");
// }
// else
// {
//     console.log("Sayfa Yenilenmedi!");
// }

value = window.outerHeight; // Çerçeveler de dahil
value = window.outerWidth; 

value = window.innerHeight; //Sadece web Sayfası olarak görülen bölüm
value = window.innerWidth;

value = window.scrollX;
value = window.scrollY;

console.log(value);