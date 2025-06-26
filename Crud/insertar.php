<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
    include_once "conexion.php";
    $conexion = new Conexion();
    $sql = $conexion->connectDatabase();
    $nameUser = $_POST['nombre'];

    if (empty($nameUser)) {
        $_SESSION['message']="Introduce tu nombre";
        exit;
    }
    $surnameUser = $_POST['apellido'];
    if (empty($nameUser)) {
        $_SESSION['message']="Introduce tu apellido";
        exit;
    }
    $dniUser = $_POST['cedula'];
    if (empty($nameUser)) {
        $_SESSION['message']="Introduce tu número de cúdula";
        exit;
    }
    $emailUser = $_POST['correo'];
    if (empty($nameUser)) {
        $_SESSION['message']="Introduce tu correo electrónico";
        exit;
    }
    
    $imagen = $_FILES['imagen']['name'];
    $date = newDateTime();
    $img = $date->getTimestamp(),"_",$imagen; //crear nombre imagen y evitar sobreescritura
    $ruta = $_FILES['imagen'¨]['tmp_name']; //ruta temporal de la imagen
    move_uploaded_file($ruta,"./img/".$img); //mover archivo

    $option = $_POST['action'];
    switch ($option){
        case "insert":
            insertarUser($sql, $nameUser, $surnameUser, $dniUser, $emailUser, $option);
            break;
        case "update":
        break;
    }  
}
function insertarUser($conexion, $nombre, $apellido, $cedula, $correo){
  $sql =$conexion->prepare("INSERT INTO usuario (nombre, apellido, cedula, correo) VALUES (?,?,?)");
  $SQL->bind_param("ssis",$nombre, $apellido, $cedula, $correo);
    if($sql->execute()){
        echo "Usuario insertado correctamente";
    }  else{
        echo "Error al insertar el usuario: " . $conexion->error;
    }    
}



?>