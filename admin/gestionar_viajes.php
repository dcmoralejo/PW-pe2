<?php
session_start();
require_once('../configuracion.inc.php');
require_once('../datosObject.class.inc.php');
require_once('../viaje.class.inc.php');
if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

if (isset($_GET['accion']) && $_GET['accion'] === 'eliminar' && isset($_GET['id'])) {
    Viaje::eliminar($_GET['id']);
    header("Location: gestionar_viajes.php");
    exit();
}

$pagina = $_GET['pagina'] ?? 1;
$filaInicio = ($pagina - 1) * TAMANIO_PAGINA;
list($viajes, $total) = Viaje::obtenerViajes($filaInicio, TAMANIO_PAGINA);
$totalPaginas = ceil($total / TAMANIO_PAGINA);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Celta Travel</title>
        <link rel="stylesheet" href="../css/estilos.css">
        <script src="/js/validacion.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>

        <?php require_once __DIR__ . '/../includes/cabecera.php'; ?>

        <main id="contenedor-admin">

            <section id="lista-viajes">
                <?php foreach ($viajes as $viaje): ?>
                    <article class="viaje1">
                        <h3><?php echo $viaje->devolverValor('nombre'); ?></h3>
                        <img src="../imagenes/<?php echo $viaje->devolverValor('imagen'); ?>" alt="<?php echo $viaje->devolverValor('nombre'); ?>">
                        <p><?php echo $viaje->devolverValor('frase'); ?></p>
                        <p><?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaInicio'))); ?> - <?php echo date('d/m/Y', strtotime($viaje->devolverValor('fechaFin'))); ?></p>
                        <p class="precio">Desde <?php echo $viaje->devolverValor('precio'); ?>€</p>
                        <p class="acciones-admin">
                            <a href="formulario_viaje.php?id=<?php echo $viaje->devolverValor('id'); ?>" class="btn-editar">Editar</a>
                            <a href="gestionar_viajes.php?accion=eliminar&id=<?php echo $viaje->devolverValor('id'); ?>"
                            class="btn-eliminar"
                            onclick="return confirm('¿Seguro que quieres eliminar este viaje?')">Eliminar</a>
                        </p>
                    </article>
                <?php endforeach; ?>
            </section>

            <aside id="panel-nuevo-viaje">
                <h3>Gestión</h3>
                <p>Añade un nuevo destino a la agencia.</p>
                <a href="formulario_viaje.php">+ Nuevo viaje</a>
            </aside>

            <section class="paginacion">
                <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                    <a href="gestionar_viajes.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>
            </section>

        </main>

        <?php require_once __DIR__ . '/../includes/footer.php'; ?>

    </body>
</html>