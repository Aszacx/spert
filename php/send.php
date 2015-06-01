<?php
	if(isset($_POST['email'])) {

		// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_to = "issac.centeno@spert.com.mx";
		$email_subject = "Te han contactado a través del sitio web.";

		// Aquí se deberían validar los datos ingresados por el usuario
		if(!isset($_POST['first_name']) ||
		!isset($_POST['empresa']) ||
		!isset($_POST['email']) ||
		!isset($_POST['comments'])) {

			echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
			echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
			die();
		}

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
		$email_message .= "Empresa: " . $_POST['empresa'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		mail($email_to, $email_subject, $email_message, $headers);

		$mensaje = "Gracias. En breve nos pondremos en contacto contigo.";
		print "<script>alert('$mensaje')</script>";
	}
?>