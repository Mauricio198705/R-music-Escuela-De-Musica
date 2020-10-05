<?php
$destino="juanestebans991@gmail.com";
$nombre = $_POST["Nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido= "nombre: " .$nombre . "\ncorreo" . $correo . "\ntelefono" $telefono . "\nMensaje" . $mensaje;
mail($destino,"Contacto", $contenido);
header("location:Gracias.html");
?>