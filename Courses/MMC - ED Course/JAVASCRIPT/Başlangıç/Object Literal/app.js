let value;

const programmer = {
    name : "Mustafa Zaimoğlu",
    age : 20,
    email : "mkz@gmail.com",
    langs : ["C","Java","JavaScript"],

    address : {
        city : "Mersin",
        district : "Gülnar"
    },

    work : function() {
        console.log("Programcı Çalışıyor Brow...");
    }
}

value = programmer;

value = programmer.name;
value = programmer.email; // Daha Yaygın
value = programmer["email"];

value = programmer.langs;

value = programmer.address.district;


const programmers = [
    {name : "Mustafa Zaimoğlu", age : 20},
    {name : "Ramazan Kahraman", age : 20}
];

value = programmers[0].name;
let valueNew = programmers[1].name;

console.log(valueNew);
console.log(value);
programmer.work();