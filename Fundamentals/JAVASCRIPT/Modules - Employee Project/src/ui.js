export class UI
{
    constructor()
    {
        this.employeesList = document.getElementById("employees");
        this.updateButton = document.getElementById("update");
        this.nameInput = document.getElementById("name");
        this.departmentInput = document.getElementById("department");
        this.salaryInput = document.getElementById("salary");
    }

    addAllEmployeesToUI(emps)
    {
        // <tr>                                
        // <td>Mustafa Murat Coşkun</td>
        // <td>Bilişim</td>
        // <td>4000</td>
        // <td>1</td>
        // <td><a href="#" id = "update-employee" class= "btn btn-danger">Güncelle</a></td> 
        // <td> <a href="#" id = "delete-employee" class= "btn btn-danger">Sil</a></td>
        // </tr>

        let result = "";

        emps.forEach(function(e)
        {
            result +=
                `
            <tr>                                
            <td>${e.name}</td>
            <td>${e.department}</td>
            <td>${e.salary}</td>
            <td>${e.id}</td>
            <td><a href="#" id = "update-employee" class= "btn btn-danger">Güncelle</a></td> 
            <td> <a href="#" id = "delete-employee" class= "btn btn-danger">Sil</a></td>
            </tr>
            `;
        })

        this.employeesList.innerHTML = result;
    }

    clearInputs()
    {
        this.nameInput.value = "";
        this.departmentInput.value = "";
        this.salaryInput.value = "";
    }

    addEmployeeToUI(e)
    {
        this.employeesList.innerHTML += `
        <tr>                                
        <td>${e.name}</td>
        <td>${e.department}</td>
        <td>${e.salary}</td>
        <td>${e.id}</td>
        <td><a href="#" id = "update-employee" class= "btn btn-danger">Güncelle</a></td> 
        <td> <a href="#" id = "delete-employee" class= "btn btn-danger">Sil</a></td>
        </tr>
        `;
    }

    updateEmployeeOnUI(e, parent)
    {
        parent.innerHTML = `
        <tr>                                
        <td>${e.name}</td>
        <td>${e.department}</td>
        <td>${e.salary}</td>
        <td>${e.id}</td>
        <td><a href="#" id = "update-employee" class= "btn btn-danger">Güncelle</a></td> 
        <td> <a href="#" id = "delete-employee" class= "btn btn-danger">Sil</a></td>
        </tr>
        `;

        this.clearInputs();
        this.updateButton.style.display = "none";
    }

    deleteEmployeeFromUI(e)
    {
        e.remove();
    }

    toggleUpdateButton(target)
    {
        if (this.updateButton.style.display === "none")
        {
            this.updateButton.style.display = "block";
            this.addEmployeeInfoToInputs(target);
        }
        else
        {
            this.updateButton.style.display = "none";
            this.clearInputs();
        }
    }

    addEmployeeInfoToInputs(target)
    {
        const children = target.children;

        this.nameInput.value = children[0].textContent;
        this.departmentInput.value = children[1].textContent;
        this.salaryInput.value = children[2].textContent;
    }

}