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

    <main id="pagina-alta">

        <h2>Alta de usuarios</h2>

        <p>Rellena el siguiente formulario para registrarte en Celta Travel.</p>

        <form action="altacorrecta.html" method="post" id="formulario-alta">

            <fieldset>
                <legend>Datos personales</legend>

                <label for="nombre"><strong>Nombre:</strong></label>
                <input type="text" id="nombre" name="nombre" maxlength="30" placeholder="Introduce tu nombre" required
                    autofocus>

                <label for="apellidos"><strong>Apellidos:</strong></label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Introduce tus apellidos" required>

                <label for="dni"><strong>DNI:</strong></label>
                <input type="text" id="dni" name="dni" pattern="[0-9]{8}[A-Za-z]" required>

                <label for="fecha"><strong>Fecha de nacimiento:</strong></label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="telefono"><strong>Teléfono:</strong></label>
                <input type="tel" id="telefono" name="telefono" pattern="[0-9]{9}" placeholder="600123456" required>

                <label for="correo"><strong>Correo electrónico:</strong></label>
                <input type="email" id="correo" name="correo" required>
            </fieldset>

            <fieldset>
                <legend>Datos de acceso</legend>

                <label for="usuario-alta"><strong>Nombre de usuario:</strong></label>
                <input type="text" id="usuario-alta" name="usuario-alta" required>

                <label for="clave-alta"><strong>Contraseña:</strong></label>
                <input type="password" id="clave-alta" name="clave-alta" required>
            </fieldset>

            <fieldset>
                <legend>Preferencias de viaje</legend>

                <label for="destino"><strong>Destino favorito:</strong></label>
                <input type="text" id="destino" name="destino" list="destinos" required>

                <datalist id="destinos">
                    <option value="México">
                    <option value="Japón">
                    <option value="España">
                    <option value="Italia">
                    <option value="Egipto">
                    <option value="Australia">
                    <option value="Nueva Zelanda">
                    <option value="Francia">
                    <option value="Grecia">
                    <option value="Tailandia">
                    <option value="Marruecos">
                    <option value="Perú">
                    <option value="Argentina">
                    <option value="Brasil">
                    <option value="Canadá">
                    <option value="Turquía">
                    <option value="China">
                    <option value="Jordania">
                    <option value="Escocia">
                    <option value="Kenia">
                    <option value="Sudáfrica">

                </datalist>

                <label for="busqueda"><strong>Busca un destino:</strong></label>
                <input type="search" id="busqueda" name="busqueda" placeholder="Ej: Japón, Cancún..." required>

                <label for="hora-contacto"><strong>Hora preferida de contacto:</strong></label>
                <input type="time" id="hora-contacto" name="hora-contacto" required>

                <label for="tipo-viaje"><strong>Tipo de viaje preferido:</strong></label>
                <select id="tipo-viaje" name="tipo-viaje" required>
                    <option value="">Selecciona una opción</option>
                    <option value="playa">Playa</option>
                    <option value="cultural">Cultural</option>
                    <option value="naturaleza">Naturaleza</option>
                    <option value="aventura">Aventura</option>
                </select>

                <label for="web"><strong>Página web que usa para informarse sobre los viajes (si usa
                        alguna):</strong></label>
                <input type="url" id="web" name="web" placeholder="https://ejemplo.com" required>

                <p><strong>¿Quieres recibir ofertas?</strong></p>

                <section class="opciones-formulario">
                    <label>
                        <input type="radio" name="ofertas" value="si" required>
                        Sí
                    </label>

                    <label>
                        <input type="radio" name="ofertas" value="no">
                        No
                    </label>
                </section>

                <p><strong>Servicios que te interesan:</strong></p>

                <section class="opciones-formulario">
                    <label>
                        <input type="checkbox" name="servicios" value="seguro">
                        Seguro de viaje
                    </label>

                    <label>
                        <input type="checkbox" name="servicios" value="excursiones">
                        Excursiones organizadas
                    </label>

                    <label>
                        <input type="checkbox" name="servicios" value="traslados">
                        Traslados al aeropuerto
                    </label>
                </section>

                <label for="presupuesto"><strong>Presupuesto aproximado:</strong></label>
                <input type="number" id="presupuesto" name="presupuesto" min="300" max="5000" step="50" required>

                <label for="satisfaccion"><strong>Interés en viajar con nosotros:</strong></label>
                <input type="range" id="satisfaccion" name="satisfaccion" min="1" max="10" required>

                <label for="color"><strong>Color identificativo de tu perfil:</strong></label>
                <input type="color" id="color" name="color" required>
            </fieldset>

            <fieldset>
                <legend>Comentarios</legend>

                <label for="comentarios">Cuéntanos qué tipo de viaje buscas:</label>
                <textarea id="comentarios" name="comentarios" rows="5" required></textarea>
            </fieldset>

            <input type="submit" value="Enviar registro">
            <input type="reset" value="Borrar datos">

        </form>

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