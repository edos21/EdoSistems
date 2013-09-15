<?php

	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$tel = $_POST['telf'];
	$msg = $_POST['texto'];
	$regex = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^';
	$error = '';
	$location = 'history.back()';

	if ($name == ''){

		$error = 'Por favor ingrese su nombre\n';
	}

	if ($email == ''){

		$error .= 'Ingrese un email al cual podamos responder\n';

	}

	if ($msg == ''){

		$error .= 'No ha escrito ningun mensaje';

	}

	if ($error == ''){
		if (preg_match($regex, $email)) {
			$error = 'Su mensaje ha sido enviado, le contactaremos a la brevedad posible';
			$location = "window.location = '?contact'";
			$to = "'contacto@e2sistems.com'.','.'edos21@gmail.com'.','.'wilmervzla2000@gmail.com'";
			$subject = $name . " desde e2sistems";
			$message = "Nombre: ". $name ."<br>
						Email: ". $email ."<br>
						Telefono: ". $tel ."<br><br>"
						. $msg;
			$headers = "From:" . $email;
			mail($to,$subject,$message,$headers);
		} else { 
	    	$error .= "Correo invalido, por favor revise y vuelva a intentar";
		}

	}
 	echo "<script>alert('". $error ."'); ".$location.";</script>";

?>