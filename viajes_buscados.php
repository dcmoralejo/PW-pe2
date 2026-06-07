<?php
session_start();
require_once('configuracion.inc.php');
require_once('datosObject.class.inc.php');
require_once('viaje.class.inc.php');

$destino    = $_GET['destino']     ?? '';
$fechaInicio = $_GET['fecha_inicio'] ?? '';
$fechaFin   = $_GET['fecha_fin']   ?? '';

$viajes = Viaje::buscar($destino, $fechaInicio, $fechaFin);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celta Travel</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="/js/validacion.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <?php require_once __DIR__ . '/includes/cabecera.php'; ?>

    <main id="contenedor-viajes">

        <h2>Resultados de búsqueda</h2>

        <?php if (empty($viajes)): ?>
            <p>No se han encontrado viajes que coincidan con tu búsqueda.</p>
        <?php else: ?>
            <section id="lista-viajes">
                <?php foreach ($viajes as $indice => $viaje): ?>
                    <?php $clase = ['viaje1', 'viaje2', 'viaje3'][$indice % 3]; ?>
                    <a href="viaje_detalle.php?id=<?php echo $viaje->devolverValor('id'); ?>" class="tarjeta-link">
                        <article class="<?php echo $clase; ?>">
                            <h3><?php echo $viaje->devolverValor('nombre'); ?></h3>
                            <img src="imagenes/<?php echo $viaje->devolverValor('imagen'); ?>" alt="<?php echo $viaje->devolverValor('nombre'); ?>">
                            <p><?php echo $viaje->devolverValor('frase'); ?></p>
                            <p><?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaInicio'))); ?> - <?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaFin'))); ?></p>
                            <p class="precio">Desde <?php echo $viaje->devolverValor('precio'); ?>€</p>
                        </article>
                    </a>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>

        <p><a href="index.php">Volver al inicio</a></p>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>