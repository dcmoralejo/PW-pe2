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

    <main id="pagina-grupo">

        <section id="lista-viajes-grupo">

            <!-- Viaje en grupo 1: Cancún -->
            <article class="viaje-grupo">
                <h3>Cancún - Caribe mexicano</h3>
                <img src="imagenes/cancun2.avif" alt="Cancún">

                <p><strong>Fechas del viaje:</strong> 12 - 19 de diciembre</p>
                <p><strong>Alojamiento:</strong> Resort 5 estrellas todo incluido frente al mar.</p>
                <p><strong>Itinerario:</strong> Llegada a Cancún y traslado al resort. Primer día de bienvenida y
                    descanso. Excursión a Isla Mujeres, visita a Tulum y jornada cultural en Chichén Itzá. Los últimos
                    días quedan reservados para playa, actividades acuáticas y uso de las instalaciones del resort.</p>
                <p>
                    <strong>Actividades:</strong> excursión en barco a Isla Mujeres con tiempo para baño,
                    visita guiada a las ruinas de Tulum, recorrido cultural por Chichén Itzá, sesión de snorkel
                    en aguas poco profundas, cena de bienvenida en grupo, tarde libre en la playa del resort
                    y actividades acuáticas opcionales como kayak o paddle surf.
                </p>
                <p class="precio">1400€</p>
            </article>

            <!-- Viaje en grupo 2: Japón -->
            <article class="viaje-grupo">
                <h3>Japón - Tour cultural</h3>
                <img src="imagenes/japon2.avif" alt="Japón">

                <p><strong>Fechas del viaje:</strong> 5 - 16 de marzo</p>
                <p><strong>Alojamiento:</strong> Hoteles 3 y 4 estrellas y una noche en ryokan tradicional.</p>
                <p><strong>Itinerario:</strong> Inicio en Tokio con visitas a Shibuya, Akihabara y Asakusa. Continuación
                    hacia Kioto para recorrer templos, jardines y barrios tradicionales. Excursión a Nara y final en
                    Osaka, combinando ambiente urbano, gastronomía y cultura japonesa.</p>
                <p>
                    <strong>Actividades:</strong> recorrido guiado por Asakusa y el templo Sensō-ji, cruce de
                    Shibuya, visita a Akihabara, paseo por el bosque de bambú de Arashiyama, visita al santuario
                    Fushimi Inari, excursión a Nara para ver el parque de los ciervos y cena de grupo en Osaka.
                </p>
                <p class="precio">2600€</p>
            </article>

            <!-- Viaje en grupo 3: Argentina -->
            <article class="viaje-grupo">
                <h3>Argentina - Ruta natural</h3>
                <img src="imagenes/argentina.jpg" alt="Argentina">

                <p><strong>Fechas del viaje:</strong> 8 - 20 de octubre</p>
                <p><strong>Alojamiento:</strong> Hoteles 4 estrellas y alojamientos seleccionados en zonas naturales.
                </p>
                <p><strong>Itinerario:</strong> Comienzo en Buenos Aires con recorrido por sus barrios principales.
                    Después, viaje a Iguazú para visitar las cataratas desde distintos miradores. La última parte se
                    desarrolla en la Patagonia, con visita al glaciar Perito Moreno y paisajes del sur argentino.</p>
                <p>
                    <strong>Actividades:</strong> visita guiada por Buenos Aires, paseo por La Boca y San Telmo,
                    recorrido por las pasarelas de Iguazú, navegación opcional cerca de las cataratas, excursión
                    al glaciar Perito Moreno, miradores panorámicos en Patagonia y cena de grupo con gastronomía local.
                </p>
                <p class="precio">2100€</p>
            </article>

            <!-- Viaje en grupo 4: Jordania -->
            <article class="viaje-grupo">
                <h3>Jordania - Ruta del desierto</h3>
                <img src="imagenes/jordania2.avif" alt="Jordania">

                <p><strong>Fechas del viaje:</strong> 14 - 22 de noviembre</p>
                <p><strong>Alojamiento:</strong> Hoteles 4 estrellas y campamento en Wadi Rum.</p>
                <p><strong>Itinerario:</strong> Llegada a Amán y visita de la capital. Continuación hacia Petra, con
                    recorrido por el desfiladero del Siq y los principales monumentos nabateos. Después, estancia en
                    Wadi Rum para vivir el desierto y final en el Mar Muerto.</p>
                <p>
                    <strong>Actividades:</strong> visita guiada por la ciudadela de Amán, recorrido completo por Petra
                    entrando por el Siq hasta el Tesoro, subida opcional al Monasterio, excursión en 4x4 por el desierto
                    de Wadi Rum con parada en cañones y dunas, paseo en camello al atardecer, cena beduina en
                    campamento,
                    baño en el Mar Muerto y tiempo libre para disfrutar de sus propiedades terapéuticas.
                </p>
                <p class="precio">1900€</p>
            </article>

            <!-- Viaje en grupo 5: Australia -->
            <article class="viaje-grupo">
                <h3>Australia - Ruta oceánica</h3>
                <img src="imagenes/australia2.avif" alt="Australia">

                <p><strong>Fechas del viaje:</strong> 3 - 15 de febrero</p>
                <p><strong>Alojamiento:</strong> Hoteles 4 estrellas y resort costero.</p>
                <p><strong>Itinerario:</strong> Inicio en Sídney con visita a la Ópera, el puerto y zonas emblemáticas.
                    Después, ruta por espacios naturales y zonas costeras. La parte final se centra en la Gran Barrera
                    de Coral, con tiempo para excursiones y descanso junto al mar.</p>
                <p>
                    <strong>Actividades:</strong> visita guiada por la Ópera de Sídney y paseo por Circular Quay,
                    recorrido por Bondi Beach y coastal walk, excursión en barco por la Gran Barrera de Coral con
                    snorkel guiado, visita a parques naturales para observar fauna local (canguros y koalas),
                    rutas costeras panorámicas y tiempo libre en playas para actividades como surf o paddle.
                </p>
                <p class="precio">2800€</p>
            </article>

            <!-- Viaje en grupo 6: Grecia -->
            <article class="viaje-grupo">
                <h3>Grecia - Ruta clásica e islas</h3>
                <img src="imagenes/grecia2.avif" alt="Grecia">

                <p><strong>Fechas del viaje:</strong> 10 - 18 de junio</p>
                <p><strong>Alojamiento:</strong> Hoteles 4 estrellas en Atenas y alojamientos en islas.</p>
                <p><strong>Itinerario:</strong> El viaje comienza en Atenas con visita a la Acrópolis y al centro
                    histórico. Continúa hacia enclaves clásicos como Delfos o Meteora y finaliza con varios días en
                    islas griegas, combinando cultura, mar y descanso.</p>
                <p>
                    <strong>Actividades:</strong> visita guiada a la Acrópolis y el Partenón en Atenas, recorrido por
                    el barrio de Plaka, excursión a Delfos o Meteora con visita a monasterios, ferry a islas griegas,
                    paseos por pueblos costeros, baños en playas del Mediterráneo, cenas de grupo con gastronomía local
                    y tiempo libre para explorar mercados y zonas históricas.
                </p>
                <p class="precio">1500€</p>
            </article>

        </section>

    </main>

    <?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>

</html>