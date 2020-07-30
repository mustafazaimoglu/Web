const filmForm = document.querySelector("#film-form");
const titleField = document.querySelector("#title");
const directorField = document.querySelector("#director");
const urlField = document.querySelector("#url");
const cardBody = document.querySelectorAll(".card-body")[1];
const clearButton = document.querySelector("#clear-films");

includeEventListeners();

function includeEventListeners()
{
    filmForm.addEventListener("submit", addNewFilm);
    document.addEventListener("DOMContentLoaded",function(e)
    {
        let films = Storage.getFilmsFromStorage();
        UI.loadAllTheContent(films);
    });
    cardBody.addEventListener("click",deleteWhatYouFind);
    clearButton.addEventListener("click",clearTheTable);
}

function addNewFilm(e)
{
    const t = titleField.value.trim();
    const d = directorField.value.trim();
    const u = urlField.value.trim();

    if (t === "" || d === "" || u === "")
    {
        UI.displayMessage("Lutfen Tüm Alanları Doldurunuz!","primary",1500);
    }
    else
    {
        const newFilm = new Film(t, d, u);

        UI.addFilmToUI(newFilm);
        Storage.addFilmToStorage(newFilm);

        UI.displayMessage("Başarı ile eklendi!","success",1500);

        UI.clearTheInputs(titleField,directorField,urlField);
    }
    
    e.preventDefault();
}

function deleteWhatYouFind(e)
{
    if (e.target.id === "delete-film")
    {
        // ELEMENTIN SIRASINI BULDUK
        let element = e.target.parentElement.parentElement;
        
        let i = 0;
        while (element.previousElementSibling !== null)
        {
            element = element.previousElementSibling;
            i++;
        }

        UI.deleteFilmFromUI(e.target);
        Storage.deleteFilmFromStorage(i);
        UI.displayMessage("Başarı ile Silindi!","warning",1500);
    }
}

function clearTheTable(e)
{
    if (confirm("Do you wanna really do that?"))
    {
        UI.clearTheTable();
        Storage.clearTheTable();
        UI.displayMessage("Tablo Başarı İle Temizlendi","success",1500);
    }
    else
    {
        UI.displayMessage("İşlem İptal Edildi!","primary",1500);
    }
}