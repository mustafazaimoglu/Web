function Person(name,age)
{
    this.name = name;
    this.age = age;
}

Person.prototype.showInfo = function()
{
    console.log("Name : " + this.name + " - Yaş : " + this.age);
}

// const p = new Person("Mustafa",20);

// console.log(p);
// p.showInfo();

function Employee(name,age,salary)
{
    // this.name = name;
    // this.age = age;
    Person.call(this,name,age);
    this.salary = salary;
}

Employee.prototype = Object.create(Person.prototype);
Employee.prototype.toString = function()
{
    console.log("Employee");
}
// Overriding - Ezme - İptal Etmek
Employee.prototype.showInfo = function()
{
    console.log("Name : " + this.name + " - Yaş : " + this.age + " - Maaş : " + this.salary);
}

const emp = new Employee("Mustafa",20,17500);

console.log(emp);
emp.showInfo();
emp.toString();