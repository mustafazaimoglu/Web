let value;

const firstName = "Louis";
const lastName = "Armstrong";

const languages = "Java,Python,C++";

value = firstName + lastName;

value = firstName + " " + lastName;

value = "Mustafa ";

value = value + "Zaimoğlu"; // value += "Zaimoğlu"

value = firstName.length;

value = firstName.concat(" ",lastName," ","is an ","astronaut");
// firstName + " " + lastName + ....;

value = firstName.toLowerCase();

value = lastName.toUpperCase();

value = lastName[0];
value = lastName[5];
value = lastName[lastName.length - 1];

// Index Of

value = lastName.indexOf("A");
value = lastName.indexOf("m");
value = lastName.indexOf("z"); // Olamayan Değer Girilirse değer -1 Olarak Geri Döner.

// Char At

value = firstName.charAt(3);
value = lastName.charAt(lastName.length - 1);

//Split

value = languages.split(","); // Girilen Değere Göre Stringi Parçalar.

// Replace Birinci değerin yerine ikinci değeri koyar.

value = languages.replace("Python","Matlab"); 

// Includes true false doner.

value = languages.includes("Java");
value = languages.includes("Go");

console.log(value)