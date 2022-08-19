<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail = "Nombre: " . $nombre_form . "\r\n" . 
"Apellido: " . $apellido_form. "\r\n" . 
"Correo electrónico: " . "\r\n" .
"Mensaje: " . $mensaje_form; 

mail("paulaburruni@gmail.com", "Email enviado desde sitio web de la biblioteca", $cuerpo_mail);