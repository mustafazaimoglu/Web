// let i = 10;

// while (i >= 0)
// {
//     console.log(i);
//     i--;
// }

// BREAK AND CONTINUE

// let i = 0;

// while (i < 10)
// {
//     if (i === 9)
//     {
//         console.log("9 da bitti");
//         break;
//     }

//     if (i === 3 || i === 5)
//     {
//         if (i === 3) console.log("3 atlandı");
//         if (i === 5) console.log("5 atlandı");

//         i++;
//         continue;
//     }

//     console.log(i);
//     i++;
// }


// let a = 5;

// do
// {
//     console.log(a);
//     a++;
// }
// while(a < 4);

const langs = new Array("Python","Java","JavaScript");

// for (let i = 0; i < langs.length; i++)
// {
//     console.log(langs[i]);
// }

langs.forEach(function(v,i) // VALUE -- INDEX
{
    console.log(v , i);
})

const users = [
    {name : "Mustafa",age : "20"},
    {name : "Leyla",age : 20},
    {name : "Zack",age : "16"}
]

const names = users.map(function(user) //Parcalamak İçin MAP
{
    return user.name;
});

const ages = users.map(function(user)
{
    return user.age;
})

console.log(names);
console.log(ages);

const user = {
    name : "Mustafa",
    age : 20
};

for (let key in user)
{
    console.log(key,user[key]);
}