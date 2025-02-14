<?php
// Datos de conexión
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "mi_base_datos";

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
