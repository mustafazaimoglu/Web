const header = document.querySelector(".card-header");

const input = document.getElementById("todo");

input.addEventListener("keyup",changeMyMan);

function changeMyMan(e)
{
    // console.log(e.key);

    // console.log(e.target.value);
    
    header.textContent = e.target.value;

}

console.log(header);


// Keypress sayılar ve harfler için geçerli (Basılan an)

// document.addEventListener("keypress",run);

// function run(e)
// {
//     // console.log(e.which); // ASCII kodunu döner

//     console.log(e.key);
// }

// KeyDown basılma anı tekrar klavyenin heryerinde çalışır. keypressed

// document.addEventListener("keydown",run);

// function run(e)
// {
//     console.log(e.key);
// }

// KeyUp tuşun bırakılma anı klavyenin heryerinde çalışır. keyreleased

// document.addEventListener("keyup",run);

// function run(e)
// {
//     console.log(e.key);
// }

