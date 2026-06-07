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

    <main id="pagina-agencia">

        <h2>Sobre nuestra agencia</h2>

        <p>
            Celta Travel cuenta con varias oficinas físicas donde puedes recibir atención personalizada
            y reservar nuestros viajes.
        </p>

        <section id="oficinas">

            <article class="oficina">
                <details>
                    <summary>
                        <h3>Oficina de Vigo</h3>
                        <img src="imagenes/plano_vigo.jpg" alt="Plano de la oficina de Vigo">
                    </summary>

                    <p><strong>Ubicación:</strong> Rúa de Venezuela, 2, 36203 Vigo, Pontevedra</p>
                    <p><strong>Horario:</strong> lunes a viernes de 9:00 a 14:00 y de 17:00 a 20:00.</p>

                    <h4>Viajes reservables</h4>
                    <ul>
                        <li>Granada</li>
                        <li>Fuerteventura</li>
                        <li>Roma</li>
                        <li>Italia - Ruta clásica</li>
                        <li>Francia - París</li>
                        <li>Escocia - Ruta de castillos</li>
                        <li>Estambul</li>
                        <li>Grecia - Ruta clásica e islas</li>
                    </ul>
                </details>
            </article>

            <article class="oficina">
                <details>
                    <summary>
                        <h3>Oficina de Madrid</h3>
                        <img src="imagenes/plano_madrid.jpg" alt="Plano de la oficina de Madrid">
                    </summary>

                    <p><strong>Ubicación:</strong> Calle Alcalá, 96, 28009 Madrid</p>
                    <p><strong>Horario:</strong> lunes a sábado de 9:00 a 14:00 y de 17:00 a 20:00.</p>

                    <h4>Viajes reservables</h4>
                    <ul>
                        <li>Granada</li>
                        <li>Fuerteventura</li>
                        <li>Roma</li>
                        <li>Italia - Ruta clásica</li>
                        <li>Francia - París</li>
                        <li>Escocia - Ruta de castillos</li>
                        <li>Estambul</li>
                        <li>Grecia - Ruta clásica e islas</li>
                        <li>Cancún</li>
                        <li>México - Ruta colonial</li>
                        <li>Argentina - Ruta natural</li>
                        <li>Perú - Ruta andina</li>
                        <li>Brasil - Río y naturaleza</li>
                        <li>Canadá - Naturaleza y ciudades</li>
                        <li>Nueva Zelanda - Ruta natural</li>
                    </ul>
                </details>
            </article>

            <article class="oficina">
                <details>
                    <summary>
                        <h3>Oficina de Barcelona</h3>
                        <img src="imagenes/plano_barcelona.jpg" alt="Plano de la oficina de Barcelona">
                    </summary>

                    <p><strong>Ubicación:</strong> Passeig de Gràcia, 41, 08007 Barcelona</p>
                    <p><strong>Horario:</strong> lunes a viernes de 9:00 a 14:00 y de 17:00 a 20:00.</p>

                    <h4>Viajes reservables</h4>
                    <ul>
                        <li>Granada</li>
                        <li>Fuerteventura</li>
                        <li>Roma</li>
                        <li>Italia - Ruta clásica</li>
                        <li>Francia - París</li>
                        <li>Escocia - Ruta de castillos</li>
                        <li>Estambul</li>
                        <li>Grecia - Ruta clásica e islas</li>
                        <li>Japón - Tour completo</li>
                        <li>China - Tour imperial</li>
                        <li>Tailandia - Bangkok y playas</li>
                        <li>Jordania - Ruta del desierto</li>
                        <li>Australia - Ruta oceánica</li>
                    </ul>
                </details>
            </article>

            <article class="oficina">
                <details>
                    <summary>
                        <h3>Oficina de Sevilla</h3>
                        <img src="imagenes/plano_sevilla.jpg" alt="Plano de la oficina de Sevilla">
                    </summary>

                    <p><strong>Ubicación:</strong> Calle de Muñoz Olive, 7, 41007 Sevilla</p>
                    <p><strong>Horario:</strong> lunes a viernes de 9:00 a 14:00 y de 17:00 a 20:00.</p>

                    <h4>Viajes reservables</h4>
                    <ul>
                        <li>Granada</li>
                        <li>Fuerteventura</li>
                        <li>Roma</li>
                        <li>Italia - Ruta clásica</li>
                        <li>Francia - París</li>
                        <li>Escocia - Ruta de castillos</li>
                        <li>Estambul</li>
                        <li>Grecia - Ruta clásica e islas</li>
                        <li>Egipto - Ruta faraónica</li>
                        <li>Marrakech - Ruta del desierto</li>
                        <li>Kenia</li>
                        <li>Sudáfrica - Safari y Ciudad del Cabo</li>
                    </ul>
                </details>
            </article>

        </section>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>