<?php
$servername = "129.80.149.56";
$username = "u73_GGchP1GVn0";
$password = "ZMlcLRQ^7VenawQe!xTRoPEx";
$dbname = "s73_test1";
$port = "3306";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>