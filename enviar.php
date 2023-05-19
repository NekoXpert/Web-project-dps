<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email']; 
        $celular = $_POST['celular'];
        $mensaje = $_POST['mensaje'];
        
        //indicamos el correo de destino
        $destinatario = 'GBARBOZAN@CERTUS.EDU.PE'; // Reemplaza 'correo_destino@example.com' con tu dirección de correo electrónico

        //Cabeceras del correo
        $asunto = "Mensaje de la web";

        //Enviamos el mensaje y comprobamos el resultado
        $cuerpo = "Nombre: " . $nombre . "\r\n";
        $cuerpo .= "Email: " . $email . "\r\n";
        $cuerpo .= "Celular: " . $celular . "\r\n";
        $cuerpo .= "Mensaje: " . $mensaje . "\r\n";

        if (mail($destinatario, $asunto, $cuerpo)) {
            // echo "<script>alert('Mensaje enviado, muchas gracias.');window.location.href='index.html';</script>";
            echo "Mensaje enviado, muchas gracias.";
        } else {
            echo 'Falló en el envío';
        }
    }
?>
