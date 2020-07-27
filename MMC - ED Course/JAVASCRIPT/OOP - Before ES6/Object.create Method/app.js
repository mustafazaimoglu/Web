// const obj = {
//     test1 : function()
//     {
//         console.log("t1");
//     },
//     test2 : function()
//     {
//         console.log("t2");
//     }
// }

// console.log(obj);

// const emp = Object.create(obj);

// emp.name = "Mustafa";
// emp.age = 20;

// console.log(emp);

// KALITIIM YAPTIK

function Person (name)
{
    this.name = name;
}

Person.prototype.test1 = function()
{
    console.log("t1");
}
Person.prototype.test2 = function()
{
    console.log("t2");
}

function Employee(name,age)
{
    this.name = name;
    this.age = age;
}

Employee.prototype = Object.create(Person.prototype);
Employee.prototype.testFunc = function()
{
    console.log("test");
}

const emp = new Employee("Mustafa",20);

console.log(emp);