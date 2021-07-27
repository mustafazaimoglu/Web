// module.exports.t1 = function test1()
// {
//     console.log("Mustafa Test1");
// }

// module.exports.t2 = function test2()
// {
//     console.log("Mustafa Test2");
// }

// module.exports = 
// {
//     name : "Mustafa Zaimoglu",
//     test1 : function()
//     {
//         console.log("test1");
//     },
//     person : 
//     {
//         name : "Mustafa",
//         age : "20"
//     }

// }

//ES6 Modules


export const name = "Mustafa Zaimoglu";
export function test()
{
    console.log("Test");
}
export class person
{
    static test()
    {
        console.log("Person Test");
    }
}
export const Employee = 
{
    name : "Mustafa",
    salary : 4000
}

export default class MKZ
{
    static deneme()
    {
        console.log("Bu bir denemedir.");
    }
}
