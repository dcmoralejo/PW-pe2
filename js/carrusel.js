let indiceActual = 0;

function mostrarViaje(indice) {
    const viaje = viajes[indice];
    document.getElementById('carrusel-imagen').src = '/imagenes/' + viaje.imagen;
    document.getElementById('carrusel-imagen').alt = viaje.nombre;
    document.getElementById('carrusel-nombre').textContent = viaje.nombre;
    document.getElementById('carrusel-frase').textContent = viaje.frase;
    document.getElementById('carrusel-enlace').href = viaje.url;
}

document.addEventListener('DOMContentLoaded', function() {
    if (viajes && viajes.length > 0) {
        mostrarViaje(indiceActual);
    }
});

document.getElementById('flecha-der').addEventListener('click', function() {
    indiceActual = (indiceActual + 1) % viajes.length;
    mostrarViaje(indiceActual);
});

document.getElementById('flecha-izq').addEventListener('click', function() {
    indiceActual = (indiceActual - 1 + viajes.length) % viajes.length;
    mostrarViaje(indiceActual);
});