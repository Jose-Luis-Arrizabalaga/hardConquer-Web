<?php include("../layout/cabecera.php"); ?>
<style>

    /* Estilos para el formulario de registro */
.FormularioRegistro{
    padding-top:150px;
        width:100%;
        height:auto;
        background-image:url(/HardConquer/HARDCONQUERLAUNCHER.png);
        background-size: cover;
        opacity:0.8;
        position: relative; /* Establecemos una posición relativa para que el botón se posicione de manera absoluta con respecto a este elemento */
        text-align: center; /* Centramos el contenido en el medio horizontalmente */
}
       

h1{
    color:white;
}
.formulario-registro{
    width:70%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
.campo {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    color:white;
}

.campo label {
    flex: 1;
    margin-right: 10px;
    text-align: right;
}

.campo input[type="text"],
.campo input[type="password"],
.campo input[type="email"] {
    flex: 2;
    width: 150px;
    padding: 10px;
    border: 1px solid #777;
    border-radius: 5px;
}

.campo .codigo-verificacion-generado {
    display: flex;
    align-items: center;
}

.campo .codigo-verificacion-generado span {
    font-size: 18px;
    background-color: #333;
    padding: 5px 10px;
    border-radius: 5px;
    margin-right: 10px;
}

.campo .codigo-verificacion-generado button {
    background-color: #ffcc00;
    color: #333;
    border: none;
    padding: 5px 10px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
}

.campo .codigo-verificacion-generado button:active {
    background-color: #ff9900;
    transform: scale(0.95);
}
/* Estilos para el botón submit */
button[type="submit"] {
    width:350px;
    height:100px;
    background-size: cover; /* Ajusta el tamaño de la imagen para que quepa en el botón */
    background-repeat: no-repeat;
    background-image:url(/HardConquer/buttonRegister.png); /* Color de fondo del botón */
    color: #333; /* Color del texto del botón */
    border: none; /* Borde del botón */
    padding: 10px 20px; /* Espaciado interno del botón (arriba/abajo izquierda/derecha) */
    font-size: 16px; /* Tamaño de fuente del texto del botón */
    border-radius: 5px; /* Radio de borde para redondear el botón */
    cursor: pointer;
    transition: transform 0.3s;
    position: absolute;
    bottom: 10px; /* Ajustamos la distancia desde la parte inferior del formulario */
    right: 10px; /* Ajustamos la distancia desde la parte derecha del formulario */
} 

button[type="submit"]:active {
  transform: scale(0.92); /* Reduce ligeramente el tamaño del botón al hacer clic */
}
/*******************************************    media query ********************************************** */
@media screen and (max-width: 768px) {

    .formulario-registro{
        display:grid;
        width:100%;
        height:auto;
        grid-template-columns:1fr;
        place-items:center;
        margin:15px;
    }
    .campo {
        margin-bottom: 20px; /* Espacio entre campos */
    }

    /* Estilos para el botón de submit */
  

    /* Estilos para el código de verificación y su generación */
    .codigo-verificacion {
        flex-direction: column; /* Apilar elementos verticalmente */
        align-items: center;
        margin-bottom: 40px;  /* Centrar elementos horizontalmente */
    }

    .codigo-verificacion-generado {
        margin-top: 10px;
        margin-bottom: 90px;  /* Espacio entre el campo de entrada y el código generado */
    }


}

    </style>
<section class="FormularioRegistro">
    <div class="formulario-registro">
        <h1>Register-HardConquer</h1>
        <form action="procesar_registro.php" method="POST">
            <div class="campo">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="campo">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="campo">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="campo codigo-verificacion">
                <label for="verification-code">Verification Code:</label>
                <input type="text" id="verification-code" name="verification-code" required>
                
                <!-- Genera un código de verificación aleatorio aquí y muéstralo al usuario -->
                <div class="codigo-verificacion-generado">
                    <span>ABCD123</span>
                    <button type="button" onclick="regenerarCodigo()">Regenerate Code</button>
                </div>
            </div> 
        </form>
        <button type="submit"></button>
    </div>

    <script>
        // Función para regenerar el código de verificación
        function regenerarCodigo() {
            // Genera un nuevo código aleatorio (puedes personalizar esta lógica)
            var nuevoCodigo = Math.random().toString(36).substring(2, 8).toUpperCase();
            // Actualiza el elemento span con el nuevo código
            document.querySelector('.codigo-verificacion-generado span').textContent = nuevoCodigo;
        }
    </script>
    
</section>
﻿<?php include("../layout/footer.php"); ?>