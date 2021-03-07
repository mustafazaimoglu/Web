// Replace

// <h5 class="card-title" id = "tasks-title">Todolar</h5>

const cardBody = document.querySelectorAll(".card-body")[1];

const newElement = document.createElement("h3");

newElement.id = "tasks-title";
newElement.className = "card-title";
newElement.style.color = "purple";
// newElement.textContent = "Yeni Todolar";
newElement.appendChild(document.createTextNode("Yeni Todolar"));

// Eski Element

const oldElement = document.querySelector("#tasks-title");

cardBody.replaceChild(newElement, oldElement);

console.log(newElement);
