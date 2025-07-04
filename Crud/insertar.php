<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once "conexion.php";
    $conexion = new Conexion();
    $conn = $conexion->connectDatabase();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $imagen = $_FILES['imagen']['name'];
    $temp = $_FILES['imagen']['tmp_name'];

    // Generar nombre único para la imagen
    $nombreImagen = time() . "_" . basename($imagen);
    $rutaDestino = "img/" . $nombreImagen;
    move_uploaded_file($temp, $rutaDestino);

    // Insertar en la base de datos
    $sql = $conn->prepare("INSERT INTO usuario (nombre, apellido, cedula, correo, imagen) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("ssiss", $nombre, $apellido, $cedula, $correo, $nombreImagen);

    if ($sql->execute()) {
        echo "Usuario insertado correctamente.<br><a href='recuperardatos.php'>Ver usuarios</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}



?>
