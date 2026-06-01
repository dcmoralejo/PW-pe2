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


    <main id="pagina-viajes">

        <aside id="menu-continentes" class="menuContinentesOrdenador">
            <details>
                <summary>Europa</summary>
                <a href="viajes_espana.html">España</a>
                <a href="viajes_italia.html">Italia</a>
                <a href="viajes_francia.html">Francia</a>
                <a href="viajes_grecia.html">Grecia</a>
                <a href="viajes_escocia.html">Escocia</a>
                <a href="viajes_turquia.html">Turquía</a>
            </details>

            <details>
                <summary>Asia</summary>
                <a href="viajes_japon.html">Japón</a>
                <a href="viajes_china.html">China</a>
                <a href="viajes_tailandia.html">Tailandia</a>
                <a href="viajes_jordania.html">Jordania</a>
            </details>

            <details>
                <summary>África</summary>
                <a href="viajes_egipto.html">Egipto</a>
                <a href="viajes_marruecos.html">Marruecos</a>
                <a href="viajes_kenia.html">Kenia</a>
                <a href="viajes_sudafrica.html">Sudáfrica</a>
            </details>

            <details>
                <summary>América</summary>
                <a href="viajes_mexico.html">México</a>
                <a href="viajes_argentina.html">Argentina</a>
                <a href="viajes_peru.html">Perú</a>
                <a href="viajes_brasil.html">Brasil</a>
                <a href="viajes_canada.html">Canadá</a>
            </details>

            <details>
                <summary>Oceanía</summary>
                <a href="viajes_australia.html">Australia</a>
                <a href="viajes_nueva_zelanda.html">Nueva Zelanda</a>
            </details>
        </aside>

        <section class="menuContinentesTelefono">

            <label for="continentes_desplegable">Destinos por continente</label>
            <input type="checkbox" id="continentes_desplegable">

            <section class="continentesMovil">
                <details>
                    <summary>Europa</summary>
                    <a href="viajes_espana.html">España</a>
                    <a href="viajes_italia.html">Italia</a>
                    <a href="viajes_francia.html">Francia</a>
                    <a href="viajes_grecia.html">Grecia</a>
                    <a href="viajes_escocia.html">Escocia</a>
                    <a href="viajes_turquia.html">Turquía</a>
                </details>

                <details>
                    <summary>Asia</summary>
                    <a href="viajes_japon.html">Japón</a>
                    <a href="viajes_china.html">China</a>
                    <a href="viajes_tailandia.html">Tailandia</a>
                    <a href="viajes_jordania.html">Jordania</a>
                </details>

                <details>
                    <summary>África</summary>
                    <a href="viajes_egipto.html">Egipto</a>
                    <a href="viajes_marruecos.html">Marruecos</a>
                    <a href="viajes_kenia.html">Kenia</a>
                    <a href="viajes_sudafrica.html">Sudáfrica</a>
                </details>

                <details>
                    <summary>América</summary>
                    <a href="viajes_mexico.html">México</a>
                    <a href="viajes_argentina.html">Argentina</a>
                    <a href="viajes_peru.html">Perú</a>
                    <a href="viajes_brasil.html">Brasil</a>
                    <a href="viajes_canada.html">Canadá</a>
                </details>

                <details>
                    <summary>Oceanía</summary>
                    <a href="viajes_australia.html">Australia</a>
                    <a href="viajes_nueva_zelanda.html">Nueva Zelanda</a>
                </details>
            </section>

        </section>

        <!-- Contenido principal de la página de viajes -->
        <section id="contenedor-viajes">

            <h2>Viajes disponibles</h2>

            <p>
                Consulta algunos de los destinos que puedes reservar actualmente con
                Celta Travel.
            </p>

            <section id="lista-viajes">

                <!--Viaje 1: Cancún-->
                <a href="viaje1.html" class="tarjeta-link">
                    <article class="viaje1">
                        <h3>Cancún</h3>
                        <p>Fechas disponibles: noviembre - abril</p>
                        <p>Disfruta de playas paradisíacas y aguas cristalinas en el Caribe mexicano</p>
                        <img src="imagenes/cancun.jpeg" alt="Cancún">
                        <p class="precio">Desde 1200€</p>
                    </article>
                </a>

                <!--Viaje 2: Galicia-->
                <a href="viaje2.html" class="tarjeta-link">
                    <article class="viaje2">
                        <h3>Galicia - Ruta del norte</h3>
                        <p>Fechas disponibles: mayo - septiembre</p>
                        <p>Recorrido por Santiago de Compostela, las Rías Baixas, la Costa da Morte y pueblos con
                            encanto, combinando naturaleza, gastronomía y tradición.</p>
                        <img src="imagenes/galicia.jpg" alt="Galicia">
                        <p class="precio">Desde 800€</p>
                    </article>
                </a>

                <!--Viaje 3: Japón-->
                <a href="viaje3.html" class="tarjeta-link">
                    <article class="viaje3">
                        <h3>Japón - Tour completo</h3>
                        <p>Fechas disponibles: marzo - junio</p>
                        <p>Ruta por Tokio, Kioto, Osaka y Nara, combinando templos tradicionales, barrios modernos,
                            gastronomía japonesa y paisajes únicos.</p>
                        <img src="imagenes/japon.jpeg" alt="Japón">
                        <p class="precio">Desde 2300€</p>
                    </article>
                </a>

                <!--Viaje 4: Granada-->
                <a href="viaje4.html" class="tarjeta-link">
                    <article class="viaje1">
                        <h3>Granada</h3>
                        <p>Fechas disponibles: septiembre - mayo</p>
                        <p>Historia, cultura y paisajes únicos con la Alhambra como protagonista.</p>
                        <img src="imagenes/granada.jpg" alt="Granada">
                        <p class="precio">Desde 500€</p>
                    </article>
                </a>

                <!--Viaje 5: Fuerteventura-->
                <a href="viaje5.html" class="tarjeta-link">
                    <article class="viaje2">
                        <h3>Fuerteventura</h3>
                        <p>Fechas disponibles: todo el año</p>
                        <p>Playas infinitas, sol y tranquilidad en las Islas Canarias.</p>
                        <img src="imagenes/fuerteventura.jpg" alt="Fuerteventura">
                        <p class="precio">Desde 900€</p>
                    </article>
                </a>

                <!--Viaje 6: Roma-->
                <a href="viaje6.html" class="tarjeta-link">
                    <article class="viaje3">
                        <h3>Roma</h3>
                        <p>Fechas disponibles: marzo - noviembre</p>
                        <p>Descubre la historia y la cultura de la ciudad eterna.</p>
                        <img src="imagenes/roma.jpg" alt="Roma">
                        <p class="precio">Desde 1100€</p>
                    </article>
                </a>

                <!--Viaje 7: Estambul-->
                <a href="viaje7.html" class="tarjeta-link">
                    <article class="viaje1">
                        <h3>Estambul</h3>
                        <p>Fechas disponibles: marzo - octubre</p>
                        <p>Una ciudad que une dos continentes con una mezcla única de culturas.</p>
                        <img src="imagenes/estambul.jpg" alt="Estambul">
                        <p class="precio">Desde 1300€</p>
                    </article>

                </a>

                <!--Viaje 8: Marrakech-->
                <a href="viaje8.html" class="tarjeta-link">
                    <article class="viaje2">
                        <h3>Marrakech - Ruta del desierto</h3>
                        <p>Fechas disponibles: octubre - abril</p>
                        <p>Viaje desde Marrakech hasta el desierto del Sáhara, pasando por el Atlas, Ait Ben Haddou y
                            dunas
                            de Merzouga, con experiencias culturales y paisajes únicos.</p>
                        <img src="imagenes/marrakech.jpg" alt="Marrakech">
                        <p class="precio">Desde 1000€</p>
                    </article>
                </a>

                <!--Viaje 9: Argentina-->
                <a href="viaje9.html" class="tarjeta-link">
                    <article class="viaje3">
                        <h3>Argentina - Ruta natural</h3>
                        <p>Fechas disponibles: octubre - mayo</p>
                        <p>Viaje por Buenos Aires, las Cataratas de Iguazú, la Patagonia y el glaciar Perito Moreno,
                            ideal
                            para disfrutar de cultura y naturaleza.</p>
                        <img src="imagenes/argentina.jpg" alt="Argentina">
                        <p class="precio">Desde 1800€</p>
                    </article>
                </a>

                <!--Viaje 10: Perú-->
                <a href="viaje10.html" class="tarjeta-link">
                    <article class="viaje1">
                        <h3>Perú - Ruta andina</h3>
                        <p>Fechas disponibles: abril - octubre</p>
                        <p>Tour por Lima, Cusco, el Valle Sagrado y Machu Picchu, explorando la cultura inca y algunos
                            de
                            los paisajes más impresionantes de Sudamérica.</p>
                        <img src="imagenes/peru.jpeg" alt="Perú">
                        <p class="precio">Desde 1300€</p>
                    </article>
                </a>

                <!--Viaje 11: Kenia-->
                <a href="viaje11.html" class="tarjeta-link">
                    <article class="viaje2">
                        <h3>Kenia</h3>
                        <p>Fechas disponibles: junio - septiembre</p>
                        <p>Un destino de safari para descubrir la vida salvaje africana.</p>
                        <img src="imagenes/kenia.jpg" alt="Kenia">
                        <p class="precio">Desde 2000€</p>
                    </article>
                </a>

                <!--Viaje 12: China-->
                <a href="viaje12.html" class="tarjeta-link">
                    <article class="viaje3">
                        <h3>China - Tour imperial</h3>
                        <p>Fechas disponibles: marzo - noviembre</p>
                        <p>Recorrido por Pekín, la Gran Muralla, Xi’an y Shanghái, descubriendo historia milenaria,
                            grandes
                            monumentos y ciudades llenas de contrastes.</p>
                        <img src="imagenes/china.jpg" alt="China">
                        <p class="precio">Desde 2100€</p>
                    </article>
                </a>

                <!--Viaje 13: Egipto-->
                <a href="viaje13.html" class="tarjeta-link">
                    <article class="viaje1">
                        <h3>Egipto - Ruta faraónica</h3>
                        <p>Fechas disponibles: octubre - abril</p>
                        <p>Recorrido por El Cairo, las pirámides de Giza, Luxor, Asuán y un crucero por el Nilo para
                            conocer
                            templos y monumentos del Antiguo Egipto.</p>
                        <img src="imagenes/egipto.jpg" alt="Egipto">
                        <p class="precio">Desde 1800€</p>
                    </article>
                </a>

                <!--Viaje 14: Jordania-->
                <a href="viaje14.html" class="tarjeta-link">
                    <article class="viaje2">
                        <h3>Jordania - Ruta del desierto</h3>
                        <p>Fechas disponibles: septiembre - mayo</p>
                        <p>Viaje por Amán, Petra, el desierto de Wadi Rum y el Mar Muerto, combinando historia, paisajes
                            desérticos y experiencias únicas.</p>
                        <img src="imagenes/jordania.jpeg" alt="Jordania">
                        <p class="precio">Desde 1700€</p>
                    </article>
                </a>

                <!--Viaje 15: Grecia-->
                <a href="viaje15.html" class="tarjeta-link">
                    <article class="viaje3">
                        <h3>Grecia - Ruta clásica e islas</h3>
                        <p>Fechas disponibles: abril - octubre</p>
                        <p>Tour por Atenas, Delfos, Meteora y algunas islas griegas, con una mezcla de historia clásica,
                            paisajes mediterráneos y cultura local.</p>
                        <img src="imagenes/grecia.jpeg" alt="Grecia">
                        <p class="precio">Desde 1200€</p>
                    </article>
                </a>

            </section>

            <section class="paginacion">
                <a href="viajes2.html">Siguiente &rarr;</a>
            </section>

        </section>


    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>