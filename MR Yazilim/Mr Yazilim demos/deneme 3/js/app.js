
document.querySelector(".openbtnright").addEventListener("click",function(e)
{
    document.querySelector("#navbar-list").style.width = "100%";
});

document.querySelector(".closebtnright").addEventListener("click",function(e)
{
    document.querySelector("#navbar-list").style.width = "0";
});

document.querySelector(".openbtnleft").addEventListener("click",function(e)
{
    document.querySelector("#sidebar-list").style.width = "100%";
});

document.querySelector(".closebtnleft").addEventListener("click",function(e)
{
    document.querySelector("#sidebar-list").style.width = "0";
});