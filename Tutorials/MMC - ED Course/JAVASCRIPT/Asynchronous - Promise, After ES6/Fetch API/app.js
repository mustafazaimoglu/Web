// JSON veya TEXT doner

function getText()
{
    fetch("example.txt")
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(err => console.error(err));
}

function getJSON()
{
    fetch("example.json")
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(err => console.error(err));
};

function getFromOutside(USD)
{
    fetch("https://api.exchangeratesapi.io/latest?base=USD")
    .then(response => response.json())
    .then(data => console.log(USD + " Dolar " + data.rates.TRY * USD + " liradır."))
    .catch(err => console.error(err));
}

getText();
getJSON();
getFromOutside(10);