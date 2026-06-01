<?php
session_start();
require_once('configuracion.inc.php');
require_once('datosObject.class.inc.php');
require_once('usuario.class.inc.php');
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

    <main id="alta-correcta">
        <h2>Usuario dado de alta correctamente</h2>

        <p>
            Tu registro se ha completado con éxito. Ya puedes consultar nuestros viajes disponibles.
        </p>

        <a href="index.html">Volver al inicio</a>
    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>