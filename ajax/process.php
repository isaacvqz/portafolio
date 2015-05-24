<?php 
// Destinatario
$para = 'isaacvqz@geeksoft.com.mx';

// Asunto
$titulo = $_POST['subject'];

// Mensaje
$mensaje = '
Nombre: '.$_POST['yourname'].'
Email: '.$_POST['email'].'
Mensaje: '.$_POST['comments'].'
';

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "rn";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "rn";

// Mail it & Mensaje de confirmación
echo "<script>alert('El mensaje ha sido enviado con exito!');window.location = 'http://isaac.geeksoft.com.mx/' </script>";
mail($para, $titulo, $mensaje, $cabeceras);

?>