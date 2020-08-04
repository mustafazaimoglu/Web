document.querySelector("#change").addEventListener("click",exchange);

function exchange(e)
{
    const xhr = new XMLHttpRequest();

    xhr.open("GET","https://api.exchangeratesapi.io/latest"); //Default olarak asenkron

    xhr.onload = function()
    {
        if (xhr.status === 200)
        {
            const response = JSON.parse(xhr.responseText);

            const rate = response.rates.TRY;

            const amount = Number(document.getElementById("amount").value);

            document.querySelector("#tl").value = amount * rate;

        }

    }

    xhr.send();

}