<?php
$para      = 'astrolabmusicchile@gmail.com';
$titulo    = 'El título de prueba';
$mensaje   = 'Hola';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

header("Location: https://astrolabcl.github.io/hosting/?sendStatus=01");
die();

?>