<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$telefono = $_POST["telefono"];

$para='ventas@microcomhgo.com.mx';
$mensaje=
'Mensaje de Microcom:

Nombre: '.$nombre.'
Email: '.$email.'
Mensaje '.$mensaje.'
';

$desde='From:<www.microcomhgo.com.mx';
mail($para,$asunto,$mensaje,$desde);
?>

<script>
alert('Gracias por enviar tus comentarios');
document.location.href="http://www.microcomhgo.com.mx";
</script>