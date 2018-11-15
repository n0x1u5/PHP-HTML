<?php	
	/*las cookies las vamos a fijar con caducidad en 15 segundos*/
	setcookie('usuario',$_REQUEST['user'],time()+15,'/');
	setcookie('password',$_REQUEST['pass'],time()+15,'/');
?>
<!doctype html>
<html>
<head>
	<title>Practica cookies 1b</title>
</head>
<body>
	<p>Has entrado</p>
	<p><a href="pcookiesA.php">Volver</a></p>
</body>
</html>