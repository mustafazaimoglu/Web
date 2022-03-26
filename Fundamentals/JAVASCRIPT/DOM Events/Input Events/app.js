const input = document.getElementById("filter");

// document.addEventListener("DOMContentLoaded",load); // SAYFA YUKLENMESİ BİTTİĞİNDE ÇALIŞAN EVENT

// function load(e)
// {
//     console.log("Sayfa Galiba Yuklendi!");
// }

// Focus
// input.addEventListener("focus",run); //Odaklanma
// Blur
// input.addEventListener("blur",run); //Odak Çıkışı

// KOPYALA - YAPIŞTIR - KES - SEÇ (including shortcuts)
// Paste
// input.addEventListener("paste",run);
// Copy
// input.addEventListener("copy",run);

// Cut
input.addEventListener("cut",run);
// Select
input.addEventListener("select",run);

function run(e)
{
    console.log(e.type);
}