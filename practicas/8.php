<html>
<head></head>
<body>
	<?php
		/* Saludo depende de la hora del dia */
		
		date_default_timezone_set("EUROPE/MADRID");
		$fecha=date("H:i");
		
		echo "$fecha <br>";
		
		if ($fecha >= "00:00" && $fecha < "12:00") 
			echo "Buenos días";
		else if ($fecha >= "12:00" && $fecha < "18:00")
			echo "Buenas tardes";
		else
			echo "Buenas noches";
		
	?>
</body>
</html>