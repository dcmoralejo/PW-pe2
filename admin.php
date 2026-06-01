<?php
require_once('configuracion.inc.php');
require_once('datosObject.class.inc.php');
require_once('usuario.class.inc.php');

$ok = Usuario::registrarAdmin('administrador', 'admin@gmail.com', 'admin1234');
if ($ok) {
    echo "Administrador registrado correctamente.";
} else {
    echo "Error al registrar el administrador.";
}
?>