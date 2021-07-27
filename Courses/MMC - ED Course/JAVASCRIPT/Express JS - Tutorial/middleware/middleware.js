const auth = (req,res,next) =>
{
    const access = true;

    // if (!access)
    // {
    //     res.status(401).json(
    //         {
    //             success : true,
    //             message : "You Are Not Authorized"
    //         }
    //     )
    // }
    console.log("Middleware Access");
    next();
}

const deneme2 = (req,res,next) => 
{
    console.log("New Deneme");
}

module.exports = {
    auth,
    deneme2
};