// const emp1 = { //Object Literal İlkel
//     name : "Mustafa",
//     age : 20,
//     showInfos: () => console.log("Bilgi Babba")
// };

// console.log(emp1);
// emp1.showInfos();

function Employee(name,age,salary) { // This Kullanılmalı Objeye Odaklanmak için ,  Baş harf Buyuk Olmalı!!!
    this.name = name;
    this.age = age;
    this.salary = salary;

    this.showInfo = () => {
        console.log("Name :" + this.name);
        console.log("Age :" + this.age);
        console.log("Salary :" + this.salary);
    }
}


const emp1 = new Employee("Mustafa",20,5000);
const emp2 = new Employee("Ege",20,5000);

console.log(emp1);
console.log(emp2);

emp1.showInfo();