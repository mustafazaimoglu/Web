const express = require("express");
const
{
    auth,
    deneme2
} = require("./middleware/middleware");

const users = [
{
    id: 1,
    name: "Mustafa Zaimoğlu",
    place: "Mersin"
},
{
    id: 2,
    name: "Mehmet Badem",
    place: "Mersin"
}]

const app = express();

const PORT = 5000;
// app.use(auth); // Her Yerde Kullanmak için

app.use(express.json());

// GET Request
// localhost:5000/users
app.get("/users", (req, res, next) =>
{
    res.json(
    {
        success: true,
        data: users
    });

});

app.post("/users", (req, res, next) =>
{
    users.push(req.body);
    console.log(req.body);
    res.json(
    {
        success: true,
        data: users
    });

});

app.put("/users/:id", (req, res, next) =>
{
    const id = parseInt(req.params.id);
    for (let i = 0; i < users.length; i++)
    {
        if (users[i].id === id)
        {
            users[i] = {
                ...users[i],
                ...req.body
            }
        }
    }

    res.json(
    {
        success: true,
        data: users
    });

});

app.delete("/users/:id", (req, res, next) =>
{
    const id = parseInt(req.params.id);
    for (let i = 0; i < users.length; i++)
    {
        if (users[i].id === id)
        {
            users.splice(i,1);
        }
    }

    res.json(
    {
        success: true,
        data: users
    });

});

app.get("/posts", (req, res, next) =>
{
    res.send("Mustafa Test");

});

app.listen(PORT, () =>
{
    console.log("Server Started Port : " + PORT);
})