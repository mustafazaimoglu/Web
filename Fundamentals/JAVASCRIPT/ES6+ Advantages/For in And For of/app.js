const engineer = {
    name : "Mustafa",
    age : 20,
    salary : 7000
};

const cities = ["Warsaw","Mersin","Malatya"];

const country = "Poland";

// For in index bazlıdır.
// Object
for (let prop in engineer)
{
    console.log(prop,engineer[prop]);
}

// Array
for (let city in cities)
{
    console.log(city,cities[city]);
}

// String
for (let index in country)
{
    console.log(index,country[index]);
}

// For Of Veri Bazlıdır.  Objelerde ÇALIŞMAZ

for (let city of cities)
{
    console.log(city);
}

for (let character of country)
{
    console.log("*",character,"*");
}

