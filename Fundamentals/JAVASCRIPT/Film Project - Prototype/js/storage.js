function Storage()
{

}

Storage.prototype.addFilmToStorage = function(newFilm)
{
    let films = this.getFilmsFromStorage();

    films.push(newFilm);

    localStorage.setItem("films", JSON.stringify(films));

}

Storage.prototype.getFilmsFromStorage = function()
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

Storage.prototype.deleteFilmFromStorage = function(theFilmTitle)
{
    let films = this.getFilmsFromStorage();

    films.forEach(function(f,i)
    {
        // SPLICE
        if (f.title === theFilmTitle)
        {
            films.splice(i,1);
        }
    })

    localStorage.setItem("films",JSON.stringify(films));
}

Storage.prototype.clearAllFilmsFromStorage = function(e)
{
    localStorage.removeItem("films");
}