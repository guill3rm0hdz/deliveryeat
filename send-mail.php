<?php
/* *************************************************** */
    /* Verifica si le llegaron datos por medio de post*/
    if($_POST) {
    /* Guarda en variables los datos recibidos*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    /* Estas variables con para el encabezado del correo para enviarlo */
    $to_email = 'guillermo.her1@hotmail.com';
    $subject = 'Nuevo mensaje de formulario de contacto';
    /* Contenido del del email con los datos recibidos */
    $message = 'Nombre: ' . $name . "\r\n" .
                'Correo electrónico: ' . $email . "\r\n" .
                'Teléfono: ' . $phone . "\r\n" .
                'Dirección: ' . $address;
    /* Estas variable que contiene los datos para el envio del email */
    $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    /* Este codigo envia el email y lo verifica */
    if(mail($to_email, $subject, $message, $headers)) {
        echo 'Tu mensaje ha sido enviado con éxito.';
    } else {
        echo 'Lo sentimos, ha ocurrido un error al enviar el mensaje.';
    }
    }
?>
