<?php
include_once "conexion.php";

$conexion = new Conexion();
$conn = $conexion->connectDatabase();

$sql = $conn->prepare("SELECT * FROM usuario");
$sql->execute();
$resultado = $sql->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Usuarios Registrados</h2>
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark text-center">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
            <th>Correo</th>
            <th>Imagen</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <?php while ($fila = $resultado->fetch_assoc()) : ?>
            <tr>
                <td><?= $fila['id'] ?></td>
                <td><?= htmlspecialchars($fila['nombre']) ?></td>
                <td><?= htmlspecialchars($fila['apellido']) ?></td>
                <td><?= htmlspecialchars($fila['cedula']) ?></td>
                <td><?= htmlspecialchars($fila['correo']) ?></td>
                <td>
                    <?php if (!empty($fila['imagen'])): ?>
                        <img src="img/<?= htmlspecialchars($fila['imagen']) ?>" alt="Imagen">
                    <?php else: ?>
                        <span class="text-muted">Sin imagen</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php $conn->close(); ?>
