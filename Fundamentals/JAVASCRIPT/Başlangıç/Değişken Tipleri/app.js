// var a = 10;
// var b = 20;
// var c = 30;

// console.log(a,b,c);

// PRIMIVITE VARIABLES

//  Number

// var a = 15; //NUMBER
// var b = 3.14; //NUMBER

// console.log(a);
// console.log(b);

// console.log(typeof a);
// console.log(typeof b);

// String

// var a = "Mustafa Zaimoğlu";

// console.log(a);

// console.log(typeof a);

// Boolean

// var a = false;
// var b = true;

// console.log(typeof a);
// console.log(typeof b);

// Null

// var a = null;

// console.log(a);
// console.log(typeof a); // Bu boş oldugunu Belli Etmek İçin Kullanılır...


// Undenified

// var a; 

// console.log(a); // Değişkende bir sey tutulmadığı için tanımsız olarak görünyor. 

//REFERENCE VARIABLES genelde typeof da object olarak görunur.

// var numbers = [1,2,3,4];

// console.log(numbers);
// console.log(typeof numbers);
// console.log(numbers[0]);
// console.log(typeof numbers[0]);

// var person = {
//     name : "Mustafa Zaimoğlu",
//     age : 20
// }

// console.log(person);
// console.log(typeof person);

// var date = new Date();

// console.log(date);
// console.log(typeof date);

// var merhaba = function() {
//     console.log("Merhaba");
// }

// console.log(merhaba);
// console.log(typeof merhaba);

//DIFFERENCES

var a = 10;

var b = a;

console.log(a,b);

a = 20;

console.log(a,b);


var c = [1,2,3];

var d = c;

console.log(c , d);

c.push(4);

console.log(c , d); //Bunun oluşma sebebi d ye sadece c nin gösterildiği yerin gösterilmesidir.
