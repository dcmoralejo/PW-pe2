<?php
session_start();
require_once('configuracion.inc.php');
require_once('datosObject.class.inc.php');
require_once('viaje.class.inc.php');

if (!isset($_GET['id'])) {
    header("Location: viajes.php");
    exit();
}

$viaje = Viaje::obtenerViaje($_GET['id']);
if (!$viaje) {
    header("Location: viajes.php");
    exit();
}

$relacionados = Viaje::obtenerViajesPorPais($viaje->devolverValor('idPais'));
$relacionadosFiltrados = array_filter($relacionados, function($r) use ($viaje) {
    return $r->devolverValor('id') != $viaje->devolverValor('id');
});
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

    <main id="detalle-viaje">

        <img src="imagenes/<?php echo $viaje->devolverValor('imagen'); ?>"
             alt="<?php echo $viaje->devolverValor('nombre'); ?>"
             class="imagen-portada">

        <section class="contenido-detalle">

            <section class="texto-viaje">
                <h2><?php echo $viaje->devolverValor('nombre'); ?></h2>

                <p><?php echo $viaje->devolverValor('descripcion'); ?></p>

                <h3>Información relevante</h3>
                <p>
                    Precio desde <?php echo $viaje->devolverValor('precio'); ?>€.
                    Fechas disponibles: <?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaInicio'))); ?>
                    - <?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaFin'))); ?>.
                </p>
            </section>

            <aside class="viajes-relacionados">
                <h3>También te puede interesar</h3>
                <?php if (empty($relacionadosFiltrados)): ?>
                    <p>No hay otros viajes disponibles para este destino.</p>
                <?php else: ?>
                    <ul>
                        <?php foreach ($relacionadosFiltrados as $relacionado): ?>
                            <li>
                                <a href="viaje_detalle.php?id=<?php echo $relacionado->devolverValor('id'); ?>">
                                    <?php echo $relacionado->devolverValor('nombre'); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </aside>

        </section>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>