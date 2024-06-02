<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    // Correo al que se enviará el mensaje
    $destinatario = "joseenriquediazmartinez46@gmail.com";
    
    $asunto = "Mensaje de contacto de $nombre";
    
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo Electrónico: $email\n";
    $cuerpoMensaje .= "Mensaje:\n $mensaje";
    
    // Enviar el correo
    mail($destinatario, $asunto, $cuerpoMensaje);
    
    // Redireccionar a una página de agradecimiento
    header("Location: gracias.html");
} else {
    // Si se intenta acceder directamente a enviar.php, redirigir al formulario
    header("Location: formulario-contacto.html");
}
?>
