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

    <header class="cabeceraOrdenador">

        <!-- Logo de la agencia junto con el nombre -->
        <section class="logo-titulo">
            <img src="imagenes/logo_CeltaTravel.png" alt="Logo de Celta Travel" id="logo">
            <h1>Celta Travel</h1>
        </section>

        <!-- Formulario de login simulado -->
        <form action="#" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" required>

            <input type="submit" value="Entrar">
        </form>

        <!-- Enlace al formulario de alta de usuarios -->
        <a href="altausuarios.html">Alta de usuarios</a>

        <!-- Menú principal de navegación del sitio -->
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="viajes.html">Viajes</a></li>
                <li><a href="viajes_grupo.html">Viajes en grupo</a></li>
                <li><a href="ofertas.html">Ofertas</a></li>
                <li><a href="sobre_agencia.html">Sobre nuestra agencia</a></li>
                <li><a href="sugerencias.html">Sugerencias</a></li>
            </ul>
        </nav>
    </header>

    <header class="cabeceraTelefono">

        <section class="logo-titulo">
            <img src="imagenes/logo_CeltaTravel.png" alt="Logo de Celta Travel" id="logo">
            <h1>Celta Travel</h1>
        </section>

        <label for="login_desplegable">Iniciar sesión</label>
        <input type="checkbox" id="login_desplegable">

        <section class="loginTelefono">
            <form action="#" method="post">
                <label for="usuario_movil">Usuario:</label>
                <input type="text" id="usuario_movil" name="usuario_movil" required>

                <label for="clave_movil">Contraseña:</label>
                <input type="password" id="clave_movil" name="clave_movil" required>

                <input type="submit" value="Entrar">
            </form>

            <a href="altausuarios.html">Alta de usuarios</a>
        </section>

        <label for="menu_desplegable">☰ Menú</label>
        <input type="checkbox" id="menu_desplegable">

        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="viajes.html">Viajes</a></li>
                <li><a href="viajes_grupo.html">Viajes en grupo</a></li>
                <li><a href="ofertas.html">Ofertas</a></li>
                <li><a href="sobre_agencia.html">Sobre nuestra agencia</a></li>
                <li><a href="sugerencias.html">Sugerencias</a></li>
            </ul>
        </nav>

    </header>

    <main>

        <!-- Presentación de la agencia -->
        <section id="presentacion">
            <h2>Celta Travel</h2>
            <p>
                En Celta Travel creamos experiencias únicas, llevándote a descubrir destinos
                increíbles y a vivir viajes inolvidables en cualquier rincón del mundo. Ofertamos
                viajes ya organizados, pero también diseñamos viajes a medida.
            </p>
            <p>
                ¡Explora el mundo con nosotros!
            </p>
        </section>

        <!-- Imagen principal para captar la atención del usuario -->
        <img src="imagenes/islas-cies-vigo.jpg" alt="Paisaje turístico" id="im-isla">

        <!-- Buscador de viajes simulado -->
        <section id="buscador">
            <h2>Busca aquí tu próximo viaje</h2>

            <form action="#" method="get">
                <label for="destino">Destino:</label>
                <input type="text" id="destino" name="destino" required>

                <fieldset class="fechas">
                    <legend>Fechas del viaje:</legend>

                    <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                    <input type="date" id="fecha_fin" name="fecha_fin" required>
                </fieldset>

                <input type="submit" value="Buscar">
            </form>
        </section>
    </main>

    <footer>
        <!-- Fecha de última modificación (requisito de la práctica) -->
        <p>Última modificación: 30 de abril de 2026</p>

        <!-- Enlaces obligatorios: contacto y memoria -->
        <p>
            <a href="contacto.html">Contacto</a> |
            <a href="como_se_hizo.pdf">Cómo se hizo</a>
        </p>
    </footer>

</body>

</html>