<?php

require_once  "/Models/ApacheNetBankingDb.php";

$clienteTable = new ClienteTable();

$conn = $clienteTable->getConnection();


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";












?>