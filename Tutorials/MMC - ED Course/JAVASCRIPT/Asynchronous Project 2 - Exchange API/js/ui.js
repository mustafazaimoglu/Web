class UI
{
    constructor()
    {
        this.outputFirst = document.getElementById("outputFirst");
        this.outputSecond = document.getElementById("outputSecond");
        this.result =document.querySelector("#outputResult");
    }

    changeTheCurrencies(result, first, second)
    {
        this.result.value = result;
        this.outputFirst.textContent = first; 
        this.outputSecond.textContent = second; 
    }
}