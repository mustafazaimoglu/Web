let value;

const todoList = document.querySelector(".list-group");
const todo = document.querySelector(".list-group-item:nth-child(2)");
const cardrow = document.querySelector(".card.row");

value = todoList;
value = todo;
value = cardrow;

// Child Nodes - Text Dahil

value = todoList.childNodes; // <li> ler arasındaki boslukları da child zannediyor. #Text Seklinde
value = todoList.childNodes[0];

// Children - Sadece Element Seçer

value = todoList.children;
value = todoList.children[0];
value = todoList.children[todoList.children.length - 1];
value = todoList.children[2].textContent = "Just I wanted to change this";

value = cardrow;
value = cardrow.children;
value = cardrow.children.length;
value = cardrow.children[2].children[1].textContent = "I changed this too";

value = todoList;
value = todoList.firstElementChild;
value = todoList.lastElementChild;
value = todoList.children.length;
value = todoList.childElementCount;

value = cardrow;
value = cardrow.parentElement;
value = cardrow.parentElement.parentElement;

// Element Siblings

value = todo;
value = todo.previousElementSibling;
value = todo.previousElementSibling.previousElementSibling;
value = todo.nextElementSibling;
value = todo.nextElementSibling.nextElementSibling;

console.log(value);