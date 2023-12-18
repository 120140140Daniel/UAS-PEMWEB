<?php
include "dataHandler.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $usia = $_POST["usia"];
    $jenisKelamin = $_POST["jenisKelamin"];
    $hobi = isset($_POST["hobi"]) ? implode(", ", $_POST["hobi"]) : "";

    $dataHandler = new DataHandler("localhost", "root", "", "webdata");
    $dataHandler->tambahData($nama, $usia, $jenisKelamin, $hobi);
    $dataHandler->closeConnection();
}
?>
