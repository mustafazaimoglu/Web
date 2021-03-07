// Spread Operator

const langs = ["Python","Java","C++","Go"];

// console.log(langs[0],langs[1],langs[2],langs[3]); Old School

console.log(...langs);

const langs2 = ["JavaScript","Matlab",...langs]

console.log(langs2);
console.log(...langs2);

const numbers = [1,2,3,4,5,6,7,8];

const [a,b,...numbers2] = numbers;

console.log(a,b);
console.log(numbers2);

const addNumbers = (a,b,c) => console.log(a+b+c);

const toAdd = [100,200,300];

addNumbers(toAdd[0],toAdd[1],toAdd[2]);

addNumbers(...toAdd);