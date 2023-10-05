<?php
$name_form = $_POST['name'];
$email_form = $_POST['email'];
$phone_form = $_POST['phone'];
$msg_form = $_POST['msg'];

$cuerpo_email =
    "Nombre:" . $name_form . "\n" .
    "Email:" . $email_form . "\n" .
    "Teléfono:" . $phone_form . "\n" .
    "Mensaje:" . $msg_form . "\n";

    mail("solangeleitesg@gmail.com", "Email de prueba enviado desde sitio web", $cuerpo_email);