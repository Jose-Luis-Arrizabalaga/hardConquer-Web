<?php include("../layout/cabecera.php"); ?>




<style>
.formularioAcreditacion{
    padding:50px 150px 0 20px;
    background-image:url(/HardConquer/plantillaRanking.png);
    background-repeat:no-repeat;
    background-size: cover;
    opacity:0.8;
    display:grid;
    grid-template-columns: 1fr 1fr;
    margin:auto; /* Separación de 20px entre columnas */
}

h1 {
    text-align: center;
    background: linear-gradient(to bottom, #273469, #6083c2);
    font-family: Arial, sans-serif;
    color: #fff; 
    margin-bottom:10px;
}
/********************************************************zona de productos de venta**************************** */

.containerAcreditacion{
    display:flex;
    align-items:center;
    justify-content:center;
}

.containerAcreditacion h2{ 
    font-size: 40px;
    font-family:'Dancing Script',sans-serif;
    font-weight: bold;
}

.product img {
    max-width: 150px;
}

.product h3 {
    font-size: 1.2rem;
    margin: 10px 0;
}

.product p {
    font-size: 1rem;
    color: #555;
}

.product span {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
}


/********************************************************************************************************** */
.informacion {
    width: 350px;
    height:400px;
    margin: 60px auto;
    background: transparent;
    border-radius:10px;
    box-shadow: 2px 0px 14px rgba(0, 0, 0, 0.4);
}

h3{
    font-family:sans-serif;
    padding-left:10px;
    color:white;
    letter-spacing: 2px; 
}

p {
    font-size: 10px;
    padding-left:10px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    font-size: 16px;
    font-weight: bold;
    filter: grayscale(50%) saturate(1.5) contrast(350%);
}

a {
    text-decoration: none;
    color: #007bff;
}

.canales-pago, .canal-contacto {
    display: flex;
    padding:20px;
    justify-content: space-around;
}


.canales-pago img, .canal-contacto img {
    padding-top:20px;
    max-width: 40px;
    margin-right: 10px;
}
/*****************************************media query************************************* */
@media screen and (max-width: 768px) {
.formularioAcreditacion{
    grid-template-columns:1fr;
    margin-top:70px;
}
}

</style>

<section class="formularioAcreditacion">

<div class="containerAcreditacion">
<h2>Available Packages</h2>
    <ul>
        <li class="product">
            <img src="/HardConquer/1075.PNG" alt="Producto 1">
            <h3>Box 1  <span>$15</span></h3>
        </li>
        <li class="product">
            <img src="/HardConquer/2050.PNG" alt="Producto 2">
            <h3>Box 2  <span>$29</span></h3> 
        </li>
        <li class="product">
            <img src="/HardConquer/21000.PNG" alt="Producto 3">
            <h3>Box 3  <span>$280</span></h3> 
        </li>
    </ul>
</div>


<div class="informacion">

            <!-- Información de Compra -->

    <h1>Purchase Information</h1>

        <h3>Purchase Process:</h3>
            <p style="color:#fff;">To complete the purchase, please contact us through the following channels:</p>

            <ul class="canal-contacto">
                <li><a href="https://www.facebook.com/groups/1336568210562371" target="_blank">
                    <img src="/HardConquer/facebook.png" alt="Facebook"></a></li>
                <li><a href="https://wa.me/573138212396" target="_blank">
                    <img src="/HardConquer/whatassp.png" alt="WhatsApp"></a></li>
                <li><a href="https://discord.com/users/DeiviD1995" target="_blank">
                    <img src="/HardConquer/discord.png" alt="Discord"></a></li>
            </ul>

        <h3>Accepted payment channels:</h3>

            <ul class="canales-pago">
                <li><img src="/HardConquer/daviplata.png" alt="Daviplata"> Daviplata</li>           
                <li><img src="/HardConquer/westernunion.png" alt="Western Union"> Western Union</li>
                <li><img src="/HardConquer/nequi.png" alt="Nequi"> Nequi</li>
                <li><img src="/HardConquer/Paypal.png" alt="PayPal"> PayPal</li>
            </ul>
</div>
  
</section>

﻿<?php include("../layout/footer.php"); ?>
