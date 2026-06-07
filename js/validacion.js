// mostrar u ocultar mensaje de error
function mostrarError(campo, mensaje) {
    let span = campo.nextElementSibling;
    if (!span || !span.classList.contains('error-validacion')) {
        span = document.createElement('span');
        span.classList.add('error-validacion');
        span.style.color = 'red';
        span.style.fontSize = '0.85em';
        span.style.display = 'block';
        campo.parentNode.insertBefore(span, campo.nextSibling);
    }
    span.textContent = mensaje;
}

function limpiarError(campo) {
    mostrarError(campo, '');
}


// validacion del formulario de alta de usuarios (altausuarios.php)
const formAlta = document.getElementById('formulario-alta');

if (formAlta) {
    formAlta.addEventListener('submit', function (evento) {

        let valido = true;

        const nombre = document.getElementById('nombre');
        if (nombre.value.trim() === '') {
            mostrarError(nombre, 'El nombre es obligatorio.');
            valido = false;
        } else if (nombre.value.trim().length > 30) {
            mostrarError(nombre, 'La longitud del nombre debe ser inferior a 30 caracteres.');
            valido = false;
        } else {
            limpiarError(nombre);
        }

        const apellidos = document.getElementById('apellidos');
        if (apellidos.value.trim() === '') {
            mostrarError(apellidos, 'Los apellidos son obligatorios.');
            valido = false;
        } else {
            limpiarError(apellidos);
        }

        const dni = document.getElementById('dni');
        const regexDni = /^[0-9]{8}[A-Za-z]$/;
        if (dni.value.trim() === '') {
            mostrarError(dni, 'El DNI es obligatorio.');
            valido = false;
        } else if (!regexDni.test(dni.value.trim())) {
            mostrarError(dni, 'El DNI debe estar compuesto por 8 dígitos seguidos de una letra. Ejemplo: 12345678A.');
            valido = false;
        } else {
            limpiarError(dni);
        }

        const fecha = document.getElementById('fecha');
        const regexFecha = /^\d{4}-\d{2}-\d{2}$/;
        if (fecha.value.trim() === '') {
            mostrarError(fecha, 'La fecha de nacimiento es obligatoria.');
            valido = false;
        } else if (!regexFecha.test(fecha.value.trim())) {
            mostrarError(fecha, 'Formato de fecha incorrecto (usa AAAA-MM-DD). Ejemplo: 2023-02-17');
            valido = false;
        } else {
            limpiarError(fecha);
        }

        const telefono = document.getElementById('telefono');
        const regexTel = /^[0-9]{9}$/;
        if (telefono.value.trim() === '') {
            mostrarError(telefono, 'El teléfono es obligatorio.');
            valido = false;
        } else if (!regexTel.test(telefono.value.trim())) {
            mostrarError(telefono, 'El teléfono debe tener exactamente 9 dígitos. Ejemplo: 600123456');
            valido = false;
        } else {
            limpiarError(telefono);
        }

        const correo = document.getElementById('correo');
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (correo.value.trim() === '') {
            mostrarError(correo, 'El correo electrónico es obligatorio.');
            valido = false;
        } else if (!regexEmail.test(correo.value.trim())) {
            mostrarError(correo, 'El correo no tiene un formato válido. Ejemplo: usuario@dominio.com');
            valido = false;
        } else {
            limpiarError(correo);
        }

        const usuarioAlta = document.getElementById('usuario-alta');
        if (usuarioAlta.value.trim() === '') {
            mostrarError(usuarioAlta, 'El nombre de usuario es obligatorio.');
            valido = false;
        } else {
            limpiarError(usuarioAlta);
        }

        const claveAlta = document.getElementById('clave-alta');
        if (claveAlta.value.trim() === '') {
            mostrarError(claveAlta, 'La contraseña es obligatoria.');
            valido = false;
        } else if (claveAlta.value.trim().length < 6) {
            mostrarError(claveAlta, 'La contraseña debe tener al menos 6 caracteres.');
            valido = false;
        } else {
            limpiarError(claveAlta);
        }

        const destino = document.getElementById('destino');
        if (destino.value.trim() === '') {
            mostrarError(destino, 'El destino favorito es obligatorio.');
            valido = false;
        } else {
            limpiarError(destino);
        }

        const tipoViaje = document.getElementById('tipo-viaje');
        if (tipoViaje.value === '') {
            mostrarError(tipoViaje, 'Debes seleccionar un tipo de viaje.');
            valido = false;
        } else {
            limpiarError(tipoViaje);
        }

        const radiosOfertas = document.querySelectorAll('input[name="ofertas"]');
        const algunoSeleccionado = Array.from(radiosOfertas).some(r => r.checked);
        const ultimoRadio = radiosOfertas[radiosOfertas.length - 1];
        if (!algunoSeleccionado) {
            mostrarError(ultimoRadio, 'Debes indicar si quieres recibir ofertas.');
            valido = false;
        } else {
            limpiarError(ultimoRadio);
        }

        const presupuesto = document.getElementById('presupuesto');
        const valorPresupuesto = parseFloat(presupuesto.value.trim());
        if (presupuesto.value.trim() === '') {
            mostrarError(presupuesto, 'El presupuesto es obligatorio.');
            valido = false;
        } else if (isNaN(valorPresupuesto) || valorPresupuesto < 300 || valorPresupuesto > 5000) {
            mostrarError(presupuesto, 'El presupuesto debe ser un número entre 300 y 5000.');
            valido = false;
        } else {
            limpiarError(presupuesto);
        }

        const comentarios = document.getElementById('comentarios');
        if (comentarios.value.trim() === '') {
            mostrarError(comentarios, 'Los comentarios son obligatorios.');
            valido = false;
        } else {
            limpiarError(comentarios);
        }

        if (!valido) {
            evento.preventDefault();
        }
    });
}


// validacion del formulario de login (cabecera.php)
const formLogin = document.getElementById('form-login');

if (formLogin) {
    formLogin.addEventListener('submit', function (evento) {

        let valido = true;

        const usuario = document.getElementById('usuario');
        if (usuario.value.trim() === '') {
            mostrarError(usuario, 'Introduce tu nombre de usuario.');
            valido = false;
        } else {
            limpiarError(usuario);
        }

        const clave = document.getElementById('clave');
        if (clave.value.trim() === '') {
            mostrarError(clave, 'Introduce tu contraseña.');
            valido = false;
        } else {
            limpiarError(clave);
        }

        if (!valido) {
            evento.preventDefault();
        }
    });
}


// validacion del formulario de buscador (index.php)
const formBuscador = document.getElementById('form-buscador');

if (formBuscador) {
    formBuscador.addEventListener('submit', function (evento) {

        let valido = true;

        const destino = document.getElementById('destino');
        const fechaInicio = document.getElementById('fecha_inicio');
        const fechaFin = document.getElementById('fecha_fin');

        if (destino.value.trim() === '' && fechaInicio.value === '' && fechaFin.value === '') {
            mostrarError(destino, 'Introduce al menos un destino o unas fechas para buscar.');
            valido = false;
        }

        if (fechaInicio.value !== '' && fechaFin.value === '') {
            mostrarError(fechaFin, 'Si introduces fecha de inicio, la fecha de fin es obligatoria.');
            valido = false;
        } else if (fechaFin.value !== '' && fechaInicio.value === '') {
            mostrarError(fechaInicio, 'Si introduces fecha de fin, la fecha de inicio es obligatoria.');
            valido = false;
        } else if (fechaInicio.value !== '' && fechaFin.value !== '' && fechaFin.value <= fechaInicio.value) {
            mostrarError(fechaFin, 'La fecha de fin debe ser posterior a la de inicio.');
            valido = false;
        }

        if (!valido) {
            evento.preventDefault();
        }
    });
}


// validacion del formulario de alta de viajes (formulario-viaje.php)
const formViaje = document.getElementById('formulario-alta');

if (formViaje) {
    formViaje.addEventListener('submit', function (evento) {

        let valido = true;

        const nombre = document.getElementById('nombre');
        if (nombre.value.trim() === '') {
            mostrarError(nombre, 'El nombre del viaje es obligatorio.');
            valido = false;
        } else {
            limpiarError(nombre);
        }

        const frase = document.getElementById('frase');
        if (frase.value.trim() === '') {
            mostrarError(frase, 'La frase promocional es obligatoria.');
            valido = false;
        } else {
            limpiarError(frase);
        }

        const descripcion = document.getElementById('descripcion');
        if (descripcion.value.trim() === '') {
            mostrarError(descripcion, 'La descripción es obligatoria.');
            valido = false;
        } else {
            limpiarError(descripcion);
        }

        const precio = document.getElementById('precio');
        const valorPrecio = parseFloat(precio.value.trim());
        if (precio.value.trim() === '') {
            mostrarError(precio, 'El precio es obligatorio.');
            valido = false;
        } else if (isNaN(valorPrecio) || valorPrecio <= 0) {
            mostrarError(precio, 'El precio debe ser un número positivo.');
            valido = false;
        } else {
            limpiarError(precio);
        }

        const fechaInicio = document.getElementById('fechaInicio');
        const regexFecha = /^\d{4}-\d{2}-\d{2}$/;
        if (fechaInicio.value.trim() === '') {
            mostrarError(fechaInicio, 'La fecha de inicio es obligatoria.');
            valido = false;
        } else if (!regexFecha.test(fechaInicio.value.trim())) {
            mostrarError(fechaInicio, 'Formato incorrecto. Usa AAAA-MM-DD.');
            valido = false;
        } else {
            limpiarError(fechaInicio);
        }

        const fechaFin = document.getElementById('fechaFin');
        if (fechaFin.value.trim() === '') {
            mostrarError(fechaFin, 'La fecha de fin es obligatoria.');
            valido = false;
        } else if (!regexFecha.test(fechaFin.value.trim())) {
            mostrarError(fechaFin, 'Formato incorrecto. Usa AAAA-MM-DD.');
            valido = false;
        } else if (fechaInicio.value !== '' && fechaFin.value <= fechaInicio.value) {
            mostrarError(fechaFin, 'La fecha de fin debe ser posterior a la de inicio.');
            valido = false;
        } else {
            limpiarError(fechaFin);
        }

        const imagen = document.getElementById('imagen');
        if (imagen.value.trim() === '') {
            mostrarError(imagen, 'El nombre de la imagen es obligatorio.');
            valido = false;
        } else {
            limpiarError(imagen);
        }

        if (!valido) {
            evento.preventDefault();
        }
    });

}

// validación del formulario de sugerencias (sugerencias.php)
const formSugerencias = document.getElementById('form-sugerencias');

if (formSugerencias) {
    formSugerencias.addEventListener('submit', function(evento) {

        let valido = true;

        const nombre = document.getElementById('nombre');
        if (nombre.value.trim() === '') {
            mostrarError(nombre, 'El nombre es obligatorio.');
            valido = false;
        } else {
            limpiarError(nombre);
        }

        const mensaje = document.getElementById('mensaje');
        if (mensaje.value.trim() === '') {
            mostrarError(mensaje, 'El mensaje de sugerencia es obligatorio.');
            valido = false;
        } else {
            limpiarError(mensaje);
        }

        if (!valido) {
            evento.preventDefault();
        }
    });
}