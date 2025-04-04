<?php
include("conexion.php");

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
$usuario = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    $conexion->query("UPDATE usuarios SET nombre='$nombre', correo='$correo', edad='$edad' WHERE id=$id");
    header("Location: index.php");
}
?>

<h2>Editar usuario</h2>
<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required><br><br>
    Correo: <input type="email" name="correo" value="<?= $usuario['correo'] ?>" required><br><br>
    Edad: <input type="number" name="edad" value="<?= $usuario['edad'] ?>" required><br><br>
    <input type="submit" value="Actualizar">
</form>