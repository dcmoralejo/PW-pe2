<?php
session_start();
require_once('../configuracion.inc.php');
require_once('../datosObject.class.inc.php');
require_once('../viaje.class.inc.php');
if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celta Travel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <?php require_once __DIR__ . '/../includes/cabecera.php'; ?>

    <main id="contenedor-viajes">

        <?php
        $pagina = $_GET['pagina'] ?? 1;
        $filaInicio = ($pagina - 1) * TAMANIO_PAGINA;
        list($viajes, $total) = Viaje::obtenerViajes($filaInicio, TAMANIO_PAGINA);
        $totalPaginas = ceil($total / TAMANIO_PAGINA);
        ?>

        <section id="lista-viajes">
            <?php foreach ($viajes as $viaje): ?>
                <a href="viaje_detalle.php?id=<?php echo $viaje->devolverValor('id'); ?>" class="tarjeta-link">
                    <article class="viaje1">
                        <h3><?php echo $viaje->devolverValor('nombre'); ?></h3>
                        <img src="../imagenes/<?php echo $viaje->devolverValor('imagen'); ?>" alt="<?php echo $viaje->devolverValor('nombre'); ?>">
                        <p><?php echo $viaje->devolverValor('frase'); ?></p>
                        <p><?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaInicio'))) ?> - <?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaFin'))) ?></p>
                        <p class="precio">Desde <?php echo $viaje->devolverValor('precio'); ?>€</p>
                    </article>
                </a>
            <?php endforeach; ?>
        </section>

        <section class="paginacion">
            <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                <a href="gestionar_viajes.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
        </section>

    </main>


    <?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>