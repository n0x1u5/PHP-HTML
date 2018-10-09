<html>
<head></head>
<body background=<?php
	date_default_timezone_set('Europe/Madrid');
	$hora=date('H');
	if ($hora>=0 && $hora<=12){
		echo '"sol.png"';
		echo ">Hola buenos dias";

	}
	else{
		if ($hora>=12 && $hora<18)
		{
			echo '"atardecer.jpg"';
		}
		else {
			echo '"luna.jpg"';
		}
	}
?>

</body>
</html>
