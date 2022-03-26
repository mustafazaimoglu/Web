const name = "Mustafa Zaimoğlu";
const department = "Computer Engineer";
const salary = 6000;

// const a = "İsim : " + name + "\n" + "Departman : " + department + "\n" + "Maas : " + salary;

const a = `İsim : ${name}\nDepartman : ${department}\nMaas : ${salary}`;

console.log(a);

// const html = "<ul>" +
//     "<li>" + name + "</li>" +
//     "<li>" + department + "</li>" +
//     "<li>" + salary + "</li>" +
// "</ul>";

function b() {
    return "Merhaba Bro"
}

const html = `
    <ul>
        <li>${name}</li>
        <li>${department}</li>
        <li>${salary}</li>
        <li>${10 / 4}</li>
        <li>${b()}</li>
    </ul>`;

document.body.innerHTML = html;