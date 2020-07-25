// let a = "Mustafa";
// let b = "Mustafa";

// if (a === b)
// {
//     console.log("eşit");
// }

const person1 = {
    name:"mkz",
    age:20
};

const person2 = {
    name:"mkz",
    age:20
};

if (person1 === person2)
{
    console.log("eşit");
}
else
{
    console.log("eşit değil");
}

const c = new Map();
const key = [1,2,3];
c.set("Ankara",5);
c.set("İstanbul",15);
c.set(key,"Array");

console.log(c.get(key));