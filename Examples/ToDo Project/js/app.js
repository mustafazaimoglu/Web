const addTextField = document.querySelector("#addTodoField");
const addForm = document.getElementById("addForm");
const list = document.querySelector("#todo-list");
const bodyAdd = document.getElementById("body-add");
const bodyList = document.querySelector("#body-list");
const searchField = document.querySelector("#filter");
const clearButton = document.querySelector("#clear-them-all");

includeEventListeners();

function includeEventListeners() {
    addForm.addEventListener("submit", addTodoFunction);
    document.addEventListener("DOMContentLoaded", addAllTodosToUI);
    bodyList.addEventListener("click", deleteItem);
    searchField.addEventListener("keyup", filterTodo);
    clearButton.addEventListener("click", clearThemAll);
}

function clearThemAll(e) {
    if (confirm("Listeyi Temizlemek İstiyor musunuz?")) {
        let count = list.childElementCount;

        while (count > 1) {
            list.removeChild(list.lastElementChild);

            count--;
        }

        localStorage.removeItem("todos");

        showAlert("danger", "Tüm Liste Temizlendi...", 1500);
    }
}

function filterTodo(e) {
    const searchText = e.target.value.toLowerCase();
    const listItems = document.querySelectorAll(".list-group-item-dark"); // ForEach Kullanabilmek için

    listItems.forEach(function (l) {
        const item = l.textContent.toLowerCase();

        if (item.indexOf(searchText) === -1) {
            l.setAttribute("style", "display : none !important");
        } else {
            l.setAttribute("style", "display : block");
        }

    });

}

function deleteItem(e) {
    if (e.target.className === "fas fa-trash") {
        e.target.parentElement.parentElement.remove();
        deleteTodoFromStorage(e.target.parentElement.parentElement.textContent);
        showAlert("success", "Başarı İle Silindi...", 1500);
    }
}

function deleteTodoFromStorage(todelete) {
    let todos = getTodosFromStorage();

    todos.forEach(function (t, i) {
        if (t === todelete) {
            todos.splice(i, 1);
        }
    });

    localStorage.setItem("todos", JSON.stringify(todos));
}

function addAllTodosToUI(e) {
    const todos = getTodosFromStorage();

    todos.forEach(function (t) {
        addTodoToUI(t);
    });
}

function addTodoFunction(e) {
    const newTodo = addTextField.value;

    if (newTodo === "") {
        showAlert("danger", "Bir Todo Girin...", 1500);

    } else {
        let same = alreadyHave(newTodo);

        if (same) 
        {
            addTextField.value = "";
            showAlert("danger","Girilen Todo Zaten Var...",2500);
        } 
        else 
        {
            addTodoToUI(newTodo);
            addTodoToStorage(newTodo);
            showAlert("success", "Başarı ile Eklendi!", 1500);

        }
    }

    e.preventDefault(); // DİKKAT -_-
}

function alreadyHave(newTodo) {
    const todos = getTodosFromStorage();

    for (let i = 0; i < todos.length; i++)
    {
        if (todos[i] === newTodo)
        {
            return true;
        }
    }

    return false;
    
}

function getTodosFromStorage() {
    let todos;

    if (localStorage.getItem("todos") === null) {
        todos = [];
    } else {
        todos = JSON.parse(localStorage.getItem("todos"));
    }

    return todos;
}

function addTodoToStorage(newTodo) {
    let todos = getTodosFromStorage();

    todos.push(newTodo);

    localStorage.setItem("todos", JSON.stringify(todos));
}

function addTodoToUI(newTodo) {
    /*
    <li class="list-group-item list-group-item-dark d-flex justify-content-between px-4">
         Todo 1
         <a href="#">
               <i class="fas fa-trash"></i>
            </a>
     </li>
    */

    const liElement = document.createElement("li");
    liElement.className = "list-group-item list-group-item-dark d-flex justify-content-between px-4";

    const aElement = document.createElement("a");
    aElement.href = "#";
    aElement.innerHTML = `<i class="fas fa-trash"></i>`;

    liElement.appendChild(document.createTextNode(newTodo));
    liElement.appendChild(aElement);

    list.appendChild(liElement);

    addTextField.value = "";
}

function showAlert(type, message, delay) {
    // <div class="alert alert-danger" role="alert">
    //    A simple danger alert—check it out!
    // </div>
    const alert = document.createElement("div");

    alert.className = `alert alert-${type}`;

    alert.textContent = message;

    bodyAdd.appendChild(alert);

    setTimeout(function () {
        alert.remove();
    }, delay);

}