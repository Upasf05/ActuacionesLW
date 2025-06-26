<?php
include_once "conexion.php";

$conexion = new Conexion();
$sql =$conexion->connectDatabase();
$registros = $sql-prepare("SELECT * FROM usuario");
$regsitros->execute();
$result =$registros->get_result();

?>