// Denifition**

// function merhaba(name,age = "Bilgi Yok") // Bu sekilde de Default Değer Koyulabilir.
// {
//     if (typeof name === "undefined") name = "Bilgi Yok"; // Bu Sekilde default değer verme örnegi.

//     console.log(`${name} Merhaba,\nYaş : ${age}`);
// }

// merhaba();

// merhaba("Mustafa",20);

// merhaba("Sevgi",20);

// merhaba("George");

// Retyrn Keyword**

// function square(x)
// {
//     return x*x;
// }

// function cube(x)
// {
//     console.log(x*x*x);
// }

// cube(square(3));

// function hello(name) 
// {
//     return `Merhaba ${name}`;
// }

// console.log(hello("Mustafa"));

// Function Expression**

// const mkz = function(name,age,dept) { //Fonksiyonun ismi en basta yazıldı o yuzden tekrar yazma gereği duymadık.
//     console.log(`Ad : ${name}\nYaş : ${age}\nBölüm : ${dept}`);
// }

// mkz("Mustafa",20,"IT");
// mkz("Ege",20,"IT");

// Immediately Invoked Function Expression**

(function(name = "Bilgi Yok Guzum") // (func...)(values..);
{
    console.log(name + " Merhaba");
})("Muztava");

// EX**

const database = {
    host : "localhost",
    add : function() 
    {
        console.log("Eklendi");
    },
    get : function()
    {
        console.log("Elde Edildi");
    },
    update : function(id) 
    {
        console.log(`ID : ${id} Güncellendi`);
    },
    delete : function(id)
    {
        console.log(`ID : ${id} Silindi`);
    }
}

console.log(database.host);

database.add();

database.get();

database.update(8);

database.delete(7);