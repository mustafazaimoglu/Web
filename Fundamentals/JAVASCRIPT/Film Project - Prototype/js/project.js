const form = document.getElementById("film-form");
const titleField = document.querySelector("#title");
const directorField = document.querySelector("#director");
const urlField = document.querySelector("#url");
const cardBody = document.querySelectorAll(".card-body")[1];
const clear = document.querySelector("#clear-films");

// UI Baslatma
const ui = new UI();

// Storage Başlatma
const storage = new Storage();

// Element Listener Doldurma
includeEventListeners();

function includeEventListeners()
{
    form.addEventListener("submit",addFilm);
    document.addEventListener("DOMContentLoaded",function(e)
    {
        let films = storage.getFilmsFromStorage();
        ui.loadAllFilms(films);
    });
    cardBody.addEventListener("click",deleteFilm);
    clear.addEventListener("click",clearAllFilms);
}

function deleteFilm(e)
{
    if (e.target.id === "delete-film")
    {
        ui.deleteFilmFromUI(e.target);
        storage.deleteFilmFromStorage(e.target.parentElement.previousElementSibling.previousElementSibling.textContent);

        ui.displayMessage("Film Başarı ile Silidi!","success",1500);
    }
}

function addFilm(e)
{
    const title = titleField.value;
    const director = directorField.value;
    const url = urlField.value;


    if (title === "" || director === "" || url === "")
    {
        ui.displayMessage("Lütfen Tüm Alanları Doldurunuz!","danger",1500);
    }
    else
    {
        // Film Objesi Oluşturduk
        const newFilm = new Film(title,director,url);

        ui.addFilmToUI(newFilm);
        storage.addFilmToStorage(newFilm);

        ui.displayMessage("Film Başarı ile Eklendi!","success",1500);

        ui.clearInput(titleField,directorField,urlField);
    }

    
    e.preventDefault();
}

function clearAllFilms(e)
{
    if (confirm("Silmek İstediğinizden Emin Misiniz?"))
    {
        ui.clearAllFilmsFromUI();
        storage.clearAllFilmsFromStorage();
    }
    else
    {
        ui.displayMessage("Silme İşlemi İptal Edildi!","warning",1750);
    }
    
}