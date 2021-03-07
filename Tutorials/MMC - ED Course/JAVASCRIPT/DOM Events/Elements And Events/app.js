const filterInput = document.getElementById("filter");
const todoForm = document.querySelector("#todo-form");

// const submitForm = function(e)
// {
//     console.log("Submit Eventi");

//     e.preventDefault();
// };

todoForm.addEventListener("submit",submitForm);

function submitForm(e)
{
    console.log("Submit Eventi");

    e.preventDefault(); // Submit Yapılınca Sayfa Yenilenip Submit Kaybolmasın diye;
};




// filterInput.addEventListener("focus",function(e)
// {
//     console.log(e); //Event Özellikleri
//     console.log(e.type);
//     console.log(e.target);
//     console.log(e.target.placeholder);
//     console.log(e.target.className);

//     console.log("Naber");
// });


// filterInput.onfocus = function() //Eski Yöntem Hala Kullanılabilir. 
// {
//     console.log("Naber");
// }