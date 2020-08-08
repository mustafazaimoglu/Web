class Storage
{
    static key = "searched";
    
    static getSearchedUsersFromStorage()
    {
        let users;

        if (localStorage.getItem(this.key) === null)
        {
            users = [];
        }
        else
        {
            users = JSON.parse(localStorage.getItem(this.key));
        }

        return users;
    }

    static addUserToStorage(user)
    {
        let users = this.getSearchedUsersFromStorage();

        users.push(user);

        localStorage.setItem(this.key,JSON.stringify(users));
    }

    static clearAllSearchedUsersFromStorage()
    {
        localStorage.removeItem(this.key);
    }
}