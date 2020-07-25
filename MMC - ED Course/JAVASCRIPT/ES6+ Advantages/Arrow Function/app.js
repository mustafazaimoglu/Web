// const merhaba = function()
// {
//     console.log("Merhaba");
// }


// const merhaba = name =>  //Arrow Function Tek Parametre alacaksa parantez koyulmaya bilir.
// {
//     console.log("Merhaba",name);
// }

// merhaba("Mustafa");

const merhaba = (name,surname) => console.log("Merhaba",name,surname);

merhaba("Mustafa","ZAİMOĞLU");

// const cube = function(x)
// {
//     return x * x * x;
// }

const cube = x => x * x * x; //Sadece Return Yapıyorsa Fonksiyon Bu şekildede yazılabilir.

console.log(cube(4));