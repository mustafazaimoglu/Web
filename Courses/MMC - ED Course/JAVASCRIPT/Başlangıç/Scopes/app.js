var v1 = 10;
let v2 = 20;  // Global Scope
const v3 = 30;

// function a() {
//     var v1 = 40;
//     let v2 = 50;  // Function Scope
//     const v3 = 60;

//     console.log(v1,v2,v3);
// }

// a();

if (true)
{
    var v1 = 40; //Blocklarda var gobali de değiştiriyor o yuzden tehlikeli
    let v2 = 50;  // Block Scope
    const v3 = 60;
    console.log(v1,v2,v3);
}



console.log(v1,v2,v3);