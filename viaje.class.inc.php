<?php
require_once('datosObject.class.inc.php');

class Usuario extends DataObject {

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

    //Busca un usuario por nombreUsuario para el login
    public static function obtenerPorUsuario($nombreUsuario) {
        try {
            $conexion = self::conectar();
            $consulta = "SELECT * FROM " . TABLA_USUARIOS . " WHERE nombreusuario = :nombreUsuario";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':nombreUsuario', $nombreUsuario, PDO::PARAM_STR);
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            self::desconectar($conexion);
            if ($resultado)
                return new Usuario($resultado);
            else
                return null;
        } catch (PDOException $e) {
            self::desconectar($conexion);
            die("Consulta fallida: " . $e->getMessage());
        }
    }

    //Registrar un nuevo usuario
    public static function registrar($nombreUsuario, $email, $password) {
        try {
            $conexion = self::conectar();
            $consulta = "INSERT INTO " . TABLA_USUARIOS . " (nombreUsuario, email, password) VALUES (:nombreUsuario, :email, :password)";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':nombreUsuario', $nombreUsuario, PDO::PARAM_STR);
            $sentencia->bindValue(':email', $email, PDO::PARAM_STR);
            $sentencia->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $sentencia->execute();
            self::desconectar($conexion);
            return true;
        } catch (PDOException $e) {
            self::desconectar($conexion);
            return false;
        }
    }

    //Registrar un nuevo usuario como administrador
    public static function registrarAdmin($nombreUsuario, $email, $password) {
        try {
            $conexion = self::conectar();
            $consulta = "INSERT INTO " . TABLA_USUARIOS . " (nombreUsuario, email, password, tipo) VALUES (:nombreUsuario, :email, :password, 'admin')";
            $sentencia = $conexion->prepare($consulta);
            $sentencia->bindValue(':nombreUsuario', $nombreUsuario, PDO::PARAM_STR);
            $sentencia->bindValue(':email', $email, PDO::PARAM_STR);
            $sentencia->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $sentencia->execute();
            self::desconectar($conexion);
            return true;
        } catch (PDOException $e) {
            self::desconectar($conexion);
            return false;
        }
    }

    //Verificar contraseña del login
    public function verificarPassword($password) {
        return password_verify($password, $this->datos['password']);
    }

}