// CallBack - To Adjust Asynchronous 

const langs = ["Ptyhon", "C++", "Java"];

// langs.forEach(function(lang)
// {
//     console.log(lang);
// });

// document.getElementById("Tıkla").addEventListener("click",function(e)
// {
//     console.log("Tıkla");
// });

// function process1(callback) // Cağırıp İşlem Bitmesi Beklenmiyor.
// {
//     setTimeout(function()
//     {
//         console.log("Process 1");
//         callback();

//     }, 3000);
// }

// function process2()
// {
//     setTimeout(function()
//     {
//         console.log("Process 2");
//     }, 2000);
// }

// process1(process2);

function addLang(lang, callback)
{
    setTimeout(function()
    {
        langs.push(lang);
        console.log("Eklendi..");
        callback();
    },3000);
}

function showAllLangs()
{
    setTimeout(function()
    {
        langs.forEach(function(l)
        {
            console.log(l);
        });
    },2000)
}

addLang("Go",showAllLangs);