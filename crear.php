<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    $conexion->query("INSERT INTO usuarios (nombre, correo, edad) VALUES ('$nombre', '$correo', '$edad')");
    header("Location: index.php");
}
?>

<h2>Registrar usuario</h2>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Correo: <input type="email" name="correo" required><br><br>
    Edad: <input type="number" name="edad" required><br><br>
    <input type="submit" value="Guardar">
</form>