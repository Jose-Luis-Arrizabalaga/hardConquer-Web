<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/styloindex.css">

    <!-- Agrega las referencias a las bibliotecas CSS de Bootstrap -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">

     <!-- JavaScript de Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--    fuentes de texto-->
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  
    <!-- JavaScript de menu desplegable -->
    <script defer src="/funciones/pasaTarjeta.js"></script>
    <script src="/funciones/ocultarMenu.js"></script>
   



    <title>Cabecera de Navegación</title>
<style>
     
header {
        background-color: #0b1e3a;
        position: fixed; /* Cabecera fija en la parte superior */
        width: 100%; /* Ancho completo */
        top: 0; /* Pegado a la parte superior de la pantalla */
        z-index:100;
}
.collapse.navbar-collapse {
    background-color: #0b1e3a; /* Hereda el color de fondo azul oscuro */
}

/* Estilo para los elementos del menú colapsable */
.collapse.navbar-collapse .navbar-nav {
    display: flex;
    align-items: center; /* Centrar verticalmente los elementos del menú */
}

.collapse.navbar-collapse .navbar-nav > li {
    margin-right: 10px; /* Espaciado entre los botones */
}

.collapse.navbar-collapse .navbar-nav > li:last-child {
    margin-right: 0; /* No aplicar margen a la derecha del último botón */
}

.collapse.navbar-collapse .navbar-nav > li > a {
    background: linear-gradient(to bottom, #ff6600, #ffff00); /* Gradiente naranja a amarillo */
    color: #333; /* Color del texto */
    padding: 10px 10px; /* Espaciado interno */
    border-radius: 5px; /* Borde redondeado */
    text-decoration: none; /* Quitar subrayado de enlaces */
   
}

.collapse.navbar-collapse .navbar-nav > li > a:hover,
.collapse.navbar-collapse .navbar-nav > li > a:active {
    background: linear-gradient(to bottom, #ffcc00, #ffffcc); /* Gradiente amarillo a amarillo claro */
}
        /* Estilos generales para la cabecera */
/* Estilo para pantallas de PC */

    /* Estilo para pantallas de PC */
/* Estilo para pantallas de PC */
/* Estilo para pantallas de PC */

@media screen and (min-width: 769px) {
    
    .navbar-toggle{
       display:none;
       background:none;
    }

    .navbar {
        background-color: transparent; /* Fondo transparente para la barra de navegación */
        margin: 0;
        border:none; /* Eliminar el margen que podría causar espacios en blanco */
    }


    .navbar-nav {
        display: flex;
        align-items: center;
        border:none; /* Centrar verticalmente los elementos del menú */
    }

    /* Establece el espacio entre los botones */
    .navbar-nav > li {
        margin: 25px 10px 20px 0;
        list-style:none;
        border:none; /* Espaciado a la izquierda de los botones */
    }

    /* Establece el color de fondo del menú en el header */
    .navbar-default {
        background-color:transparent;
        border:none; /* Fondo transparente para el menú */
    }
    .navbar-nav > li:last-child {
        margin-right: 0; /* No aplicar margen a la derecha del último botón */
    }
    .navbar-nav > li > a {
        background: linear-gradient(to bottom, #ff6600, #ffff00);
        color: #333; /* Color del texto */
        padding: 10px 30px; /* Espaciado interno */
        border-radius: 5px; /* Borde redondeado */
        text-decoration: none; /* Quitar subrayado de enlaces */
       
    }

    .navbar-nav > li > a:hover,
    .navbar-nav > li > a:active {
        background: linear-gradient(to bottom, #ffcc00, #ffffcc);
        cursor: pointer;
    }
}
/**********************************MOVILE CSS************************** */

/**********************************burbuja de centro de compras de cps************************** */


@media screen and (min-width: 769px) {
    /* Estilos para el último elemento fijo en pantalla de PC */
    .fixed-element {
        display: none;
    }
}

/* Estilo general para la cabecera en pantalla móvil */
@media screen and (max-width: 768px) {
.navbar {
        background-color: transparent; /* Fondo transparente para la barra de navegación */
        margin: 0;
        border: none; /* Eliminar el margen y borde que podría causar espacios en blanco */
    }
 
    .navbar-nav > li {
        margin: 15px 10px 20px 0;
        list-style:none;
        border:none; /* Espaciado a la izquierda de los botones */
    }

    .navbar-toggle img {
    margin: 15px 0 0 0; /* Margen superior: 20px, otros márgenes: 0 */
}
    

.navbar-toggle,.navbar-header, .navbar-default{
    margin:0;
    padding:0;
    border:none;
    background-color: #0b1e3a; 
}

.navbar-collapse {
        display: block;
        background-color: #0b132b; /* Color de fondo azul oscuro */
        position: absolute;
        top: 88px;
        /* Ajusta esto según sea necesario para evitar el desplazamiento */
        left: 110%; /* Oculta inicialmente el menú fuera de la pantalla */
        width: 100%;
        padding:0;
        z-index: -1; /* Coloca el menú detrás del contenido principal */
        transition: left 0.6s; /* Transición suave para mostrar/ocultar el menú */
    }
.collapse.navbar-collapse {
    background-color: #0b1e3a; /* Hereda el color de fondo azul oscuro */
}

/* Estilo para los elementos del menú colapsable */
.collapse .navbar-collapse .navbar-nav {
    display: flex;
    align-items: center; /* Centrar verticalmente los elementos del menú */
}

    .navbar-collapse.show {
        left: 0; /* Muestra el menú al establecer "left" en 0 */
        z-index: 1; /* Coloca el menú sobre el contenido principal */
    }
    #navbar-toggle {
        background: transparent; /* Fondo transparente o del mismo color que el encabezado */
        border: none; /* Eliminar el borde */
        padding: 0; /* Eliminar el relleno */
    }
    .navbar-nav {
        display: grid;
        place-items: center; 
        grid-template-columns:1fr;    /* Centrar verticalmente los elementos del menú */
        flex-direction: column;       /* Coloca los elementos uno debajo del otro */
    }


    .navbar-nav > li > a {
       
    margin: 5px; /* Ajustar según tus necesidades */
    padding: 10px 15px; /* Ajustar según tus necesidades */
}

    .navbar-nav > li > a {
        color: #333;
        text-decoration: none;
        display: block;
        background: linear-gradient(to bottom, #ff6600, #ffffff); /* Gradiente anaranjado a blanco */
        padding: 10px 30px; /* Espaciado interno */
        border-radius: 5px; /* Borde redondeado */
    }

    .navbar-nav > li > a:hover{
        background: linear-gradient(to bottom, #ffcc00, #ffffff);
    }
    .navbar-nav > li > a:active {
        background: linear-gradient(to bottom, #ffcc00, #ffffff);  /* Gradiente amarillo a blanco */
        transform: scale(0.92); 
    }
}

 </style>


</head>
<body>
<header><!-- Cabecera de navegación -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> <!-- Columna izquierda para el logo -->
                <a href="/index.php" title="Server Private Hardconquer">
                    <img src="/HardConquer/LogoWebHardConquer.jpeg" style="width: 90px;" alt="Conquista 2.0">
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> <!-- Columna derecha para el nav -->
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                            <button type="button" class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu">
                                <img src="/HardConquer/iconoDB.png" style="width: 60px;" alt="Conquista 2.0">
                            </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/index.php" role="button"
                                    aria-expanded="false">Home</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/layout/download.php" role="button"
                                    aria-expanded="false" title="Download">Download</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/layout/Register.php"  role="button"
                                    aria-expanded="false" title="Register">Register</a></li>
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/layout/Ranking.php" role="button"
                                    aria-expanded="false" title="Ranking">Ranking</a></li>
                            <li class="nav-item dropdown fixed-element">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/layout/acreditacion.php" role="button"
                                 aria-expanded="false" title="Ranking">Cps Purchase</a></li>
                                <!--<ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/layout/Ranking.php"
                                            title="level">Top Level</a></li>
                                    <li><a class="dropdown-item" href="/layout/Ranking.php"
                                            title="guilds">Top Guilds</a></li>
                                    <li><a class="dropdown-item" href="/layout/Ranking.php"
                                            title="nobility">Top Nobility</a></li>
                                </ul>--> 
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


