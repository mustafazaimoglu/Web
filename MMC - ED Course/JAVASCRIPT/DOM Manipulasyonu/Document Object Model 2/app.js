let value;

value = document;

//Scripts

value = document.scripts; //app.js in index.html deki yerini değiştirirsen alttaki scriptleri görmez.
value = document.scripts.length;
value = document.scripts[document.scripts.length - 1];

//Links

value = document.links;
value = document.links[0];
value = document.links[document.links.length - 1];
value = document.links[document.links.length - 1].getAttribute("class");
value = document.links[document.links.length - 1].getAttribute("href");
value = document.links[document.links.length - 1].className;
value = document.links[document.links.length - 1].classList;

// Forms

value = document.forms.length;
value = document.forms[0];
value = document.forms["form"];
value = document.forms[0].id;
value = document.forms[0].getAttribute("id");
value = document.forms[0].name;
value = document.forms[0].getAttribute("name");

value = document.forms[0].method;


console.log(value);