// Session Stroage - Key And Value - Session Oturum Demek Oturum Boyunca Depolanır. 

// Buttons

const add = document.querySelector("#add");
const del = document.getElementById("delete");
const clear = document.querySelector("#clear");

// Inputs

const keyField = document.querySelector("#addkey");
const valueField = document.getElementById("addvalue");
const deleteField = document.querySelector("#deletekey");

add.addEventListener("click",addItem);
del.addEventListener("click",delItem);
clear.addEventListener("click",clearItems);

function addItem(e)
{
    sessionStorage.setItem(keyField.value,valueField.value);
}

function delItem(e)
{
    sessionStorage.removeItem(deleteField.value);
}

function clearItems(e)
{
    sessionStorage.clear();
}