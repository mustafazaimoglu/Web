const todoInput = document.getElementById("todo");
let element;

element = todoInput;
element = todoInput.classList;

todoInput.classList.add("new-class");
todoInput.classList.add("new-class2");
todoInput.classList.remove("form-control");

element = todoInput;
element = todoInput.placeholder;
element = todoInput.getAttribute("placeholder");
todoInput.setAttribute("placeholder","Naber");
todoInput.setAttribute("title","Naber"); //Sadece Olanı Değiştirme değil yeni attribute de ekleyebilir.

todoInput.removeAttribute("name");

element = todoInput;

element = todoInput.hasAttribute("required"); //Boolean Değer Döner
element = todoInput.hasAttribute("title");

console.log(element);