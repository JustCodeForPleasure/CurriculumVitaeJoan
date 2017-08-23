<?php 
	
$para = 'joan.gc.mail@gmail.com';

$asunto = 'Mensaje desde Sitio de Joan';

$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";

$MESSSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
$MESSSAGE_BODY .= "\n<br>Mensaje: ".nl2br($_POST["message"])."\n";



mail($para, $asunto, $MESSSAGE_BODY, $mailheader) or die ("Error al enviar email!");

header('Location: http://localhost/Proyecto%20Final/');
?>