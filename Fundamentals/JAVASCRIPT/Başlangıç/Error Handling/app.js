// let jsonString = '{"age" : 20e}';

// try
// {
//     const user = JSON.parse(jsonString);
    
//     console.log(user);
// } 
// catch (err)
// {
//     console.error(err);
// }
// finally
// {
//     console.log("Her Zaman Çalışan Bölüm..");
// }

const a = "33i";

try
{
    a += a;
    console.log(a);
}
catch (err)
{
    console.error("Error Time!");
    console.log(err);
}
finally
{
    console.log("Mahallede Yansa Çalışır.");
}