// // Maps (Key - Value) Şeklinde değer tutar

// let myMap = new Map();

// const key1 = "Mustafa";
// const key2 = {a:10,b:20};
// const key3 = () => 3;

// myMap.set(key1,"String Type");
// myMap.set(key2,"Object Type");
// myMap.set(key3,"Function Type");

// console.log(myMap);

// // Get
// console.log(myMap.get(key1));
// console.log(myMap.get(key2));
// console.log(myMap.get(key3));

// // Map Size

// console.log(myMap.size);

const cities = new Map();

cities.set("Ankara",5);
cities.set("İstanbul",17);
cities.set("İzmir",5);

// For Each

// cities.forEach(function(value,key)
// {
//     console.log(key,value);
// });

// For Of

// for (let [key,value] of cities) //Destruction
// {
//     console.log(key,value);
// }

//Map Keys

// for(let key of cities.keys())
// {
//     console.log(key);
// }

// //Map Values

// for (let value of cities.values())
// {
//     console.log(value);
// }

//Arraylerden Map Oluşturma
const array = [["key1","value1"],["key2","value2"]];

const lastMap = new Map(array);

console.log(lastMap);

// Maplerden Array Oluşturma

const a = Array.from(cities);
// [["Ankara",5],["İstanbul",17],["İzmir",5]]

console.log(a);
