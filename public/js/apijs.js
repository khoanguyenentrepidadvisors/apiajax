function onFormSubmit();(){
      if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData();(){
    var formData = {};
    formData["name"] = document.getElementById("name").value;
    formData["classID"] = document.getElementById("classID").value;
    formData["age"] = document.getElementById("age").value;
    formData["gender"] = document.getElementById("gender").value;
    formData["address"] = document.getElementById("address").value;
    formData["phone"] = document.getElementById("phone").value;
    formData["email"] = document.getElementById("email").value;
    return formData;
}

function insertNewRecord(data){
     var table = document.getElementById("studentlist").getElementsByTagName('tbody')[0];
     var newRow = table.insertRow(table.length);
     cell1 = newRow.insertCell(0);
     cell1.innerHTML = data.name;
     cell2 = newRow.insertCell(1);
     cell2.innerHTML = data.classID;
     cell3 = newRow.insertCell(2);
     cell3.innerHTML = data.age;
     cell4 = newRow.insertCell(3);
     cell4.innerHTML = data.gender;
     cell5 = newRow.insertCell(4);
     cell5.innerHTML = data.address;
     cell6 = newRow.insertCell(5);
     cell6.innerHTML = data.phone;
     cell7 = newRow.insertCell(6);
     cell7.innerHTML = data.email;
     cell7 = newRow.insertCell(7);
     cell7.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}
function resetForm() {
    document.getElementById("name").value = "";
    document.getElementById("classID").value = "";
    document.getElementById("age").value = "";
    document.getElementById("gender").value = "";
    document.getElementById("address").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("email").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("name").value = selectedRow.cells[0].innerHTML;
    document.getElementById("classID").value = selectedRow.cells[1].innerHTML;
    document.getElementById("age").value = selectedRow.cells[2].innerHTML;
    document.getElementById("gender").value = selectedRow.cells[3].innerHTML;
    document.getElementById("address").value = selectedRow.cells[3].innerHTML;
    document.getElementById("phone").value = selectedRow.cells[3].innerHTML;
    document.getElementById("email").value = selectedRow.cells[3].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.name;
    selectedRow.cells[1].innerHTML = formData.classID;
    selectedRow.cells[2].innerHTML = formData.age;
    selectedRow.cells[3].innerHTML = formData.gender;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("studentlist").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("name").value == "") {
        isValid = false;
        document.getElementById("nameValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("nameValidationError").classList.contains("hide"))
            document.getElementById("nameValidationError").classList.add("hide");
    }
    return isValid;
}