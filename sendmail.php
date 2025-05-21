<?php
// sendmail.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    $to = "info@aerosds.com.ar";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";
    $headers = "De: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Mensaje enviado con éxito. En breve nos comunicaremos con usted.";
    } else {
        http_response_code(500);
        echo "Error al enviar el mensaje.";
    }
} else {
    http_response_code(403);
    echo "Solo se permiten solicitudes POST.";
}
?>