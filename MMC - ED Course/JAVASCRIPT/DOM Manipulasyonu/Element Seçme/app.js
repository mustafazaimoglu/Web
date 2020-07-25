let element;

// ID ye Göre

element = document.getElementById("todo-form");
element = document.getElementById("tasks-title");

// CLASS a göre (array dönebilir.) HTMLCollector

element = document.getElementsByClassName("btn");
element = document.getElementsByClassName("list-group-item")

// TAG a göre seçim (array dönebilir.)

element = document.getElementsByTagName("div");

// Query Selector - CSS Selector - Tek Bir Element Seçer.

element = document.querySelector("#todo-form");
element = document.querySelector("#tasks-title");

element = document.querySelector(".btn"); 

element = document.querySelector("li");

// QuerySelectorAll - Tüm Elementleri Seçer (NodeList)

element = document.querySelectorAll("li");

element.forEach(function(el) // ForEach ile kullanılabilir.
{
    console.log(el);
})

console.log(element);