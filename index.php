<?php
include("conexion.php");
// Validación de formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        echo "El nombre es obligatorio.";
    } else {
        echo "Nombre válido: " . htmlspecialchars($_POST["nombre"]);
    }
}
$resultado = $conexion->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Usuarios registrados</h1>
    <a href="crear.php">Registrar nuevo usuario</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Nombre</th><th>Correo</th><th>Edad</th><th>Acciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['correo'] ?></td>
            <td><?= $row['edad'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
