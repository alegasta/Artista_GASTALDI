<?php
// Conecto mo form / name / con el server a traves de los name
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['correo'];
$mensaje = $_POST['textarea'];

//Vamos a mostrar un texto plano
//$header .= "Content-Type: text/plain";

//Como me va a llegar el cuerpo del mail a mi, o sea lo que la gente escribio en el formulario de contacto
$mensaje = "Este mensaje fue enviado por " . $nombre" "$apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . ",\r\n";
//$mensaje .= "El asunto es: " . $asunto . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['textarea'] ",\r\n";
$mensaje .= "Enviado el " . date('d/m/y', time());

$para = 'adgastaldi@gmail.com;'; //El mail destinatario de los mensajes del formulario
$asunto = 'Mensaje de mi sitio web'; //El asunto de los mails que llegan desde el formulario

//La funcion mail envia un correo electronico, y el orden es:
//A quien se lo envia? - El titulo del correo - El  mensaje - Header para añadir
mail($para, $asunto, utf8_decode($mensaje), $header);

//Redireccion al haber enviado el form
header('Location:index.html');

?>