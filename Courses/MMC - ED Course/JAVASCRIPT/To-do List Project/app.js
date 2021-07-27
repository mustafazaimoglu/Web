const addingForm = document.querySelector("#todo-form");
const addingTextField = document.getElementById("todo");
const todoList = document.querySelector(".list-group");
const firstCardBody = document.querySelectorAll(".card-body")[0];
const secondCardBody = document.querySelectorAll(".card-body")[1];
const searchingField = document.getElementById("filter");
const clearButton = document.querySelector("#clear-todos");

pushingEventListeners();

function pushingEventListeners()
{
    addingForm.addEventListener("submit",addTodo);
    document.addEventListener("DOMContentLoaded",addAllTodosToUI);
    secondCardBody.addEventListener("click",deleteTodoItem);
    searchingField.addEventListener("keyup",searchInTodos);
    clearButton.addEventListener("click",clearTheList);
}

function clearTheList(e)
{
    if (confirm("Tümünü Silmek İstediğinize Emin misiniz?"))
    {
        // todoList.innerHTML = ""; kısa olsada yavaş çalışıyor.

        while (todoList.firstElementChild != null)
        {
            todoList.removeChild(todoList.firstElementChild);
        }

        localStorage.removeItem("todos");

        showAlert("warning","Tüm Todolar Silindi",1500);
    }
}

function searchInTodos(e)
{
    const searchText = e.target.value.toLowerCase();
    const listItems = document.querySelectorAll(".list-group-item")

    listItems.forEach(function(item)
    {
        const text = item.textContent.toLowerCase();

        if (text.indexOf(searchText) === -1)
        {
            item.setAttribute("style","display : none !important"); // !important bootstrap in d-flex ini yenmesi için
        }
        else
        {
            item.setAttribute("style","display : block");
        }
    })

}

function deleteTodoItem(e)
{
    if (e.target.className === "fa fa-remove")
    {
        e.target.parentElement.parentElement.remove();
        deleteTodoItemFromStorage(e.target.parentElement.parentElement.textContent);
        showAlert("success","Todo Başarı ile Siindi...",1500);
    }
}

function deleteTodoItemFromStorage(todelete)
{
    let todos = getTodosFromStorage();

    todos.forEach(function(todo,index)
    {
        if (todelete === todo)
        {
            todos.splice(index,1); // indexten itibaren 1 tane silmek için;
        }
    });

    localStorage.setItem("todos",JSON.stringify(todos));

}

function addAllTodosToUI()
{
    let todos = getTodosFromStorage();

    todos.forEach(function(t)
    {
        addTodoToUI(t);
    });
}

function addTodo(e)
{
    const same = false;
    const newTodo = addingTextField.value.trim();

    const listOfTodos = getTodosFromStorage();

    listOfTodos.forEach(function(l)
    {
        if (l === newTodo)
        {
            showAlert("danger","Girilen Todo Zaten Mevcut...",1500);
            same = true;
        }
        
    });

    if (newTodo === "" && same === false)
    {
        showAlert("danger","Lütfen Bir Todo Girin...",1500);
    }
    else
    {
        addTodoToUI(newTodo);
        addTodoToStorage(newTodo);
        showAlert("success","Todo Başarı ile eklendi...",1000);
    }


    e.preventDefault();
}

function getTodosFromStorage()
{
    let todos;
    
    if (localStorage.getItem("todos") === null)
    {
        todos = [];
    }
    else
    {
        todos = JSON.parse(localStorage.getItem("todos"));
    }

    return todos;
}

function addTodoToStorage(newTodo)
{
    let todos = getTodosFromStorage();

    todos.push(newTodo);

    localStorage.setItem("todos",JSON.stringify(todos));
}

function showAlert(type,message,delay)
{
    // <div class="alert alert-danger" role="alert">
    //     This is a danger alert—check it out!
    // </div>

    const alert = document.createElement("div");
    alert.className = `alert alert-${type}`;
    alert.textContent = message;

    firstCardBody.appendChild(alert);

    setTimeout(function() //setTimeOut(func,delay); beklemesi için
    {
        alert.remove();
    },delay);

}

function addTodoToUI(newTodo) 
{
    /*
    <li class="list-group-item d-flex justify-content-between">
        Todo 1
          <a href = "#" class ="delete-item">
                <i class = "fa fa-remove"></i>
          </a>
    </li> 
    */

    // List item Oluşturma
    const newListItem = document.createElement("li");
    newListItem.className = "list-group-item d-flex justify-content-between";

    // link oluşturma
    const newLink = document.createElement("a");
    newLink.href = "#";
    newLink.className = "delete-item";
    newLink.innerHTML = "<i class = 'fa fa-remove'></i>";

    // Text Node Ekleme
    newListItem.appendChild(document.createTextNode(newTodo));
    newListItem.appendChild(newLink);

    // Listeye Ekleme

    todoList.appendChild(newListItem);

    addingTextField.value = "";
}