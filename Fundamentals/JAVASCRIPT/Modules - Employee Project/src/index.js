import
{
    Request
}
from "./request"
import
{
    UI
}
from "./ui";

const form = document.getElementById("employee-form");
const nameInput = document.getElementById("name");
const departmentInput = document.getElementById("department");
const salaryInput = document.getElementById("salary");
const employeeList = document.getElementById("employees");
const updateEmployeeButton = document.getElementById("update");

const req = new Request("http://localhost:3000/employees");
const ui = new UI();

let updateState = null;

// req.get()
// .then(response => console.log(response))
// .catch(err => console.log(err))

// req.post({name:"Mehmet Badem",department:"FBI",salary:"6500"})
// .then(response => console.log(response))
// .catch(err => console.log(err));

// req.put("1",{name:"Mehmet Şen",department:"CIA",salary:"6500"})
// .then(response => console.log(response))
// .catch(err => console.log(err));   

// req.delete(2)
// .then(response => console.log(response))
// .catch(err => console.log(err));

eventListeners();

function eventListeners()
{
    document.addEventListener("DOMContentLoaded", getAllEmployees);
    form.addEventListener("submit", addNewEmployee);
    employeeList.addEventListener("click", deleteOrUpdate);
    updateEmployeeButton.addEventListener("click", updateEmployee);
}

function updateEmployee(e)
{
    if (updateState !== null)
    {
        const data = {
            name: nameInput.value.trim(),
            department: departmentInput.value.trim(),
            salary: salaryInput.value.trim()
        }

        req.put(updateState.updateId, data)
            .then(updatedEmployee =>
            {
                ui.updateEmployeeOnUI(updatedEmployee, updateState.updateParent);
                updateState = null;
            })
            .catch(err => console.log(err));
    }
}

function deleteOrUpdate(e)
{
    if (e.target.id === "update-employee")
    {
        updateEmployeeController(e.target.parentElement.parentElement);
    }
    else if (e.target.id === "delete-employee")
    {
        deleteEmployee(e.target);
    }
}

function updateEmployeeController(target)
{
    ui.toggleUpdateButton(target);

    if (updateState === null)
    {
        updateState = {
            updateId: target.children[3].textContent,
            updateParent: target
        }

    }
    else
    {
        updateState = null;
    }
}

function deleteEmployee(e)
{
    const id = e.parentElement.previousElementSibling.previousElementSibling.textContent;



    req.delete(id)
        .then(messsage =>
        {
            ui.deleteEmployeeFromUI(e.parentElement.parentElement);
        })
        .catch(err => console.log(err));
}

function addNewEmployee(e)
{
    const eName = nameInput.value.trim();
    const eDepartment = departmentInput.value.trim();
    const eSalary = salaryInput.value.trim();

    if (eName === "" || eDepartment === "" || eSalary === "")
    {
        alert("Tüm Alanları Doldurunuz!");
    }
    else
    {
        req.post(
            {
                name: eName,
                department: eDepartment,
                salary: Number(eSalary)
            })
            .then(emp =>
            {
                ui.addEmployeeToUI(emp);
            })
            .catch(err => console.log(err));
    }

    ui.clearInputs();
    e.preventDefault();
}

function getAllEmployees()
{
    req.get()
        .then(emps =>
        {
            ui.addAllEmployeesToUI(emps);
        })
        .catch(err => console.log(err))
}