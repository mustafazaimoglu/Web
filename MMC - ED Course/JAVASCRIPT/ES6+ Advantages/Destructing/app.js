// let number1,number2;

// const arr = [12,13,14,15];

// // number1 = arr[0];
// // number2 = arr[1];

// [number1,number2] = arr; //Destructing

// // const [number1,number2] = arr;

// console.log(number1,number2);

//Obje Destructing

// const numbers = 
// {
//     a:10,
//     b:20,
//     c:30,
//     d:40,
//     e:50
// };

// const {a:num1,c:num2,e:num3} = numbers; // a c e ve için num ları kullandım

// console.log(num1,num2,num3);

// Function Destructing

// const getLangs = () => ["Java","Python","C++"];

// const [lang1,lang2,lang3] = getLangs();

// console.log(lang1,lang2,lang3);

const person = 
{
    name : "Mustafa",
    year : 2000,
    salary : 1500,
    showInfos : () => console.log("Showing Infos...")
};

const {name:isim,year:yil,salary:maas,showInfos:bilgilendir} = person;

console.log(isim,yil,maas);

bilgilendir();