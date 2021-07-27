class Request
{
    get(url) //Alma
    {
        return new Promise((resolve, reject) =>
        {
            fetch(url)
                .then(response => response.json())
                .then(data => resolve(data))
                .catch(err => reject(err));
        })

    }

    post(url, data) //Ekleme
    {
        return new Promise((resolve, reject) =>
        {
            fetch(url,
                {
                    method: "POST",
                    body: JSON.stringify(data),
                    headers:
                    {
                        "Content-type": "application/json; charset=UTF-8"
                    }
                })
                .then(response => response.json())
                .then(data => resolve(data))
                .catch(err => reject(err));
        });
    }

    put(url, data) //Güncelleme
    {
        return new Promise((resolve, reject) => 
        {
            fetch(url, 
                {
                    method : "PUT",
                    body : JSON.stringify(data),
                    headers : 
                    {
                        "Content-type" : "application/json; charset=UTF-8"
                    }
                })
                .then(response => response.json())
                .then(data => resolve(data))
                .catch(err => reject(err));
        });
    }

    delete(url) //Silme
    {
        return new Promise((resolve, reject) => 
        {
            fetch(url,
                {
                    method : "DELETE"
                })
                .then(response => resolve("Veri Silme İşlemi Başarılı!"))
                .catch(err => reject(err));
        });
    }
}

const req = new Request();

// req.get("https://jsonplaceholder.typicode.com/posts")
// .then(posts => console.log(posts))
// .catch(err => console.log(err));

// req.post("https://jsonplaceholder.typicode.com/posts",
//     {
//         userId: 188,
//         title: "Mustafa",
//         body: "Yener Çevik"
//     })
//     .then(newPost => console.log(newPost))
//     .catch(err => console.error(err));

// req.put("https://jsonplaceholder.typicode.com/posts/31",
// {
//     userId : 188,
//     title : "Mustafa",
//     body : "Yener Çevik"
// })
// .then(post => console.log(post))
// .catch(err => console.error(err));

req.delete("https://jsonplaceholder.typicode.com/posts/31")
.then(post => console.log(post))
.catch(err => console.log(err));