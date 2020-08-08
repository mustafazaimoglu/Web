const translate = new Translate();
const ui = new UI();

document.querySelector("#word").addEventListener("keyup",translateThatText);
document.getElementById("language").onchange = function()
{
    ui.changeTheUI();
    translateThatText();
};

function translateThatText()
{
    if (document.getElementById("word").value.length > 0)
    {
        translate.translateThatText(document.getElementById("word").value,document.querySelector("#language").value)
        .then(response => ui.writeTheText(response));
    }
    else
    {
        ui.writeTheText("")
    }
}