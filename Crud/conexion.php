<?php
class Conexion {
    private $host = 'localhost';
    private $usuario = 'root';
    private $contrasena = '';
    private $base_datos = 'lenguajeweb';

    public function connectDatabase() {
        $conn = new mysqli($this->host, $this->usuario, $this->contrasena, $this->base_datos);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>
