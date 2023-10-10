// Supongamos que tienes un array de objetos con datos de nobleza
const datosNobleza = [
    {
      rango: "King",
      nombre: "King",
      titulo: "King",
      sexo: "Masculino", // Puedes usar "Masculino" o "Femenino" para el sexo
    },
    {
      rango: "Queen",
      nombre: "Queen",
      titulo: "Queen",
      sexo: "Femenino", // Puedes usar "Masculino" o "Femenino" para el sexo
    },
    {
      rango: "Prínce",
      nombre: "Prínce",
      titulo: "Prince",
      sexo: "Masculino", // Puedes usar "Masculino" o "Femenino" para el sexo
    },
    {
      rango: "Duke",
      nombre: "Duke ",
      titulo: " Duke",
      sexo: "Masculino", // Puedes usar "Masculino" o "Femenino" para el sexo
    },
    // Agregar más datos de nobleza aquí...
  ];
  
  
  const elementosPorPagina = 10;
  const totalPaginas = Math.ceil(datosNobleza.length / elementosPorPagina);
  let paginaActual = 1;
  
  function mostrarDatosPagina(pagina) {
    const tablaNobility = document.getElementById("tabla-nobility").getElementsByTagName('tbody')[0];
    tablaNobility.innerHTML = ''; // Limpiar la tabla antes de llenarla con nuevos datos
  
    const inicio = (pagina - 1) * elementosPorPagina;
    const fin = pagina * elementosPorPagina;
  
    for (let i = inicio; i < fin && i < datosNobleza.length; i++) {
      const nobility = datosNobleza[i];
      const fila = document.createElement("tr");
      fila.innerHTML = `
        <td>${nobility.rango}</td>
        <td>${nobility.nombre}</td>
        <td>${nobility.titulo}</td>
      `;
      tablaNobility.appendChild(fila);
    }
  }
  
  function actualizarPaginacion() {
    const paginacion = document.getElementById("paginacion");
    paginacion.innerHTML = '';
  
    for (let i = 1; i <= totalPaginas; i++) {
      const enlace = document.createElement("a");
      enlace.href = "#";
      enlace.textContent = i;
      enlace.addEventListener("click", function () {
        paginaActual = i;
        mostrarDatosPagina(paginaActual);
        actualizarPaginacion();
      });
      if (i === paginaActual) {
        enlace.classList.add("pagina-actual");
      }
      paginacion.appendChild(enlace);
    }
  }
  
  // Mostrar la primera página al cargar la página
  mostrarDatosPagina(paginaActual);
  actualizarPaginacion();
  