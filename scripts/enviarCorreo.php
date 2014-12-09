<?php

    $to = "jomartinez@itcr.ac.cr";  
	$subject = "Contacto Ciadeg";
	
	$nombre = $_POST['nombreC'];
	$emisor = $_POST['correoC'];
	$contenido = $_POST['mensajeC'];
		   
	$message = "<b> 1Nombre:" .$nombre. "</b>" . "<p>Mensaje:" .$contenido. "</p>";
			
	$header = "From:".$emisor." \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$retval = mail ($to,$subject,$message,$header);
	
	
	if( $retval == true )  //el correo fue enviado
	{		
		echo 'Mensaje enviado  /  Message sent';
	}
	else  //el correo no pudo ser enviado
	{
		echo 'Error: mensaje no enviado  /  Error: message not sent';
	}


?>