class UI
{
    static addFilmToUI(newFilm)
    {
        /*
        <tr>
            <td>
                <img src="" alt="banner" width="350px" class="img-fluid img-thumbnail">
            </td>
            <td></td>
            <td></td>
            <td>
                <a href="#" class="btn btn-danger" id="delete-film">Filmi Sil</a>
            </td>
        </tr> 
        */

        const table = document.querySelector("#film-table");

        const newRow = document.createElement("tr");

        newRow.innerHTML =
            `
        <td>
        <img src="${newFilm.url}" alt="banner" width="350px" class="img-fluid img-thumbnail">
        </td>
        <td>${newFilm.title}</td>
        <td>${newFilm.director}</td>
        <td>
            <a href="#" class="btn btn-danger" id="delete-film">Filmi Sil</a>
        </td>
        `;

        table.appendChild(newRow);
    }
    
    static clearTheInputs(e1,e2,e3)
    {
        e1.value = "";
        e2.value = "";
        e3.value = "";
    }

    static displayMessage(message,type,time)
    {
        const cardBody = document.querySelectorAll(".card-body")[0];

        const div = document.createElement("div");

        div.className = `alert alert-${type}`;

        div.textContent = message;

        cardBody.appendChild(div);

        setTimeout(() => {
            div.remove();
        }, time);
        
    }

    static loadAllTheContent(films)
    {
        const table = document.querySelector("#film-table");

        films.forEach(function(f)
        {
            table.innerHTML += 
            `
            <tr>
            <td>
                <img src="${f.url}" alt="banner" width="350px" class="img-fluid img-thumbnail">
            </td>
            <td>${f.title}</td>
            <td>${f.director}</td>
            <td>
                <a href="#" class="btn btn-danger" id="delete-film">Filmi Sil</a>
            </td>
            </tr> 
            `;
        });
    }

    static deleteFilmFromUI(element)
    {
        element.parentElement.parentElement.remove();
    }

    static clearTheTable()
    {
        const table = document.querySelector("#film-table");

        while (table.firstElementChild !== null)
        {
            table.firstElementChild.remove();
        }
    }

}