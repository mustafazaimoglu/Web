const header = document.getElementById("tasks-title");
const body = document.querySelectorAll(".card-body")[1];

// Click
// header.addEventListener("click",run);
// DoubleClick 
// header.addEventListener("dblclick",run);

// Mouse Down
// header.addEventListener("mousedown",run); //Basma anı
// Mouse Up
// header.addEventListener("mouseup",run); //Bırakma anı

// Mouse Over // BURDAKI FARK OVER AND OUT DA İÇERDEKİ ELEMENTLER DE KENDİSİ AYRI OLARAK OZELLİK KAZANIR
// body.addEventListener("mouseover",run); // Mouse Ustunde iken
// Mouse Out
// body.addEventListener("mouseout",run);

// Mouse Enter // SADECE VERİLEN COMPONENTDE CALISIR
body.addEventListener("mouseenter",run);
// Mouse Leave
body.addEventListener("mouseleave",run);

function run(e)
{
    console.log(e.type); // Event Tipini Yazmak İçin
}
