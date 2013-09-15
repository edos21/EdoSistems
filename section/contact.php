<?php
	
	include 'includes/header.html';

?>
		<br>
		<br>
		<div id="textdere" style="text-align: right;">¿TIENES ALGUNA<br></div>
		<div id="textizq"><span class="letra">PREGUNTA?</span></div>
		<br>
		<br>
		<br>
	<div id="contactbody">
		<h2>CONTACTANOS</h2>
		<p>¿Tienes alguna duda, comentario o quieres plantearnos tu proyecto? Contactanos por nuestras redes sociales o envianos tu comentario aqui y te responderemos a la brevedad posible</p>
		<br>
		<div id="cont3">
			<form method="post" action="#">
				<label for="nombre">NOMBRE Y APELLIDO:</label>
				<input type="text" name="nombre" id="nombre"><br>
				<label for="email">EMAIL:</label>
				<input type="email" name="email" id="email"><br>
				<label for="telf">TELÉFONO:</label>
				<input type="tel" name="telf" id="telf"><br>
				<label for="mensaje">MENSAJE:</label>
				<textarea name="texto" id="mensaje"> </textarea>
				<br>
				<img id="imgcontacto" src="img/contact.png">
				<button type="submit"><img src="img/enviar.png"/></button>
			</form>
		</div>
		<br>
		<img src="img/separador.png"/><br>

		<div id="textdere" style="text-align: right;">REDES<br></div>
		<div id="textizq"><span class="letra">SOCIALES</span></div>
		<br>
		<a target="_blank" href="https://www.facebook.com/EdoSistems"><img class="socialcontact" src="img/fbcontact.png"></a>
		<a target="_blank" href="https://twitter.com/E2Sistems"><img class="socialcontact" src="img/twcontact.png"></a>
		<a target="_blank" href="https://plus.google.com/u/0/b/114752835232242172087/114752835232242172087/posts"><img class="socialcontact" src="img/googlecontact.png"></a>
		<a target="_blank" href="http://www.linkedin.com/company/e2sistems?trk=company_logo"><img class="socialcontact" src="img/linkedincontact.png"></a>

		<img src="img/separador.png"/><br>

		<div id="contactdata">
			<img src="img/world_footer.png" alt="ubicacion">
			<p>Barquisimeto/Caracas - Venezuela</p><br><br>
			<img src="img/telf_footer.png" alt="telefono">
			<p>   Celular: +58(426)759-7558<br>   Teléfono: +58(251)233-7886</p><br>
			<img src="img/email_footer.png" alt="email">
			<p> Correo: contacto@e2sistems.com</p>
		</div>
	</div>
	<img width="730px" src="img/shadow_1.png"/>

<?php

	include 'includes/footer.html';

?>