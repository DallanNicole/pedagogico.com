<?php
// Incluir el archivo de conexión
require_once 'conexion.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['number'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado'];
$trabajando_actualmente = $_POST['user-recommend'];
$tiempo_llegada_centro = $_POST['number'];
$caracteristica_favorita = $_POST['dropdown'];
$artefactos_vivienda = isset($_POST['artefactos']) ? implode(", ", $_POST['artefactos']) : '';
$comentario_sugerencia = $_POST['submit'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO respuestas_encuesta (nombre_apellidos, email, edad, genero, estado_civil, trabajando_actualmente, tiempo_llegada_centro, caracteristica_favorita, artefactos_vivienda, comentario_sugerencia) VALUES ('$nombre', '$email', '$edad', '$genero', '$estado_civil', '$trabajando_actualmente', '$tiempo_llegada_centro', '$caracteristica_favorita', '$artefactos_vivienda', '$comentario_sugerencia')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
