document.getElementById("menuOpenButton").addEventListener("click", e => 
{
    console.log("MKZ");
    document.querySelector("#menus").style.width = "300px";
});

document.getElementById("menuCloseButton").addEventListener("click", e => 
{
    console.log("MKZ");
    document.querySelector("#menus").style.width = "0";
});


let navbarWidthController = window.matchMedia('(min-width: 762px)');

function screenTest(e)
{
    if (navbarWidthController.matches)
    {
        document.querySelector("#menus").style.width = "100%";
        console.log(document.querySelector("#menus").style.width);
    }
    else
    {
        document.querySelector("#menus").style.width = "0%";

    }
}

navbarWidthController.addListener(screenTest);