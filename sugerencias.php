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
    <script src="/js/validacion.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <?php require_once __DIR__ . '/includes/cabecera.php'; ?>

    <main id="pagina-sugerencias">

        <h2>Sugerencias</h2>

        <p>
            Consulta opiniones y experiencias de otros viajeros, o deja tu propia sugerencia
            para ayudarnos a mejorar.
        </p>

        <section id="contenedor-sugerencias">


            <section id="opiniones">

                <article class="opinion izquierda">
                    <h3>Andrés Martínez</h3>
                    <p><strong>Viaje realizado:</strong> Egipto - Ruta faraónica</p>
                    <p>
                        El crucero por el Nilo fue lo mejor del viaje. Las visitas estuvieron bien organizadas
                        y los guías explicaban muy bien cada templo. Como sugerencia, añadiría más tiempo libre
                        en Luxor.
                    </p>
                </article>

                <article class="opinion derecha">
                    <h3>Carmen Soto</h3>
                    <p><strong>Viaje realizado:</strong> Italia - Ruta por el norte</p>
                    <p>
                        Me encantó la combinación de ciudades. Florencia y Venecia fueron espectaculares.
                        Recomendaría incluir una visita gastronómica en Bolonia.
                    </p>
                </article>

                <article class="opinion izquierda">
                    <h3>Iván Romero</h3>
                    <p><strong>Viaje realizado:</strong> Australia - Ruta oceánica</p>
                    <p>
                        Muy buena experiencia, especialmente la parte de Sídney y la Gran Barrera de Coral.
                        Me gustaría que hubiera más actividades opcionales de naturaleza.
                    </p>
                </article>

                <article class="opinion derecha">
                    <h3>María López</h3>
                    <p><strong>Viaje realizado:</strong> Galicia - Ruta del norte</p>
                    <p>
                        La organización fue muy buena y los alojamientos estaban bien situados.
                        Recomendaría añadir más tiempo libre en las Rías Baixas.
                    </p>
                </article>

                <article class="opinion izquierda">
                    <h3>Daniel Pérez</h3>
                    <p><strong>Viaje realizado:</strong> Japón - Tour completo</p>
                    <p>
                        Una experiencia increíble. Me gustaron especialmente Kioto y Nara.
                        Como sugerencia, ampliaría un día más la estancia en Tokio.
                    </p>
                </article>

                <article class="opinion derecha">
                    <h3>Laura Fernández</h3>
                    <p><strong>Viaje realizado:</strong> Cancún</p>
                    <p>
                        El resort fue excelente y las excursiones estuvieron muy bien organizadas.
                        Repetiría otro viaje parecido.
                    </p>
                </article>

            </section>

            <aside id="formulario-sugerencias">

                <h3>Deja tu sugerencia</h3>

                <form action="#" method="post" id="form-sugerencias">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre">

                    <label for="viaje">Viaje realizado:</label>
                    <input type="text" id="viaje">

                    <label for="mensaje">Experiencia o sugerencia:</label>
                    <textarea id="mensaje" rows="6"></textarea>

                    <input type="submit" value="Enviar">

                </form>

            </aside>
        </section>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>