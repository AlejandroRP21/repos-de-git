<!-- solicitar_evento.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $evento = $_POST['evento'];
    echo "<h2>Has solicitado información sobre el evento: <strong>$evento</strong></h2>";
    // Aquí podrías guardar la solicitud en base de datos, enviar un correo, etc.
}