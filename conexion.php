<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "crud_usuarios";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>