class Github
{
    constructor()
    {
        this.url = "https://api.github.com/users/"
    }

    async getDataFromGithub(username)
    {
        const githubUser = await fetch(this.url + username);
        const githubRepo = await fetch(this.url + username + "/repos");

        const userData = await githubUser.json();
        const repoData = await githubRepo.json();

        return {
            user : userData,
            repo : repoData
        }
    }
}