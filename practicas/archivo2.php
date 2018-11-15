<?php // ESTA PARTE DE AQUI NO ES NECESARIO SABERLA, EL EJERCICIO EMPIEZA EN EL <html> 	
	session_start();
	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$request = md5( implode( $_POST ) );
		if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
		{
			/* Si detecta que el md5 del post entrante esta ya registrado, 
			entiende que es un refresco F5 y borra el contenido de Request */
			foreach($_REQUEST as $variable => $valor)
			{
				unset($_REQUEST[$variable]);
			}
		}
		else
		{
			$_SESSION['last_request']  = $request;
			/* Si no, procede con normalidad */
		}
	}
?> 
<!doctype html>
<html>
<head>
	<title>Practica ficheros</title>
</head>
<body>
<section>
	<div id="div_formulario">

		<form method="post" action="">
			<p>
				Nombre de fichero <input type="text" name="fichero"><br>
				Titulo <input type="text" name="titulo"><br>
				Director <input type="text" name="director"><br>
				Fecha de estreno <input type="text" name="estreno"><br>
				<input type="radio" name="publico" value="infantil"> Infantil<br>
				<input type="radio" name="publico" value="adulto" checked> Adultos<br>
				<input type="submit" name="registrar" value="Registrar">
				</p>
			</form>
		</div>
		<div id="div_resultado">
			<?php				
				if (isset($_REQUEST['registrar']))
				{
					if ($_REQUEST['fichero']!="" && $_REQUEST['titulo']!="" 
						&&$_REQUEST['director']!="" && $_REQUEST['estreno']!="")
					{
						$registrar=fopen($_REQUEST['fichero'],"at");						
						$nregistro=
						"Titulo: ".$_REQUEST['titulo'].
						"\nDirector: ".$_REQUEST['director'].
						"\nFecha de estreno: ".$_REQUEST['estreno'].
						"\nPublico: ".$_REQUEST['publico'].
						"\n==================================\n";
						fputs($registrar,$nregistro);
						echo "<p>Datos guardados en ".$_REQUEST['fichero'];
						fclose($registrar);
					}
					else
					{
						echo "<p>Por favor, complete todos los datos</p>";
					}
				}
			?>
		</div>
	</section>
</body>
</html>
