<?php
session_start();
require_once('../configuracion.inc.php');
require_once('../datosObject.class.inc.php');
require_once('../viaje.class.inc.php');
require_once('../pais.class.inc.php');

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

$viaje = null;
$modoEdicion = isset($_GET['id']);

if ($modoEdicion) {
    $viaje = Viaje::obtenerViaje($_GET['id']);
    if (!$viaje) {
        header("Location: gestionar_viajes.php");
        exit();
    }
}

$error = "";
$exito = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre     = $_POST['nombre']      ?? '';
    $descripcion= $_POST['descripcion'] ?? '';
    $frase      = $_POST['frase']       ?? '';
    $precio     = $_POST['precio']      ?? '';
    $fechaInicio= $_POST['fechaInicio'] ?? '';
    $fechaFin   = $_POST['fechaFin']    ?? '';
    $imagen     = $_POST['imagen']      ?? '';
    $idPais     = $_POST['idPais']      ?? '';
    $activo     = isset($_POST['activo']) ? 1 : 0;

    if ($modoEdicion) {
        $ok = Viaje::modificar($_GET['id'], $nombre, $descripcion, $frase, $precio, $fechaInicio, $fechaFin, $imagen, $idPais, $activo);
    } else {
        $ok = Viaje::insertar($nombre, $descripcion, $frase, $precio, $fechaInicio, $fechaFin, $imagen, $idPais, $activo);
    }

    if ($ok) {
        header("Location: gestionar_viajes.php");
        exit();
    } else {
        $error = "Ha ocurrido un error al guardar el viaje.";
    }
}

$paises = Pais::obtenerTodos();
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

<main id="pagina-alta">
    <h2><?php echo $modoEdicion ? 'Editar viaje' : 'Nuevo viaje'; ?></h2>

    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form id="formulario-alta" action="" method="POST">

        <fieldset>
            <legend>Datos del viaje</legend>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre"
                   value="<?php echo $viaje ? $viaje->devolverValor('nombre') : ''; ?>">

            <label for="frase">Frase promocional</label>
            <input type="text" id="frase" name="frase"
                   value="<?php echo $viaje ? $viaje->devolverValor('frase') : ''; ?>">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="5"><?php echo $viaje ? $viaje->devolverValor('descripcion') : ''; ?></textarea>

            <label for="precio">Precio (€)</label>
            <input type="text" id="precio" name="precio"
                   value="<?php echo $viaje ? $viaje->devolverValor('precio') : ''; ?>">
        </fieldset>

        <fieldset>
            <legend>Fechas</legend>

            <label for="fechaInicio">Fecha de inicio</label>
            <input type="text" id="fechaInicio" name="fechaInicio"
                   value="<?php echo $viaje ? $viaje->devolverValor('fechaInicio') : ''; ?>">

            <label for="fechaFin">Fecha de fin</label>
            <input type="text" id="fechaFin" name="fechaFin"
                   value="<?php echo $viaje ? $viaje->devolverValor('fechaFin') : ''; ?>">
        </fieldset>

        <fieldset>
            <legend>Imagen y destino</legend>

            <label for="imagen">Nombre del archivo de imagen</label>
            <input type="text" id="imagen" name="imagen"
                   value="<?php echo $viaje ? $viaje->devolverValor('imagen') : ''; ?>">

            <label for="idPais">País</label>
            <select id="idPais" name="idPais">
                <?php foreach ($paises as $pais): ?>
                    <option value="<?php echo $pais->devolverValor('id'); ?>"
                        <?php echo ($viaje && $viaje->devolverValor('idPais') == $pais->devolverValor('id')) ? 'selected' : ''; ?>>
                        <?php echo $pais->devolverValor('nombre'); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <p class="opciones-formulario">
                <label for="activo">
                    <input type="checkbox" id="activo" name="activo"
                           <?php echo ($viaje && $viaje->devolverValor('activo')) ? 'checked' : ''; ?>>
                    Viaje activo
                </label>
            </p>
        </fieldset>

        <input type="submit" value="<?php echo $modoEdicion ? 'Guardar cambios' : 'Crear viaje'; ?>">

    </form>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>