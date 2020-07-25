let value;

// const numbers = [43,25,66,99,32,47,44];

const numbers = new Array(23,34,45,25,67,5,89);

const langs = ["Ptyhon","Java","C++","JavaScript"];

const mix = ["Merhaba",22,null,undefined,3.14];

// Uzunluk
value = numbers.length;

// Indexleme
value = numbers[0];
value = numbers[2];
value = numbers[numbers.length + (-1)];

// Herhangi Bir Indexi Değiştirme
numbers[2] = 100;

value = numbers;

// Index Of

value = numbers.indexOf(100);

// Arrayin Sonuna Değer Ekleme - push
numbers.push(111);

// Arryin Basına Değer Ekleme - unshift
numbers.unshift(121);

value = numbers;

// Arrayin Sonundan Değer Cıkarma - pop
numbers.pop();

value = numbers;

// Arrayin Basından Değer Cıkarma - shift
numbers.shift();

value = numbers;

// Arrayin Belli bir Kısmını Atma - splice
numbers.splice(0,3);

value = numbers;

// Arrayi Tersine Çevirme
numbers.reverse();

value = numbers;

// Array Sıralama

value = numbers.sort(); // Bu sadece ilk hanelere bakarak Sıralar düzdün sıralaması için function yazmamız gerekli;


value = numbers.sort(function(x,y) { //Kucukten Buyuğe Sıralama
    return x - y;
});

value = numbers.sort(function(x,y) { //Buyukten Kuçuğe Sıralama
    return y - x;
});

console.log(value);