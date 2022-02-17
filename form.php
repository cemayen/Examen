<?php
$destinatario = 'correo@correo.com';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$empresa = $_POST['empresa'];
$comentario = $_POST['comentario'];

$asunto = "Aqui va el asunto";

$mensaje = "Nombre:" . $nombre . "\nApellidos" . $apellidos . "\nCorreo:" . $correo . "\nEmpresa:" . $empresa . "Comentario:" . $comentario;

mail($destinatario, $asunto, $mensaje);
echo "<script>alert('Correo Enviado') </script>";
echo  "<script>setTimeout(\"location.href='/'\",1000) </script>"
?>