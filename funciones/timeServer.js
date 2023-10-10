// Función para obtener y mostrar la fecha y hora del servidor
function mostrarFechaHoraServidor() {
  const divDia = document.querySelector(".day");
  const divFecha = document.querySelector(".date");
  const divHora = document.querySelector(".time");

  // Obtener la fecha y hora actual del servidor (puedes reemplazar esto con tu lógica)
  const fechaHoraServidor = new Date(); // Esto es un ejemplo, debes obtener la fecha y hora real del servidor

  // Formatear la fecha y hora en un formato legible
  const opcionesFecha = { weekday: 'long' };
  const opcionesHora = { hour: 'numeric', minute: 'numeric', second: 'numeric', timeZoneName: 'short' };
  
  divDia.textContent = fechaHoraServidor.toLocaleDateString('es-ES', opcionesFecha);
  divFecha.textContent = fechaHoraServidor.toLocaleDateString('es-ES');
  divHora.textContent = fechaHoraServidor.toLocaleTimeString('es-ES', opcionesHora);
}

// Llamar a la función para mostrar la fecha y hora del servidor cuando la página se carga
window.addEventListener("load", mostrarFechaHoraServidor);
