<html>
<head></head>
<body background=<?php
	date_default_timezone_set('Europe/Madrid');
	$hora=date('H');
	if ($hora>=0 && $hora<=12){
		echo '"soleado.png"';
		echo ">Hola buenos dias";

	}
	else{
		if ($hora>=12 && $hora<18)
		{
			echo '"atardecer.jpg"';
			echo ">Buenas tardes";
		}
		else {
			echo '"noche.jpg"';
			echo ">Buenas noches";
		}
	}
?>

</body>
</html>