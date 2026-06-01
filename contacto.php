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

    <main id="pagina-contacto">

        <h2>Contacto</h2>

        <section class="datos-contacto">
            <h3>Datos del desarrollador</h3>

            <p>Diego Costas Moralejo</p>
            <p>diegocomor@correo.ugr.es</p>
            <p>Programación Web</p>
            <p>Doble Grado en Ingeniería Informática y Matemáticas</p>
            <p>Universidad de Granada</p>
        </section>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>