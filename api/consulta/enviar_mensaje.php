<?php require("include/functions.php");
	if (isset($_POST["submit"]))
	{
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$motivo = 'CONSULTA DESDE WEB';
		$mensaje = 'Nombre: '.$nombre.'<p>'.'Email: '.$email.'<p>'.'Motivo: '.$motivo.'<p>'.$_POST['mensaje'].'<p>'.'<p>'.'Gracias por su consutla le responderemos a la brevedad';

		$destino = "sixtod@gmail.com";
		$asunto = $motivo; 

		$cuerpo = '<html> <head> <title>Contacto desde SixtoRed</title> </head> <body> <h1>Consulta desde SixtoRed</h1> <p>  
<strong>Su Mensaje</strong></br></br></p><p> '.$mensaje.' </p> </body> </html> '; //para el envío en formato HTML 

		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			 //dirección del remitente 
		$headers .= "From: SixtoRed < sixtod@gmail.com >\r\n"; 
			//dirección de respuesta, si queremos que sea distinta que la del remitente 
		$headers .= "Reply-To: sixtod@gmail.com\r\n";  
		$headers .= "Cc: ".$nombre."<".$email.">"."\r\n"; //Copia a la persona que consulta.. 
		
		# Se intenta guardar el mensaje y se espera retorno de la funcion guardar_mensaje 0,1,2
		$lnRet = guardar_mensaje() ;
		switch ($lnRet) {
			case 0:
			// No pudo conectar a la bbdd
			?>
				<h2>Sin conexion a la BBDD, intente mas tarde..</h2>
			<?php
			break;
			case 1:
				//Mensaje Registrado
				# code...
				mail($destino,$asunto,$cuerpo,$headers);
				?>
				<h2>Muchas gracias por su mensaje</h2>
				<h4>Su contacto es por: <?php echo $motivo; ?></h4>
				<h4>El mensaje fue: </br><?php echo $mensaje; ?></h4>
				<?php 
				break;
			case 2:
			// mensaje no Registrado
				?>
				<h2>Hubo un problema intente mas tarde..</h2>
				<?php
			default:
				# code...
				break;
		}

		//mail ($destino, $motivo, $mensaje); //Se nos envia la consulta
		//mail ($email, $motivo, $mensaje); // Se envia copia a la persona que consulta
	}	
	else {
		header("Location:index.php#contact");
		//print("No viene el submit");
	}	

?>	
