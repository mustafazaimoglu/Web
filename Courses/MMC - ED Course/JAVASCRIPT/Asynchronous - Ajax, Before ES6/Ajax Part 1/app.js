// Http Status
// 200 : OK
// 403 : Forbidden
// 404 : Not Found
// 505 : Internal Server Error

// Holds the status of the XMLHttpRequest. readyState returns
// 0: request not initialized 
// 1: server connection established
// 2: request received 
// 3: processing request 
// 4: request finished and response is ready

const btn = document.querySelector("#btn").addEventListener("click",function(e)
{
    const xhr = new XMLHttpRequest();
    
    // console.log(xhr);

    xhr.onload = function()
    {
        if (this.status === 200) // if olma sebebi hata da almış olabiliriz.
        {
            console.log(xhr.response);
            const div = document.getElementById("ajax-div").textContent = xhr.responseText;
        }
    }

    // xhr.onreadystatechange = function() OLD WAY
    // {
    //     // console.log(xhr.statusText);
    //     // console.log(xhr.readyState , xhr.status);
    //     if (xhr.status === 200 && xhr.readyState === 4)
    //     {
    //         console.log(xhr.responseText); // Sonuç
    //     }
    // }

    xhr.open("GET","example.txt",true); //Type - Address - Asynch or not

    xhr.send(); // POST REQUEST Yapsaydık xhr.send("anyString");

});