<?php
include "DataHandler.php";

$dataHandler = new DataHandler("localhost", "root", "", "webdata");
$data = $dataHandler->getData();
$dataHandler->closeConnection();

echo json_encode($data);
?>
