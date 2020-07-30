class UI
{
    static addFilmToUI(newFilm)
    {

        /*
        <tr>
            <td><img src="" class="img-fluid img-thumbnail"></td>
            <td></td>
            <td></td>
            <td><a href="#" id="delete-film" class="btn btn-danger">Filmi Sil</a></td>                    
        </tr>
        */

        const filmList = document.querySelector("#films");

        filmList.innerHTML +=
            `
        <tr>
            <td><img src="${newFilm.url}" class="img-fluid img-thumbnail" width="350px"></td>
            <td>${newFilm.title}</td>
            <td>${newFilm.director}</td>
            <td><a href="#" id="delete-film" class="btn btn-danger">Filmi Sil</a></td>                    
        </tr>
        `;
    }

    static clearInput(field1, field2, field3)
    {
        field1.value = "";
        field2.value = "";
        field3.value = "";

    }

    static displayMessage(message, type, time)
    {
        const cardbody = document.querySelector(".card-body");

        const alert = document.createElement("div");
        alert.className = `alert alert-${type}`;
        alert.textContent = message;

        cardbody.appendChild(alert);

        setTimeout(function()
        {
            alert.remove();
        }, time)
    }

    static loadAllFilms(films)
    {
        const filmList = document.getElementById("films");

        films.forEach(function(f)
        {
            filmList.innerHTML +=
            `            
            <tr>
            <td><img src="${f.url}" class="img-fluid img-thumbnail"
            width="350px"></td>
            <td>${f.title}</td>
            <td>${f.director}</td>
            <td><a href="#" id = "delete-film" class = "btn btn-danger">Filmi Sil</a></td>
            </tr>
            `;
        });

    }

    static deleteFilmFromUI(element)
    {
        element.parentElement.parentElement.remove();
    }

    static clearAllFilmsFromUI()
    {
        const filmList = document.querySelector("#films");

        // filmList.innerHTML = ""; YAVAŞ!!!!!

        while (filmList.firstElementChild !== null)
        {
            filmList.lastElementChild.remove();
        }
    }
}