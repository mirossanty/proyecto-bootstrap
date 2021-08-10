<?php
$destinatario = 'dsm20190122.msantiago@alumnos.utsv.edu.mx';
//correo a donde se envia el mensaje
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];


$header = "Enviado desde la pagina de Registro Covid-19";
$mensaje_completo = $mensaje . "\nAtentamente: " .$nombre;

mail($destinatario,$asunto,$mensaje_completo,$header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='contactanos.html'\",1000)</script>";

?>