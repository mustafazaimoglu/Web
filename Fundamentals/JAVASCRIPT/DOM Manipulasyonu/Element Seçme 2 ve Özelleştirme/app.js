const element = document.querySelector("#clear-todos");

// Element Ozellikleri

// console.log(element.id);
// console.log(element.className);
// console.log(element.classList);
// console.log(element.classList[1]);
// console.log(element.textContent);
// console.log(element.href);
// console.log(document.querySelector("#clear-todos").href);
// console.log(element.style);

// Style ve Element Özelliklerini Değiştirme

element.className = "btn btn-primary";
element.style.color = "#000";
element.style.marginLeft = "4rem";
element.href = "https://www.google.com.tr";
element.target = ("_blank");
element.textContent = " Clear All The Tasks";
element.innerHTML = `<span style="color : red;">MKZ</span>`;

let element2 = document.querySelector("li:last-child");
element2 = document.querySelector("li:nth-child(2)");
element2 = document.querySelector("li:nth-child(3)");
element2 = document.querySelector("li:nth-child(4)");
element2 = document.querySelectorAll("li:nth-child(odd)");
element2 = document.querySelectorAll("li:nth-child(2n+1)");
element2 = document.querySelectorAll("li:nth-child(even)");
element2 = document.querySelectorAll("li:nth-child(2n)");


const elements = document.querySelectorAll(".list-group-item");
elements.forEach(function (el)
{
    el.style.color = "blue";
    el.style.background = "#eee";
})


element2.forEach(function (el)
{
    el.style.background = "#ccc";
    el.style.color = "red";
});

console.log(elements);