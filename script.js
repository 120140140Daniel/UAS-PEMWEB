document.addEventListener('DOMContentLoaded', function () {
    loadData();
});

function loadData() {
    // Gunakan AJAX untuk mengambil data dari server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            displayData(data);
        }
    };
    xhr.open("GET", "getData.php", true);
    xhr.send();
}

function displayData(data) {
    var tbody = document.getElementById("dataBody");
    tbody.innerHTML = "";

    data.forEach(function (row) {
        var newRow = tbody.insertRow();
        var cells = Object.values(row);

        cells.forEach(function (value) {
            var cell = newRow.insertCell();
            cell.textContent = Array.isArray(value) ? value.join(", ") : value;
        });
    });
}
