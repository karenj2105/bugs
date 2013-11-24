<?php
/**
 * Archivo: index.php
 * Autor:   W. Libardo Pantoja Yepez (wpantoja@unicauca.edu.co)
 * Fecha:   Sep 12 de 2013
 * Ultima Actualizacion:
 * -----------------------------------------------------------------
 * Formulario de inicio de sesion
 * -----------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Agenda Modificada</title>
<script type="text/javascript" src="application.js">alert("Error al abrir application.js");
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="index.css" rel="stylesheet" type="text/css" />
</head>
<body>


	<!-- INICIO SESION -->
	<div id="content">
		<h1>Contactos</h1>
		<h2>Inicio de Sesi&oacute;n</h2>
		<form method="post"
			action="FrontController.php?ctrl=usuarios&accion=login"
			onsubmit="return validarLogin(this)">
			<div style="text-align: center">Usuario:</div>
			<div style="text-align: center">
				<input maxlength="15" size="10" name="login" value="libardo" />
			</div>
			<div style="text-align: center">contrase&ntilde;a:</div>
			<div style="text-align: center">
				<input value="123" maxlength="15" size="10" name="password"
					type="password" />
			</div>
			<div style="text-align: center">
				<input type="submit" name="aceptar" value="Iniciar Sesi&oacute;n" />
			</div>
		</form>
		<?php 
		if(isset($info)){
	?>
		<div id="mensaje">
			<?= $info ?>
		</div>
		<?php } ?>
	</div>

	<!-- FOOTER -->
	<div id="footer">
		<a href="mailto:wpantoja@unicauca.edu.co">contacto</a> | <a
			href="http://validator.w3.org/check?uri=referer">html</a> | <a
			href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2012 |
		Este software est&aacute; licenciado bajo licencia <a rel="license"
			href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GPL</a>
	</div>
</body>
</html>
