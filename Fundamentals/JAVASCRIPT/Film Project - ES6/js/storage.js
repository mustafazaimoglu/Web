class Storage
{
    static addFilmToStorage(newFilm)
    {
        let films = this.getFilmsFromStorage();

        films.push(newFilm);

        localStorage.setItem("films", JSON.stringify(films));

    }

    static getFilmsFromStorage()
    {
        let films;

        if (localStorage.getItem("films") === null)
        {
            films = [];
        }
        else
        {
            films = JSON.parse(localStorage.getItem("films"));
        }

        return films;
    }

    static deleteFilmFromStorage(theFilmTitle)
    {
        let films = this.getFilmsFromStorage();

        films.forEach(function(f, i)
        {
            // SPLICE
            if (f.title === theFilmTitle)
            {
                films.splice(i, 1);
            }
        })

        localStorage.setItem("films", JSON.stringify(films));
    }

    static clearAllFilmsFromStorage(e)
    {
        localStorage.removeItem("films");
    }
}