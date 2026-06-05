<?php
require_once('datosObject.class.inc.php');

class Continente extends DataObject {

    protected $datos = array(
        "id" => "",
        "nombre" => ""
    );

    public static function obtenerTodos() {
        try {
            $conexion = parent::conectar();
            $consulta = "SELECT * FROM " . TABLA_CONTINENTES . " ORDER BY nombre";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->execute();
            $continentes = array();
            foreach ($sentencia->fetchAll() as $fila) {
                $continentes[] = new Continente($fila);
            }
            parent::desconectar($conexion);
            return $continentes;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallida: " . $e->getMessage());
        }
    }
}