// JSON veya TEXT doner

function getText()
{
    fetch("example.txt")
    .then(response => response.text()) // ilk cevap döner string olarak response sonra response.text() ile düzenlenip alta gönderilir.
    .then(data => console.log(data)) // data yukarıdaki then den otomatik olarak alınır.
    .catch(err => console.error(err)); // hata olma durumu
}

function getJSON()
{
    fetch("example.json")
    .then(response => response.json()) // her then ile üstten son return olan parametre olarak alınır.
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