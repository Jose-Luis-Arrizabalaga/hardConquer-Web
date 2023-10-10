const botonMostrar = document.getElementById('mostrarCaracteristicas');
const tarjetaCaracteristicas = document.getElementById('tarjetaCaracteristicas');

botonMostrar.addEventListener('click', () => {
    if (tarjetaCaracteristicas.style.display === 'none' || tarjetaCaracteristicas.style.display === '') {
        tarjetaCaracteristicas.style.display = 'block';
    } else {
        tarjetaCaracteristicas.style.display = 'none';
    }
});
