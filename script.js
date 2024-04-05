var data = [];

function addData() {
    var noId = document.getElementById("noId").value;
    var jeruk = document.getElementById("jeruk").value;
    var stok = document.getElementById("stok").value;

    if (noId === "" || stok === "" || jeruk === "") {
        alert("Mohon lengkapi semua kolom!");
        return;
    }

    if (!/^\d+$/.test(stok)) {
        alert("Nomor stok harus berupa angka!");
        return;
    }
    
    data.push({
        noId: noId,
        jeruk: jeruk,
        stok: stok
    });

    saveData();
    updateTable();

    document.getElementById("addForm").reset();
}

function updateTable() {
    var tableBody = document.getElementById("dataTable");
    tableBody.innerHTML = "";

    data.forEach(function(item, index) {
        var row = tableBody.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = item.noId;
        cell2.innerHTML = item.jeruk;
        cell3.innerHTML = item.stok;
        cell4.innerHTML = '<button class="btn" onclick="editData(' + index + ')">Edit</button><button class="btn" onclick="deleteData(' + index + ')">Delete</button>';
    });
}

function editData(index) {
    var item = data[index];
    document.getElementById("noId").value = item.noId;
    document.getElementById("jeruk").value = item.jeruk;
    document.getElementById("stok").value = item.stok;

    data.splice(index, 1);
    updateTable();
}

function deleteData(index) {
    data.splice(index, 1);
    updateTable();
}

function saveData() {
    var jsonData = JSON.stringify(data);
    localStorage.setItem("dashboardData", jsonData);
}

function loadData() {
    var jsonData = localStorage.getItem("dashboardData");
    if (jsonData) {
        data = JSON.parse(jsonData);
        updateTable();
    }
    data.sort(function(a, b) {
        return parseInt(a.noId) - parseInt(b.noId);
    });
}

window.onload = function() {
    loadData();
};
