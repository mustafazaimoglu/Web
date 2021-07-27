// Local Storage

// setItem

// localStorage.setItem("Hareket","Pushup");
// localStorage.setItem("Tekrar",50);

// // getItem -- Herşey String Olarak Tutulur

// const value = localStorage.getItem("Tekrar");

// console.log(value);
// console.log(typeof value);

// clear

// localStorage.clear();


// localStorage.setItem("Hareket", "Pushup");
// localStorage.setItem("Tekrar", 50);

// if (localStorage.getItem("harekat")  === null)
// {
//     console.log("Başaramadık Abi!");
// }
// else
// {
//     console.log("Neyi Başaramadınız #+?-{");
// }

// Array Yazma -- localStorage

// const todos = ["todo1","todo2","todo3"];

// localStorage.setItem("todos",todos); // String Olarak Tek Sıra Halinde Yazıldı.

// localStorage.setItem("todos",JSON.stringify(todos));

// const value = JSON.parse(localStorage.getItem("todos"));

// console.log(value);

const form = document.getElementById("todo-form");
const todoInput = document.getElementById("todo");

form.addEventListener("submit",ekleguzum);

function ekleguzum(e)
{   
    const value = todoInput.value;

    let todos;

    if (localStorage.getItem("todos") === null) 
    {
        todos = [];
    }
    else 
    {
        todos = JSON.parse(localStorage.getItem("todos"));
    }

    todos.push(value);

    localStorage.setItem("todos",JSON.stringify(todos));


    e.preventDefault();
}