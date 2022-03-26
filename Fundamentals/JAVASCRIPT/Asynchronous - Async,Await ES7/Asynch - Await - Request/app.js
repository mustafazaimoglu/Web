class Request
{
    async get(url) //Alma
    {
        const res = await fetch(url); // İşlemin Bitmesini Bekliyor.
        
        const result = await res.json();
        return result;
    }

    async post(url, data) //Ekleme
    {
        const res = await fetch(url,
        {
            method: "POST",
            body: JSON.stringify(data),
            headers:
            {
                "Content-type": "application/json; charset=UTF-8"
            }
        });

        const result = await res.json();
        return result;
    }

    async put(url, data) //Güncelleme
    {
        const res = await fetch(url,
            {
                method: "PUT",
                body: JSON.stringify(data),
                headers:
                {
                    "Content-type": "application/json; charset=UTF-8"
                }
            });
    
            const result = await res.json(); 
            return result;
    }

    async delete(url) //Silme
    {
        await fetch(url,
            {
                method: "DELETE"
            });

        return "Veri Silme İşlemi Başarılı!";    
    }
}

const req = new Request();

// req.get("https://jsonplaceholder.typicode.com/posts/484888")
//     .then(posts => console.log(posts))
//     .catch(err => console.log(err));

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