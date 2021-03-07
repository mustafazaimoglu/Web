// Syntactic Sugar

// function Employee(name,age,salary){
//     this.name = name;
//     this.age = age;
//     this.salary = salary;
// }

// Employee.prototype.showInfo = function()
// {
//     console.log("İsim:" + this.name + "\nYaş:" + this.age + "\nMaaş:"+ this.salary);
// }

// const emp = new Employee("Mustafa",20,17500);
// console.log(emp);
// emp.showInfo();

class Employee
{
    constructor(name,age,salary)
    {
        this.name = name;
        this.age = age;
        this.salary = salary;
    }

    showInfo()
    {
        console.log("İsim : " + this.name + "\nYaş : " + this.age + "\nMaaş : "+ this.salary);
    }
}

const emp = new Employee("Mustafa",20,17500);
console.log(emp);
emp.showInfo();