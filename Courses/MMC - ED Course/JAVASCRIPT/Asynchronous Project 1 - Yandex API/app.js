// Ajax , Prototype 
const translate = new Translate(document.getElementById("word").value,document.getElementById("language").value)
const ui = new UI();

eventlisteners();

function eventlisteners()
{
    document.getElementById("translate-form").addEventListener("submit",translateWord);

    document.querySelector("#language").onchange = function()
    {
        console.log("Event");
        ui.changeUI();
    }
}



function translateWord(e)
{
    translate.changeParameters(document.getElementById("word").value,document.getElementById("language").value);
    translate.translateWord(function(response,err)
    {
        if(err === null)
        {
            ui.displayTranslate(response)
        }
        else
        {
            console.error(err);
        }
    });


    e.preventDefault();
}