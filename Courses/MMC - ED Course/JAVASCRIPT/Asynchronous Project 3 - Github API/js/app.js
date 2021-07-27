const github = new Github();
const ui = new UI();

// Choose Elements

const from = document.getElementById("github-form");
const githubName = document.getElementById("githubname");
const clearLastSearches = document.querySelector("#clear-last-users");
const searchesList = document.querySelector("#last-users");

includeEventListeners();

function includeEventListeners()
{
    from.addEventListener("submit", getDataFromGithub);
    clearLastSearches.addEventListener("click", clearTheList);
    document.addEventListener("DOMContentLoaded",getAllOldSearches)
}

function getDataFromGithub(e)
{
    let username = githubName.value.trim();

    if (username === "")
    {
        alert("Lütfen Geçerli Bir Kullanıcı Adı Giriniz!");
    }
    else
    {
        github.getDataFromGithub(username)
        .then(result => 
            {
                if (result.user.message === "Not Found")
                {
                    ui.displayAlert("danger","Kullanıcı Bulunamadı!")
                }
                else
                {
                    ui.showLastUsers(username);
                    ui.showUserProfile(result.user);
                    ui.showUserRepos(result.repo)
                }
            })
        .catch(err => ui.displayAlert("danger",err));
    }



    ui.clearInput();
    e.preventDefault();
}

function clearTheList()
{
    if (confirm("Are You Sure?"))
    {
        Storage.clearAllSearchedUsersFromStorage();
        
        ui.clearTheList();
    }    

}

function getAllOldSearches()
{
    let users = Storage.getSearchedUsersFromStorage();
    
    let list = "";
    users.forEach(u => 
        {   
            list += `<li class="list-group-item">${u}</li>`;
        });

    searchesList.innerHTML = list;
}