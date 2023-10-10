<?php include("../layout/cabecera.php"); ?>
<style>
    .download{
        width:100%;
        background-image:url(/HardConquer/launcherInicial.jpeg);
        background-repeat:no-repeat;
        background-size: cover;
        opacity:0.8;
    }
    .contenedor {
    max-width: 800px;
    margin: 0 200px;
    padding: 160px;
    text-align: center;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.lista-juegos {
    list-style: none;
    padding: 0;
}

.lista-juegos li {
    
    background-color: transparent;
    filter: contrast(150%);
    filter: saturate(400%); /* Aumentar el contraste al 150% */
    margin-bottom: 10px;
    padding: 10px;
    text-decoration: none;
  /* Color de fondo */
  border: 4px solid #FFD700; /* Borde */
  border-radius: 5px; /* Bordes redondeados */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra */

}

.nombre-juego {
    display: block;
    font-size: 20px;
    margin-bottom: 5px;
}

.tamano {
    display: block;
    font-size: 16px;
    
    margin-bottom: 10px;
}

.descargar {
    display: inline-block;
   background-image:url(/HardConquer/buttonDownload.PNG);
   background-repeat:no-repeat;
    color: #000;
    width:300px;
    height:90px;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
    transition: transform 0.2s;
}
/* Estilo para resaltar los textos */
.lista-juegos .nombre-juego,
.lista-juegos .tamano,
.lista-juegos .descargar {
  color: black;
  font-weight: bold;
   /* Cambia el color del texto al resaltarlo */
}

/* Estilo para resaltar el enlace de descarga cuando se pasa el mouse sobre él */
 .descargar:active {
    transform: scale(0.95); 
}
.lista-juegos li{
    margin:10px;
}
/*******************************************MEDIA QUERY*************************************** */
@media screen and (max-width: 768px) {

.contenedor {
   margin:0;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
h1{
    font-size:20px;
    weight-font:bold;
    color:black;
}
ul{
    display:grid;
    grid-template-columns:1fr;
    margin:0;
    place-items: center;
}

}
    </style>
<section class="download">
    <div class="contenedor">
        <h1>Download Server HardConquer</h1>
        <ul class="lista-juegos">
            <li>
                <span class="nombre-juego">HardConquer Client</span>
                <span class="tamano">Tamaño: 306.39 MB</span>
                <a href="https://mega.nz/file/4rNkyIRB#POv3MrhyNxNAiWFrWnsiLH1cfWhHk-ejWZis725IvpE" class="descargar"></a>
            </li>
            <li>
                <span class="nombre-juego">HardConquer Client</span>
                <span class="tamano">Tamaño: 595.2 MB</span>
                <a href="https://mega.nz/file/4rNkyIRB#POv3MrhyNxNAiWFrWnsiLH1cfWhHk-ejWZis725IvpE" class="descargar"></a>
            </li>
        </ul>
    </div>
    
</section>
﻿<?php include("../layout/footer.php"); ?>

