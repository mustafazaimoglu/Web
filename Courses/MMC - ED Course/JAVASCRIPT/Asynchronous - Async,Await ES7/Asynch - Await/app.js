// async function test(data)
// {
//     let promise =  new Promise((resolve,reject) => {
//         setTimeout(() => {
//             reject(data);
//         }, 5000);
//     })

//     const response = await  promise;

//     return response;
// }

// test("merhaba")
// .then(res => console.log(res))
// .catch(err => console.error(err));

// async function newTest(data)
// {
//     let promise = new Promise((resolve,reject) =>
//     {
//         setTimeout(() => 
//         {
//             if (typeof data === "string")
//             {
//                 resolve("Bu Bir String'dir.");
//             }
//             else
//             {
//                 reject("Geçerli bir String Girin!");
//             }
//         },5000);
//     });

//     const res = await promise;

//     return res;
// }

// newTest("24")
// .then(data => console.log(data))
// .catch(err => console.error(err));

async function getCurrency(url)
{
    const res = await fetch(url); // Response Object

    const data = await res.json(); // JSON Object

    return data.rates.TRY;
}

getCurrency("https://api.exchangeratesapi.io/latest")
.then(r => console.log(r))
.catch(e => console.error(e));