class Request
{
    constructor()
    {
        this.xhr = new XMLHttpRequest();
    }

    get(url,callback)
    {
        this.xhr.open("GET",url);

        this.xhr.onload = function()
        {
            if (this.status === 200) // Zaten this fonk içinde oldugu için xhr i gosteriyor
            {
                callback(null, this.responseText);
            }
            else
            {
                callback("GET : Houston,We Have A Problem Here", null)
            }

        } /*.bind(this)*/ // yada ArrowFunction Kullanabiliriz
        
        this.xhr.send();
    }

    post(url,data,callback)
    {
        this.xhr.open("POST",url);
        this.xhr.setRequestHeader("Content-type","application/json"); //JSON

        this.xhr.onload = () =>
        {
            if (this.xhr.status === 201) // Status Code for Post
            {
                callback(null,this.xhr.responseText);
            }
            else
            {
                callback("POST : Houston,We Have A Problem Here", null)
            }

        }

        this.xhr.send(JSON.stringify(data));
    }

    put(url,data,callback)
    {
        this.xhr.open("PUT",url);
        this.xhr.setRequestHeader("Content-type","application/json"); //JSON

        this.xhr.onload = () =>
        {
            if (this.xhr.status === 200) // 200 Means Okey
            {
                callback(null,this.xhr.responseText);
            }
            else
            {
                callback("PUT : Houston,We Have A Problem Here", null)
            }

        }

        this.xhr.send(JSON.stringify(data));
    }

    delete(url,callback)
    {
        this.xhr.open("DELETE",url);

        this.xhr.onload = function()
        {
            if (this.status === 200) // Zaten this fonk içinde oldugu için xhr i gosteriyor
            {
                callback(null, "Başarı İle Silindi!"); //Boş Nesne Döner => this.responseText
            }
            else
            {
                callback("DELETE : Houston,We Have A Problem Here", null)
            }

        } /*.bind(this)*/ // yada ArrowFunction Kullanabiliriz
        
        this.xhr.send();
    }



}

const req = new Request();

// req.get("https://jsonplaceholder.typicode.com/albums/33",function(errMessage,albums)
// {
//     if (errMessage === null)
//     {
//         console.log(albums);
//     }
//     else
//     {
//         console.log(errMessage);
//     }
// });

// req.post("https://jsonplaceholder.typicode.com/albums",{userId : 88, title : "I am not goin'"},function(errMessage,album)
// {
//     if(errMessage === null)
//     {
//         console.log(album);
//     }
//     else
//     {
//         console.log(errMessage);
//     }
// });

// req.put("https://jsonplaceholder.typicode.com/albums/88",{userId : 88, title : "Mumble Jumble'"},function(errMessage,album)
// {
//     if(errMessage === null)
//     {
//         console.log(album);
//     }
//     else
//     {
//         console.log(errMessage);
//     }
// });

req.delete("https://jsonplaceholder.typicode.com/albums/99",function(errMessage,albums)
{
    if (errMessage === null)
    {
        console.log(albums);
    }
    else
    {
        console.log(errMessage);
    }
});
