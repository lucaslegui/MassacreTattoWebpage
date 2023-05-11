<?php
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $mail = $_POST['mail'];
    $fecha = $_POST['fecha'];
    $artista = $_POST['opciones'];

    $mailTo = 'lucas.leguizamon@davinci.edu.ar'

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
    $headers .= "from: $mail". "\r\n";

    mail($mailTo, $asunto, $headers);

    header("location: enviado.html")
}
    
?>