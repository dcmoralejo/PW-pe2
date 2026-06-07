<?php
session_start();
require_once('configuracion.inc.php');
require_once('datosObject.class.inc.php');
require_once('usuario.class.inc.php');

$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreUsuario = $_POST['usuario-alta'];
    $email = $_POST['correo'];
    $password = $_POST['clave-alta'];

    if ($nombreUsuario && $email && $password) {
        $ok = Usuario::registrar($nombreUsuario, $email, $password);
        if ($ok) {
            header('Location: altacorrecta.php');
            exit();
        } else {
            $error = "El usuario o correo ya existe. Por favor, elige otro.";
        }  
    }
}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>
</head>

<body>
    
    <?php require_once __DIR__ . '/includes/cabecera.php'; ?>

    <main id="pagina-alta">

        <h2>Alta de usuarios</h2>

        <?php if ($error): ?>
            <p style="color:red; font-weight:bold;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <p>Rellena el siguiente formulario para registrarte en Celta Travel.</p>

        <form action="altausuarios.php" method="post" id="formulario-alta">

            <fieldset>
                <legend>Datos personales</legend>

                <label for="nombre"><strong>Nombre:</strong></label>
                <input type="text" id="nombre" name="nombre" maxlength="30" placeholder="Introduce tu nombre"
                    autofocus>

                <label for="apellidos"><strong>Apellidos:</strong></label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Introduce tus apellidos">

                <label for="dni"><strong>DNI:</strong></label>
                <input type="text" id="dni" name="dni">

                <label for="fecha"><strong>Fecha de nacimiento:</strong></label>
                <input type="text" id="fecha" name="fecha">

                <label for="telefono"><strong>Teléfono:</strong></label>
                <input type="text" id="telefono" name="telefono" placeholder="600123456">

                <label for="correo"><strong>Correo electrónico:</strong></label>
                <input type="text" id="correo" name="correo">
            </fieldset>

            <fieldset>
                <legend>Datos de acceso</legend>

                <label for="usuario-alta"><strong>Nombre de usuario:</strong></label>
                <input type="text" id="usuario-alta" name="usuario-alta">

                <label for="clave-alta"><strong>Contraseña:</strong></label>
                <input type="password" id="clave-alta" name="clave-alta">
            </fieldset>

            <fieldset>
                <legend>Preferencias de viaje</legend>

                <label for="destino"><strong>Destino favorito:</strong></label>
                <input type="text" id="destino" name="destino" list="destinos">

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

                <label for="tipo-viaje"><strong>Tipo de viaje preferido:</strong></label>
                <select id="tipo-viaje" name="tipo-viaje">
                    <option value="">Selecciona una opción</option>
                    <option value="playa">Playa</option>
                    <option value="cultural">Cultural</option>
                    <option value="naturaleza">Naturaleza</option>
                    <option value="aventura">Aventura</option>
                </select>

                <p><strong>¿Quieres recibir ofertas?</strong></p>

                <section class="opciones-formulario">
                    <label>
                        <input type="radio" name="ofertas" value="si">
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
                <input type="text" id="presupuesto" name="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Comentarios</legend>

                <label for="comentarios">Cuéntanos qué tipo de viaje buscas:</label>
                <textarea id="comentarios" name="comentarios" rows="5"></textarea>
            </fieldset>

            <input type="submit" value="Enviar registro">
            <input type="reset" value="Borrar datos">

        </form>

    </main>


    <?php require_once __DIR__ . '/includes/footer.php'; ?>

    <script>
        flatpickr("#fecha", { locale: "es", dateFormat: "Y-m-d", maxDate: "today" });
    </script>

</body>

</html>