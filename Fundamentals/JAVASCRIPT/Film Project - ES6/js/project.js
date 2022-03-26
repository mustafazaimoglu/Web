const form = document.getElementById("film-form");
const titleField = document.querySelector("#title");
const directorField = document.querySelector("#director");
const urlField = document.querySelector("#url");
const cardBody = document.querySelectorAll(".card-body")[1];
const clear = document.querySelector("#clear-films");

// Element Listener Doldurma
includeEventListeners();

function includeEventListeners()
{
    form.addEventListener("submit", addFilm);
    document.addEventListener("DOMContentLoaded", function(e)
    {
        let films = Storage.getFilmsFromStorage();
        UI.loadAllFilms(films);
    });
    cardBody.addEventListener("click", deleteFilm);
    clear.addEventListener("click", clearAllFilms);
}

function deleteFilm(e)
{
    if (e.target.id === "delete-film")
    {
        UI.deleteFilmFromUI(e.target);
        Storage.deleteFilmFromStorage(e.target.parentElement.previousElementSibling.previousElementSibling.textContent);

        UI.displayMessage("Film Başarı ile Silidi!", "success", 1500);
    }
}

function addFilm(e)
{
    const title = titleField.value;
    const director = directorField.value;
    const url = urlField.value;


    if (title === "" || director === "" || url === "")
    {
        UI.displayMessage("Lütfen Tüm Alanları Doldurunuz!", "danger", 1500);
    }
    else
    {
        // Film Objesi Oluşturduk
        const newFilm = new Film(title, director, url);

        UI.addFilmToUI(newFilm);
        Storage.addFilmToStorage(newFilm);

        UI.displayMessage("Film Başarı ile Eklendi!", "success", 1500);

        UI.clearInput(titleField, directorField, urlField);
    }


    e.preventDefault();
}

function clearAllFilms(e)
{
    if (confirm("Silmek İstediğinizden Emin Misiniz?"))
    {
        UI.clearAllFilmsFromUI();
        Storage.clearAllFilmsFromStorage();
    }
    else
    {
        UI.displayMessage("Silme İşlemi İptal Edildi!", "warning", 1750);
    }

}