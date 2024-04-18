<?php
// Incluir el archivo de conexión
require_once 'conexion.php';

// Obtener los datos del formulario
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (dni, nombre, apellidos, email, password) VALUES ('$dni', '$nombre', '$apellidos', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>