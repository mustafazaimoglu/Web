// Yeni Element Oluşturma

// <a id = "clear-todos" class="btn btn-dark" href="#">Tüm Taskları Temizleyin</a> 

const newElement = document.createElement("a");
const cardBody = document.getElementsByClassName("card-body")[1];

newElement.id = "next-page";
newElement.className = "btn btn-warning";
newElement.href = "https://www.yandex.com.tr";
newElement.target = "_blank";
const newElementText = "Başka Bir Sayfaya Git";

newElement.appendChild(document.createTextNode(newElementText));
cardBody.appendChild(newElement);

console.log(newElement);
console.log(cardBody);

/* 

Text Content : set etmek gibidir herseyi sileronu koyar

cardboy.textContent = "asdasdasd";

Text Node : basa sona vs ekleme yapabilir.

const text = document.createTextNode("Naber");

cardbody.appendChild(text); sona eklemek için

*/