//Element Silme

const todoList = document.querySelector("ul.list-group");
const todos = document.querySelectorAll("li.list-group-item");

// Remove Methodu - index yeterli 

todos[1].remove();
todos[todos.length - 1].remove();


// Remove Child - Element Gönderilmeli

todoList.removeChild(todoList.lastElementChild);
todoList.removeChild(todos[3]);

console.log(todos);
console.log(todoList);