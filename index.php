<?php
require_once('configuracion.inc.php');
require_once('datosObject.class.inc.php');
require_once('usuario.class.inc.php');
session_start();
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreUsuario = $_POST['usuario'] ?? $_POST['usuario_movil'] ?? '';
    $password = $_POST['clave'] ?? $_POST['clave_movil'] ?? '';
    
    if ($nombreUsuario && $password) {
        $usuario = Usuario::obtenerPorUsuario($nombreUsuario);
        if ($usuario && $usuario->verificarPassword($password)) {
            $_SESSION['usuario'] = $usuario->devolverValor('nombreUsuario');
            $_SESSION['tipo'] = $usuario->devolverValor('tipo');
            header('Location: index.php');
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celta Travel</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <?php require_once __DIR__ . '/includes/cabecera.php'; ?>

    <main>

        <!-- Presentación de la agencia -->
        <section id="presentacion">
            <h2>Celta Travel</h2>
            <p>
                En Celta Travel creamos experiencias únicas, llevándote a descubrir destinos
                increíbles y a vivir viajes inolvidables en cualquier rincón del mundo. Ofertamos
                viajes ya organizados, pero también diseñamos viajes a medida.
            </p>
            <p>
                ¡Explora el mundo con nosotros!
            </p>
        </section>

        <!-- Imagen principal para captar la atención del usuario -->
        <img src="imagenes/islas-cies-vigo.jpg" alt="Paisaje turístico" id="im-isla">

        <!-- Buscador de viajes simulado -->
        <section id="buscador">
            <h2>Busca aquí tu próximo viaje</h2>

            <form action="viajes_buscados.php" method="get">
                <label for="destino">Destino:</label>
                <input type="text" id="destino" name="destino">

                <fieldset class="fechas">
                    <legend>Fechas del viaje:</legend>

                    <input type="date" id="fecha_inicio" name="fecha_inicio">
                    <input type="date" id="fecha_fin" name="fecha_fin">
                </fieldset>

                <input type="submit" value="Buscar">
            </form>
        </section>
    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>