function getData(data) // This will return promise object 
{
    return new Promise(function(resolve,reject) //Fullfilled and Resolve are same
    {
        setTimeout(function()
        {
            if (typeof data === "string")
            {
                resolve("This is a Goddamn String!");
            }
            else
            {
                reject(new Error("This is not a String!"));
            }
        },3000);
    });
}

// getData(15).then(function(response)
// {
//     console.log(response);
// }).catch(function(response)
// {
//     console.error(response);
// });

// getData("Data")
// .then(response => console.log(response))
// .catch(response => console.error(response));

function addNumber(number)
{
    return new Promise((resolve,reject) => 
    {
        setTimeout(() => 
        {
            if (typeof number === "number")
            {
                resolve(number + 2);
            }
            else
            {
                reject("Not a Number (NaN)!");
            }
        },3500);
    })
}

addNumber("15")
.then(response => 
{
    console.log(response);
    return response + 33;
}).then(response2 => console.log(response2))
.catch(reject => console.error(reject));