	<div class="map" align="center">
		<form>
			<iframe src="https://www.google.com/maps/d/embed?mid=zZZIn7BGWlNw.kSn4Q0AmkUzQ" width="520" height="335"></iframe>
		</form>	
	</div>
	<div class="forma" align="center">
		<h3>Escribemos</h3>
		<p>En breve nos pondremos en contacto contigo.</p>
		<form action="" method="post">
			<input placeholder="Nombre(s)*" type="text" name="first_name" maxlength="50" size="35" required>
			<br/><br/>
			<input placeholder="Empresa" type="text" name="empresa" maxlength="50" size="35">
			<br/><br/>
			<input placeholder="Correo Electrónico*" type="email" name="email" maxlength="80" size="35" required>
			<br/><br/>
			<textarea placeholder="Escribe aquí tu mensaje*" name="comments" maxlength="500" cols="35" rows="6" required></textarea><br/>
			<label>Campos con * obligatorios.</label>
			<br /><br />
			<input type="submit" value="ENVIAR MENSAJE" class="btn" name="enviar">
		</form>	
	</div>
	<?php
        if(isset($_POST['enviar'])){
            require("./php/send.php");
        }
     ?>

