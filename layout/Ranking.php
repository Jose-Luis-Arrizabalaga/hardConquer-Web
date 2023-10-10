<?php include("../layout/cabecera.php"); ?>
<style>
/* Estilo para el contenedor principal */
.RankingPlayers {
  display: flex; /* Usamos flexbox para colocar los elementos en fila */
  align-items: center;
  padding-top:150px; 
  background-image:url(/HardConquer/plantillaRanking.png);
  background-repeat:no-repeat;
    background-size: cover;
    opacity:0.8;

}

/* Establecemos el contenedor como una cuadrícula con 2 filas y 2 columnas */

/*********************************************************TABLAS DE RANKING****************************** */

/* Establecer un diseño de cuadrícula en el contenedor */
.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 columnas de igual ancho */
  grid-gap: 5px;
  margin:auto; /* Espacio entre las listas */
}

/* Alinear el contenido al centro de cada lista */
.lista {
  text-align: center;
}

/* Opcional: Estilo para las listas (añadir estilos según sea necesario) */
.lista {
  background-color: #f0f0f0;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
/* Aplicar relleno uniforme a todas las celdas <th> en la tabla */
table {
  border-collapse: collapse; /* Fusionar los bordes de las celdas */
  width: 100%; /* Opcional: Asegurarse de que la tabla ocupe todo el ancho disponible */
}

th, td {
    border: 1px solid #ccc;
  padding: 10px; /* Establecer un relleno uniforme en todas las celdas <th> */
  text-align: center; /* Alinear el contenido al centro si es necesario */
  background-color: #f0f0f0;
  color:black;
  font family:'Caveat', 'Dancing Script', sans-serif; /* Color de fondo opcional para los encabezados */
}

/* Estilo para la primera celda de "Rango" */
.celda-numero {
  padding: 3px; /* Reducir el espacio en la celda */
  text-align: center; /* Alinear el número al centro */
  font-weight: bold; /* Hacer el número en negrita (opcional) */
  font-size: 14px; /* Ajustar el tamaño del texto según tus necesidades */
}


/* Estilo para las celdas */

.top-players{
    background-color:blue;
    color: white;
    font-weight: bold;
}
.top-players img {
    width: 75px; /* La imagen no debe superar el ancho del contenedor */
    height: auto; /* Altura automática para mantener la proporción */
}
.top-guilds{
    background-color:red;
    color: white;
    font-weight: bold;
}
.top-guilds img {
    width: 75px; /* La imagen no debe superar el ancho del contenedor */
    height: auto; /* Altura automática para mantener la proporción */
}
.top-nobility{
    background-color:green;
    color: white;
    font-weight: bold;
}
.top-nobility img {
    width: 75px; /* La imagen no debe superar el ancho del contenedor */
    height: auto; /* Altura automática para mantener la proporción */
}

.lista h2 {
    font-size: 24px;
    text-align: center;
    margin-bottom: 10px;
}
/******************************************************MEDIA QUERY**************************************** */
@media screen and (max-width: 768px) {


.grid-container{
  display:grid;
  grid-template-columns:1fr;
  margin:0;
}





}


    </style>
<section class="RankingPlayers">
  <div class="grid-container">
        
    <div class="lista top-players">
      <h2>Top Players</h2>
      <table>
        <thead>
          <tr>
            <th class="celda-numero">Rango</th>
            <th>Nombre</th>
            <th>Level</th>
            <th>Conjuge</th>
            <th>Clan</th>
          </tr>
        </thead>
        <tbody>
        <td class="celda-numero">1</td>
          <!-- Aquí se llenarán los datos dinámicamente usando JavaScript -->
        </tbody>
      </table>
    </div>
          
    <div class="lista top-guilds">
      <h2>Top Guilds</h2>
      <table>
        <thead>
          <tr>
            <th class="celda-numero">Rango</th>
            <th>Nombre</th>
            <th>Guilds</th>
            <th>Conjuge</th>
            <th>Clan</th>
          </tr>
        </thead>
        <tbody>
        <td class="celda-numero">1</td>
          <!-- Aquí se llenarán los datos dinámicamente usando JavaScript -->
        </tbody>
      </table>
    </div>
      
    <div class="lista top-nobility">
      <h2>Top Nobility</h2>
      <table id="tabla-nobility">
        <thead>
          <tr>
            <th class="celda-numero">Rango</th>
            <th>Nombre</th>
            <th>Título</th>
            <th>Donate</th>
            <th>Conjuge</th>
            <th>Clan</th>
          </tr>
        </thead>
        <tbody>
        <td class="celda-numero">1</td>
          <!-- Aquí se llenarán los datos dinámicamente usando JavaScript -->
        </tbody>
      </table>
      <div id="paginacion"></div>
    </div>
       
  </div>
 
</section>


﻿<?php include("../layout/footer.php"); ?>