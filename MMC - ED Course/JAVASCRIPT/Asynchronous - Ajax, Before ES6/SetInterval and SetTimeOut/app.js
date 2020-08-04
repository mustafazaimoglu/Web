setTimeout(function()
{
    console.log("Whats Up Nerd!");
},500) //Fonk Calıştıktan 2 sn sonra calışır.

let i = 0;
const myFirstInterval = setInterval(function() //INTERVAL means ARALIK in Turkish
{
    i++;
    console.log("Sayı :",i);
},1000); // 1 sn aralıklarla clearInterval Metodu gelene kadar çalışır.

document.getElementById("btn").addEventListener("click",function()
{
    clearInterval(myFirstInterval);
    setTimeout(function()
    {
        console.log("I Said Stop Bitch!");
    },1000);
});