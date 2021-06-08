<?php
    // campos
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];
    $mensaje= $_POST['mensaje'];

    //datos para el correo
    $destinatario="l.martin.armoa@gmail.com";
    $asunto="contacto de nuestra web";

    $carta= "De: $nombre \n";
    $carta.="correo: $correo \n";
    $carta.="telefono: $telefono \n";
    $carta.="mensaje: $mensaje";

    // enviando mensaje

    mail($destinatario, $asunto, $carta);
    header('Location:mensaje-de-envio.html');
?>