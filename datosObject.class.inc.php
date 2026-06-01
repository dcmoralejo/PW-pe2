<?php
require_once('configuracion.inc.php');

abstract class DataObject {

    protected $datos = array();

    public function __construct($datos) {
        foreach ($datos as $clave => $valor)
            if (array_key_exists($clave, $this->datos))
                $this->datos[$clave] = $valor;
    }

    public function devolverValor($campo) {
        if (array_key_exists($campo, $this->datos))
            return $this->datos[$campo];
        else
            die("Campo no encontrado: " . $campo);
    }

    protected static function conectar() {
        try {
            $conexion = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
            $conexion->setAttribute(PDO::ATTR_PERSISTENT, true);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            DIE("Conexión fallida: " . $e->getMessage());
        }
    }

    protected static function desconectar($conexion) {
        $conexion = null;
    }
}
?>