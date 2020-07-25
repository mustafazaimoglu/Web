const clsBtn = document.querySelector(".closebtn");
const opnBtn = document.querySelector(".openbtn");

clsBtn.addEventListener("click",function(e)
{
    document.querySelector(".mkzside").style.width = "0";
});

opnBtn.addEventListener("click",function(e)
{
    document.querySelector(".mkzside").style.width = "100%";
});