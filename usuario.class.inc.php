<?php
require_once('datosObject.class.inc.php');

class Usuario extends DataObject {

    protected $datos = array(
        "id" => "",
        "nombreUsuario" => "",
        "email" => "",
        "password" => "",
        "tipo" => "",
        "fechaRegistro" => ""
    );

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

    //Verificar contraseña del login
    public function verificarPassword($password) {
        return password_verify($password, $this->datos['password']);
    }

}