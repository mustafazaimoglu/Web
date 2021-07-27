const btn = document.getElementById("ajax").addEventListener("click",fillTheTable);

function fillTheTable(e)
{
    const xhr = new XMLHttpRequest();

    xhr.open("GET","employees.json",true);

    xhr.onload = function()
    {
        let table = document.querySelector("#employees");

        if (xhr.status === 200)
        {
            const employees = JSON.parse(xhr.responseText);

            employees.forEach(function(e)
            {
                table.innerHTML += 
                `
                <tr>
                    <td>${e.name}</td>
                    <td>${e.department}</td>
                    <td>${e.salary}</td>
                </tr>
                `;
            })
        }
    }

    xhr.send();
}