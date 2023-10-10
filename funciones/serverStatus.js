$(document).ready(function () {
    // Realizar una solicitud AJAX al servidor.php
    $.ajax({
        url: 'server.php',
        dataType: 'json',
        success: function (data) {
            // Actualizar los elementos HTML con los datos obtenidos
            $("#serverStatus").text("Server Status: " + data.serverStatus);
            $("#totalAccounts").text("Total Accounts: " + data.totalAccounts);
            $("#totalCharacters").text("Total Characters: " + data.totalCharacters);
            $("#totalGuilds").text("Total Guilds: " + data.totalGuilds);
        },
        error: function () {
            // Manejar errores si la solicitud falla
            console.error("Error al obtener datos del servidor.");
        }
    });
});
