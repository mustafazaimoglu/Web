// EcmaScript 6 (2015) Öncesi
// function Person(name,age)
// {
//     this.name = name;
//     this.age = age;
// }

// Person.prototype.showInfo = function ()
// {
//     console.log("İsim : " + this.name + "\nYaş : " + this.age);
// }

// function Employee(name,age,salary)
// {
//     Person.call(this,name,age);
//     this.salary = salary;
// }

// Employee.prototype = Object.create(Person.prototype);
// Employee.prototype.showInfo = function()
// {
//     console.log("İsim : " + this.name + "\nYaş : " + this.age + "\nMaaş : " + this.salary);
// }

// Employee.prototype.toString = function()
// {
//     console.log("Employee");
// }

// const emp = new Employee("Mustafa",20,17500);

// console.log(emp);
// emp.showInfo();

// EcmaScript 6 (2015) Sonrası

class Person // SuperClass - BaseClass
{
    constructor(name, age)
    {
        this.name = name;
        this.age = age;
    }

    showInfo()
    {
        console.log("İsim : " + this.name + "\nYaş : " + this.age);
    }

}


class Employee extends Person // SubClass - ChildClass - DerivedClass
{
    constructor(name, age, salary)
    {
        super(name, age);
        this.salary = salary;
    }

    showInfo() // Overriding
    {
        console.log("İsim : " + this.name + "\nYaş : " + this.age + "\nMaaş : " + this.salary);
    }

    toString() // Overriding
    {
        console.log("Employee");
    }

    raiseSalary(amount) // Extra Property
    {
        this.salary += amount;
    }
}

const emp = new Employee("Mustafa", 20, 17500);
emp.raiseSalary(2500);

console.log(emp);
emp.showInfo();
emp.toString();