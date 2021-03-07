function Employee(name,age) //Genel Fonsiyonları Prototype eklersek ramdan kazanç sağlarız; her obje kendi için ayrı olarak fonksiyon oluşturmamiş olur.
{
    this.name = name;
    this.age = age;

};

Employee.prototype.showInfo = function() //Bu Sayede ShowInfo Sadece Class(Prototype var)
{
    console.log("İsim : " + this.name + " Yaş : " + this.age);
}

const emp1 = new Employee("Mustafa",20);
const emp2 = new Employee("Mehmet",20);

console.log(emp1);
console.log(emp2);

emp1.showInfo();

