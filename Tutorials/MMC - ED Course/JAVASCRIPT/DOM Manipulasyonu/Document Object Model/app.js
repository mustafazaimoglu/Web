let value;

value = document; // index.html i getirir
value = document.all; //Tum Etiketleri verir
value = document.all.length; //Etiket Sayisi
value = document.all[0];
value = document.all[6];
value = document.all[document.all.length-1]; //son etiket

const elements = document.all;

// for (let i = 0; i < elements.length; i++)
// {
//     console.log(elements[i]);
// }

console.log(typeof elements);

// elements.forEach(function(i) Çalışmaz 
// {
//     console.log(i);
// });

const collections = Array.from(document.all);

console.log(typeof collections);

collections.forEach(function(i)
{
    console.log(i);
});

console.log("**********************************************");

value = document.body; //body i getirir
value = document.head;
value = document.location;
value = document.location.hostname; 
value = document.location.port; 

value = document.URL;

value = document.characterSet;

console.log(value);

console.log("**********************************************");

const a = window;

console.log(a);