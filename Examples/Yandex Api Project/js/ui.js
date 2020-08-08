class UI
{
    constructor()
    {
        this.imageField = document.getElementById("outputImage");
        this.translateField = document.getElementById("outputWord");
        this.translateLang = document.getElementById("outputLanguage");

        this.languageList = document.querySelector("#language");
    }

    changeTheUI()
    {
       this.imageField.src = `images/${this.languageList.value}.png`;
       this.translateLang.textContent = this.languageList.options[this.languageList.selectedIndex].textContent;

    //    console.log(this.languageList.options[this.languageList.selectedIndex].textContent);
    }

    writeTheText(response)
    {
        this.translateField.textContent = response;
    }
}