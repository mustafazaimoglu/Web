const currency = new Currency();
const ui = new UI();

// Choose Elements
const amount = document.querySelector("#amount");
const firstCurrency = document.getElementById("firstCurrency");
const secondCurrency = document.getElementById("secondCurrency");

// Add Event Listeners
amount.addEventListener("input",doTheCalculation);
firstCurrency.onchange = function()
{
    doTheCalculation();
};
secondCurrency.onchange = function()
{
    doTheCalculation();
};

function doTheCalculation()
{
    currency.exchange(amount.value,firstCurrency.value,secondCurrency.value)
    .then(response =>  ui.changeTheCurrencies(response,firstCurrency.value,secondCurrency.value))
    .catch(err => console.log(err));
}
