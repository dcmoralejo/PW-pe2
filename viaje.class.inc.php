<?php
require_once('datosObject.class.inc.php');

class Viaje extends DataObject {

    protected $datos = array(
        "id" => "",
        "nombre" => "",
        "descripcion" => "",
        "frase" => "",
        "precio" => "",
        "fechaInicio" => "",
        "fechaFin" => "",
        "imagen" => "",
        "idPais" => "",
        "activo" => ""
    );

    //Busca n filas de viajes a partir de una fila concreta
    public static function obtenerViajes($filaInicio, $numeroFilas) {
        try {
            $conexion = parent::conectar();
            $consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TABLA_VIAJES . " ORDER BY id LIMIT :filaInicio, :numeroFilas";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':filaInicio', $filaInicio, PDO::PARAM_INT);
            $sentencia->bindValue(':numeroFilas', $numeroFilas, PDO::PARAM_INT);
            $sentencia->execute();
            $viajes = array();
            foreach ($sentencia->fetchALL() as $fila) {
                $viajes[] = new Viaje($fila);
            }
            $sentencia2 = $conexion ->query("SELECT FOUND_ROWS() AS filasTotales");
            $fila = $sentencia2->fetch();
            parent::desconectar($conexion);
            return array($viajes, $fila["filasTotales"]);
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallida: " . $e->getMessage());
        }
    }

    //Busca un viaje por su ID
    public static function obtenerViaje($id) {
        try {
            $conexion = parent::conectar();
            $consulta = "SELECT * FROM " . TABLA_VIAJES . " WHERE id = :id";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':id', $id, PDO::PARAM_INT);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            parent::desconectar($conexion);
            if ($resultado)
                return new Viaje($resultado);
            else
                return null;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            die("Consulta fallida: " . $e->getMessage());
        }
    }

    //Registrar un nuevo viaje (solo puede hacerlo un usuario administrador)
    public static function insertar($nombre, $descripcion, $frase, $precio, $fechaInicio, $fechaFin, $imagen, $idPais, $activo) {
        try {
            $conexion = parent::conectar();
            $consulta = "INSERT INTO " . TABLA_VIAJES . " (nombre, descripcion, frase, precio, fechaInicio, fechaFin, imagen, idPais, activo) VALUES (:nombre, :descripcion, :frase, :precio, :fechaInicio, :fechaFin, :imagen, :idPais, :activo)";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':nombre', $nombre, PDO::PARAM_STR);
            $sentencia->bindValue(':descripcion', $descripcion, PDO::PARAM_STR);
            $sentencia->bindValue(':frase', $frase, PDO::PARAM_STR);
            $sentencia->bindValue(':precio', $precio, PDO::PARAM_STR);
            $sentencia->bindValue(':fechaInicio', $fechaInicio, PDO::PARAM_STR);
            $sentencia->bindValue(':fechaFin', $fechaFin, PDO::PARAM_STR);
            $sentencia->bindValue(':imagen', $imagen, PDO::PARAM_STR);
            $sentencia->bindValue(':idPais', $idPais, PDO::PARAM_INT);
            $sentencia->bindValue(':activo', $activo, PDO::PARAM_BOOL);
            $sentencia->execute();
            parent::desconectar($conexion);
            return true;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            return false;
        }
    }

    //Modificar un viaje existente (solo puede hacerlo un usuario administrador)
    public static function modificar($id, $nombre, $descripcion, $frase, $precio, $fechaInicio, $fechaFin, $imagen, $idPais, $activo) {
        try {
            $conexion = parent::conectar();
            $consulta = "UPDATE " . TABLA_VIAJES . " SET nombre = :nombre, descripcion = :descripcion, frase = :frase, precio = :precio, fechaInicio = :fechaInicio, fechaFin = :fechaFin, imagen = :imagen, idPais = :idPais, activo = :activo WHERE id = :id";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':nombre', $nombre, PDO::PARAM_STR);
            $sentencia->bindValue(':descripcion', $descripcion, PDO::PARAM_STR);
            $sentencia->bindValue(':frase', $frase, PDO::PARAM_STR);
            $sentencia->bindValue(':precio', $precio, PDO::PARAM_STR);
            $sentencia->bindValue(':fechaInicio', $fechaInicio, PDO::PARAM_STR);
            $sentencia->bindValue(':fechaFin', $fechaFin, PDO::PARAM_STR);
            $sentencia->bindValue(':imagen', $imagen, PDO::PARAM_STR);
            $sentencia->bindValue(':idPais', $idPais, PDO::PARAM_INT);
            $sentencia->bindValue(':activo', $activo, PDO::PARAM_BOOL);
            $sentencia->bindValue(':id', $id, PDO::PARAM_INT);
            $sentencia->execute();
            parent::desconectar($conexion);
            return true;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            return false;
        }
    }

    //Eliminar un viaje existente (solo puede hacerlo un usuario administrador)
    public static function eliminar($id) {
        try {
            $conexion = parent::conectar();
            $consulta = "DELETE FROM " . TABLA_VIAJES . " WHERE id = :id";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':id', $id, PDO::PARAM_INT);
            $sentencia->execute();
            parent::desconectar($conexion);
            return true;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            return false;
        }
    }

    //Obtener viajes por país
    public static function obtenerViajesPorPais($idPais) {
        try {
            $conexion = parent::conectar();
            $consulta = "SELECT * FROM " . TABLA_VIAJES . " WHERE idPais = :idPais";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':idPais', $idPais, PDO::PARAM_INT);
            $sentencia->execute();
            $viajes = array();
            foreach ($sentencia->fetchALL() as $fila) {
                $viajes[] = new Viaje($fila);
            }
            parent::desconectar($conexion);
            return $viajes;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            return false;
        }
    }

    //Buscar viajes por destino y/o fechas
    public static function buscar($destino, $fechaInicio, $fechaFin) {
        try {
            $conexion = parent::conectar();
            if($destino && $fechaInicio && $fechaFin) {
                $consulta = "SELECT * FROM " . TABLA_VIAJES . " WHERE nombre LIKE :destino AND fechaInicio <= :fechaInicio AND fechaFin >= :fechaFin";
                $sentencia = $conexion->prepare($consulta);
                $sentencia->bindValue(':destino', "%$destino%", PDO::PARAM_STR);
                $sentencia->bindValue(':fechaInicio', $fechaInicio, PDO::PARAM_STR);
                $sentencia->bindValue(':fechaFin', $fechaFin, PDO::PARAM_STR);
            } elseif($destino) {
                $consulta = "SELECT * FROM " . TABLA_VIAJES . " WHERE nombre LIKE :destino";
                $sentencia = $conexion->prepare($consulta);
                $sentencia->bindValue(':destino', "%$destino%", PDO::PARAM_STR);
            } elseif($fechaInicio && $fechaFin) {
                $consulta = "SELECT * FROM " . TABLA_VIAJES . " WHERE fechaInicio <= :fechaInicio AND fechaFin >= :fechaFin";
                $sentencia = $conexion->prepare($consulta);
                $sentencia->bindValue(':fechaInicio', $fechaInicio, PDO::PARAM_STR);
                $sentencia->bindValue(':fechaFin', $fechaFin, PDO::PARAM_STR);
            } else {
                parent::desconectar($conexion);
                return false;
            }
            $sentencia->execute();
            $viajes = array();
            foreach ($sentencia->fetchALL() as $fila) {
                $viajes[] = new Viaje($fila);
            }
            parent::desconectar($conexion);
            return $viajes;
        } catch (PDOException $e) {
            parent::desconectar($conexion);
            return false;
        }
    }
}
