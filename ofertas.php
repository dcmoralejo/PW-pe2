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

    <main id="pagina-ofertas">

        <h2>Ofertas</h2>

        <p>
            Consulta nuestro calendario de temporadas y descubre las ofertas disponibles
            entre marzo y junio.
        </p>

        <section id="leyenda-temporadas">
            <p><span class="baja"></span> Temporada baja</p>
            <p><span class="media"></span> Temporada media</p>
            <p><span class="alta"></span> Temporada alta</p>
        </section>

        <section id="calendario-ofertas">

            <table>
                <caption>Marzo</caption>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>X</th>
                    <th>J</th>
                    <th>V</th>
                    <th>S</th>
                    <th>D</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="baja-dia">1</td>
                </tr>
                <tr>
                    <td class="baja-dia">2</td>
                    <td class="baja-dia">3</td>
                    <td class="baja-dia">4</td>
                    <td class="baja-dia">5</td>
                    <td class="baja-dia">6</td>
                    <td class="baja-dia">7</td>
                    <td class="baja-dia">8</td>
                </tr>
                <tr>
                    <td class="baja-dia">9</td>
                    <td class="baja-dia">10</td>
                    <td class="baja-dia">11</td>
                    <td class="baja-dia">12</td>
                    <td class="baja-dia">13</td>
                    <td class="baja-dia">14</td>
                    <td class="baja-dia">15</td>
                </tr>
                <tr>
                    <td class="baja-dia">16</td>
                    <td class="baja-dia">17</td>
                    <td class="baja-dia">18</td>
                    <td class="baja-dia">19</td>
                    <td class="baja-dia">20</td>
                    <td class="baja-dia">21</td>
                    <td class="baja-dia">22</td>
                </tr>
                <tr>
                    <td class="baja-dia">23</td>
                    <td class="baja-dia">24</td>
                    <td class="media-dia">25</td>
                    <td class="media-dia">26</td>
                    <td class="media-dia">27</td>
                    <td class="alta-dia">28</td>
                    <td class="alta-dia">29</td>
                </tr>
                <tr>
                    <td class="alta-dia">30</td>
                    <td class="alta-dia">31</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <table>
                <caption>Abril</caption>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>X</th>
                    <th>J</th>
                    <th>V</th>
                    <th>S</th>
                    <th>D</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="alta-dia">1</td>
                    <td class="alta-dia">2</td>
                    <td class="alta-dia">3</td>
                    <td class="alta-dia">4</td>
                    <td class="alta-dia">5</td>
                </tr>
                <tr>
                    <td class="alta-dia">6</td>
                    <td class="alta-dia">7</td>
                    <td class="media-dia">8</td>
                    <td class="media-dia">9</td>
                    <td class="media-dia">10</td>
                    <td class="media-dia">11</td>
                    <td class="media-dia">12</td>
                </tr>
                <tr>
                    <td class="media-dia">13</td>
                    <td class="baja-dia">14</td>
                    <td class="baja-dia">15</td>
                    <td class="baja-dia">16</td>
                    <td class="baja-dia">17</td>
                    <td class="baja-dia">18</td>
                    <td class="baja-dia">19</td>
                </tr>
                <tr>
                    <td class="baja-dia">20</td>
                    <td class="baja-dia">21</td>
                    <td class="baja-dia">22</td>
                    <td class="baja-dia">23</td>
                    <td class="baja-dia">24</td>
                    <td class="baja-dia">25</td>
                    <td class="baja-dia">26</td>
                </tr>
                <tr>
                    <td class="baja-dia">27</td>
                    <td class="media-dia">28</td>
                    <td class="media-dia">29</td>
                    <td class="alta-dia">30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <table>
                <caption>Mayo</caption>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>X</th>
                    <th>J</th>
                    <th>V</th>
                    <th>S</th>
                    <th>D</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="alta-dia">1</td>
                    <td class="alta-dia">2</td>
                    <td class="alta-dia">3</td>
                </tr>
                <tr>
                    <td class="alta-dia">4</td>
                    <td class="media-dia">5</td>
                    <td class="media-dia">6</td>
                    <td class="baja-dia">7</td>
                    <td class="baja-dia">8</td>
                    <td class="baja-dia">9</td>
                    <td class="baja-dia">10</td>
                </tr>
                <tr>
                    <td class="baja-dia">11</td>
                    <td class="baja-dia">12</td>
                    <td class="baja-dia">13</td>
                    <td class="baja-dia">14</td>
                    <td class="baja-dia">15</td>
                    <td class="baja-dia">16</td>
                    <td class="baja-dia">17</td>
                </tr>
                <tr>
                    <td class="baja-dia">18</td>
                    <td class="baja-dia">19</td>
                    <td class="baja-dia">20</td>
                    <td class="baja-dia">21</td>
                    <td class="media-dia">22</td>
                    <td class="media-dia">23</td>
                    <td class="media-dia">24</td>
                </tr>
                <tr>
                    <td class="media-dia">25</td>
                    <td class="media-dia">26</td>
                    <td class="media-dia">27</td>
                    <td class="media-dia">28</td>
                    <td class="media-dia">29</td>
                    <td class="media-dia">30</td>
                    <td class="media-dia">31</td>
                </tr>
            </table>

            <table>
                <caption>Junio</caption>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>X</th>
                    <th>J</th>
                    <th>V</th>
                    <th>S</th>
                    <th>D</th>
                </tr>
                <tr>
                    <td class="media-dia">1</td>
                    <td class="media-dia">2</td>
                    <td class="media-dia">3</td>
                    <td class="media-dia">4</td>
                    <td class="media-dia">5</td>
                    <td class="media-dia">6</td>
                    <td class="media-dia">7</td>
                </tr>
                <tr>
                    <td class="media-dia">8</td>
                    <td class="media-dia">9</td>
                    <td class="media-dia">10</td>
                    <td class="media-dia">11</td>
                    <td class="media-dia">12</td>
                    <td class="media-dia">13</td>
                    <td class="media-dia">14</td>
                </tr>
                <tr>
                    <td class="media-dia">15</td>
                    <td class="media-dia">16</td>
                    <td class="media-dia">17</td>
                    <td class="media-dia">18</td>
                    <td class="alta-dia">19</td>
                    <td class="alta-dia">20</td>
                    <td class="alta-dia">21</td>

                </tr>
                <tr>
                    <td class="alta-dia">22</td>
                    <td class="alta-dia">23</td>
                    <td class="alta-dia">24</td>
                    <td class="alta-dia">25</td>
                    <td class="alta-dia">26</td>
                    <td class="alta-dia">27</td>
                    <td class="alta-dia">28</td>
                </tr>
                <tr>
                    <td class="alta-dia">29</td>
                    <td class="alta-dia">30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        </section>

        <section id="ofertas-temporada">
            <h3>Ofertas disponibles</h3>

            <article>
                <h4>Temporada baja</h4>
                <p>Descuento del 15% en viajes en Europa.</p>
                <p>Descuento del 10% en viajes fuera de Europa.</p>
            </article>

            <article>
                <h4>Temporada media</h4>
                <p>Descuento del 15% en viajes en España.</p>
                <p>Descuento del 10% en viajes en Europa para grupos de 8 personas o más.</p>
            </article>

            <article>
                <h4>Temporada alta</h4>
                <p>Paquetes especiales para viajes fuera de Europa con plazas limitadas.</p>
            </article>
        </section>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>