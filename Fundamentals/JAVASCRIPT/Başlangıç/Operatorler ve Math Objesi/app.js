let value;

const a = 10;
const b = 4;

// value = a + b;
// value = a - b;
// value = a * b;
// value = a / b;
// value = a % b;

value = Math.PI;
value = Math.E;

value = Math.round(3.8); // 4
value = Math.round(3.5); // 4 .5 den ustu yukarı altı aşagı yuvarlanır.
value = Math.round(3.2); // 3

value = Math.ceil(3.2); // 4
value = Math.ceil(3.8); // 4

value = Math.floor(3.7); // 3
value = Math.floor(3.1); // 3

value = Math.sqrt(16);
value = Math.sqrt(31); // KareKok Almak İçin

value = Math.abs(-15); 
value = Math.abs(-3.158); //Mutlak Değerini Alır.
value = Math.abs(34);

value = Math.pow(8,3) // 8 in 3.Kuvveti
value = Math.pow(4,2) // 2ün 2.Kuvveti

value = Math.max(12,-1,100,87);
value = Math.min(12,-1,100,87);

value = Math.random(); // 0 dahil 1 dahil değil sayı üretir.

value = Math.floor(Math.random() * 20 + 1); 

console.log(value);