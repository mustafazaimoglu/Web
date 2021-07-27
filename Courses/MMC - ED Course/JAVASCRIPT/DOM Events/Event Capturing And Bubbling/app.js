// Event Bubbling

// document.querySelector(".container").addEventListener("click",function()
// {
//     console.log("Container");
// });

// document.querySelector(".card.row").addEventListener("click",function()
// {
//     console.log("Row");
// });

// document.querySelectorAll(".card-body")[1].addEventListener("click",function()
// {
//     console.log("Body");
// });

// Event Capturing and Delegation

const cardBody = document.querySelectorAll(".card-body")[1];

cardBody.addEventListener("click",run);

function run(e)
{
    if (e.target.className === "fa fa-remove")
    {
        console.log("Silme İşlemi");
    }

    if (e.target.id === "filter")
    {
        console.log("Filtreleme İşlemi");
    }

    if (e.target.id === "clear-todos")
    {
        console.log("Temizleme İşlemi");
    }


    // console.log(e.target);
}