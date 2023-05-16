<?php

class DB
{
    private $conexion;

    public function __construct()
    {
        try {
            $this->conexion = new PDO('mysql:host=localhost;dbname=bd', 'root', '');
            echo "Conectado a la Based de Datos..." . $ok->getMessage();
        } catch (PDOException $e) {
            $this->conexion = null;
            echo "Error de conexion..." . $error->getMessage();
        }
    }

    function getConexion()
    {
        return $this->conexion;
    }
}

?>
