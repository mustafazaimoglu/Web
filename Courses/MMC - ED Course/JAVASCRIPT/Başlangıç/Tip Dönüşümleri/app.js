let value;

// String Dunusumleri

value = (123).toString();
value = String(3.14);
value = String(false);
value = String(true);
value = String(function() {console.log("MKZ")});
value = String([1,2,3,4]);

value = (10).toString();
value = (3.14).toString();

// Number Donusumleri

value = Number("123");
value = Number(null);
value = Number(undefined); //Not a Number --> NaN
value = Number("Hello World");
value = Number([1,2,3,4]);

value = Number("3.14");
value = parseFloat("3.14");

value = parseInt("88");


console.log(value);
console.log(typeof value);


const a = "MKZ" + 53;

console.log(a);
console.log(typeof a);
