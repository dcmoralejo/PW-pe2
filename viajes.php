<?php
session_start();
require_once('configuracion.inc.php');
require_once('datosObject.class.inc.php');
require_once('viaje.class.inc.php');
require_once('pais.class.inc.php');
require_once('continente.class.inc.php');

$pagina =$_GET['pagina'] ?? 1;
$filaInicio = ($pagina - 1) * TAMANIO_PAGINA;
list($viajes, $total) = Viaje::obtenerViajes($filaInicio, TAMANIO_PAGINA);
$totalPaginas = ceil($total / TAMANIO_PAGINA);

$continentes = Continente::obtenerTodos();
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


    <main id="pagina-viajes">

        <aside id="menu-continentes" class="menuContinentesOrdenador">
            <?php foreach ($continentes as $continente): ?>
                <details>
                    <summary><?php echo $continente->devolverValor("nombre"); ?></summary>
                    <?php
                    $paises = Pais::obtenerPorContinente($continente->devolverValor('id'));
                    foreach ($paises as $pais):
                    ?>
                        <a href="viajes.php?idPais=<?php echo $pais->devolverValor('id'); ?>">
                            <?php echo $pais->devolverValor('nombre'); ?>
                        </a>
                    <?php endforeach; ?>
                </details>
            <?php endforeach; ?>
        </aside>

        <section class="menuContinentesTelefono">

            <label for="continentes_desplegable">Destinos por continente</label>
            <input type="checkbox" id="continentes_desplegable">

           <section class="continentesMovil">
                <?php foreach ($continentes as $continente): ?>
                    <details>
                        <summary><?php echo $continente->devolverValor('nombre'); ?></summary>
                        <?php
                        $paises = Pais::obtenerPorContinente($continente->devolverValor('id'));
                        foreach ($paises as $pais):
                        ?>
                            <a href="viajes.php?idPais=<?php echo $pais->devolverValor('id'); ?>">
                                <?php echo $pais->devolverValor('nombre'); ?>
                            </a>
                        <?php endforeach; ?>
                    </details>
                <?php endforeach; ?>
            </section>
        </section>

        <!-- Contenido principal de la página de viajes -->
        <section id="contenedor-viajes">

            <h2>Viajes disponibles</h2>

            <p>
                Consulta algunos de los destinos que puedes reservar actualmente con
                Celta Travel.
            </p>

            <?php if (isset($_GET['idPais'])): ?>
                <?php $viajesMostrar = Viaje::obtenerViajesPorPais($_GET['idPais']); ?>
            <?php else: ?>
                <?php $viajesMostrar = $viajes; ?>
            <?php endif; ?>

            <section id="lista-viajes">
                <?php foreach ($viajesMostrar as $indice => $viaje): ?>
                    <?php
                    $clase = ['viaje1', 'viaje2', 'viaje3'][$indice % 3];
                    ?>
                    <a href="viaje_detalle.php?id=<?php echo $viaje->devolverValor('id'); ?>" class="tarjeta-link">
                        <article class="<?php echo $clase; ?>">

                            <h3><?php echo $viaje->devolverValor('nombre'); ?></h3>
                            <img src="imagenes/<?php echo $viaje->devolverValor('imagen'); ?>" alt="<?php echo $viaje->devolverValor('nombre'); ?>">
                            <p><?php echo $viaje->devolverValor('frase'); ?></p>
                            <p><?php echo date("d/m/Y", strtotime($viaje->devolverValor('fechaInicio'))); ?> - <?php echo date("d/m/Y", strtotime($viaje->devolverValor('fechaFin'))); ?></p>
                            <p class="precio">Desde <?php echo $viaje->devolverValor('precio'); ?>€</p>
                            
                        </article>
                    </a>
                <?php endforeach; ?>
            </section>

            <?php if (!isset($_GET['idPais'])): ?>
                <section class="paginacion">
                    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                        <a href="viajes.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </section>
            <?php endif; ?>

        </section>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>