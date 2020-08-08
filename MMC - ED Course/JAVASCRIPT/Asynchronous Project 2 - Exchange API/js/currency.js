class Currency
{
    constructor()
    {
        this.url ="https://api.exchangeratesapi.io/latest?base=";
    }

    exchange(amount,firstCurrency,secondCurreny)
    {
        return new Promise((resolve,reject) => 
        {
            fetch(this.url + firstCurrency)
            .then(response => response.json())
            .then(data => resolve(data.rates[secondCurreny] * amount))
            .catch(err => reject(err));
        });
    }
}