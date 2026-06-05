<?php
require_once('datosObject.class.inc.php');

class Pais extends DataObject {

    protected $datos = array(
        "id" => "",
        "nombre" => "",
        "idContinente" => ""
    );

    public static function obtenerTodos() {
        try {
            $conexion = parent::conectar();
            $consulta = "SELECT * FROM " . TABLA_PAISES . " ORDER BY nombre";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->execute();
            $paises = array();
            foreach ($sentencia->fetchAll() as $fila) {
                $paises[] = new Pais($fila);
            }
            parent::desconectar($conexion);
            return $paises;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallida: " . $e->getMessage());
        }
    }

    public static function obtenerPorContinente($idContinente) {
        try {
            $conexion = parent::conectar();
            $consulta = "SELECT * FROM " . TABLA_PAISES . " WHERE idContinente = :idContinente ORDER BY nombre";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':idContinente', $idContinente, PDO::PARAM_INT);
            $sentencia->execute();
            $paises = array();
            foreach ($sentencia->fetchAll() as $fila) {
                $paises[] = new Pais($fila);
            }
            parent::desconectar($conexion);
            return $paises;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallida: " . $e->getMessage());
        }
    }
}