class Storage 
{
    static key = "films";
    static addFilmToStorage(newFilm)
    {
        let films = this.getFilmsFromStorage();

        films.push(newFilm);

        localStorage.setItem(this.key,JSON.stringify(films));
    }

    static getFilmsFromStorage()
    {
        
        let films;

        if (localStorage.getItem(this.key) === null)
        {
            films = [];
        }
        else
        {
            films = JSON.parse(localStorage.getItem(this.key));
        }

        return films;
    }

    static deleteFilmFromStorage(index)
    {
        let films = this.getFilmsFromStorage();

        films.splice(index,1);     

        localStorage.setItem(this.key, JSON.stringify(films));
    }

    static clearTheTable()
    {
        localStorage.removeItem(this.key);
    }

}