<doctype html>
<head></head>
<title>Problema1</title>
<!-- Programa que muestra una palabra segun que valor salga.
	 valor entre 1 y 19 = frio
	 valor entre 20 y 39 = calor
	 valor entre 40 y 100 = muerte -->
<body>
	<?php
	
		$valor=rand(1,100);
		
		echo "El valor es...$valor<br>";
		if ($valor>=1 && $valor<=19 )
			echo "Frio";
		elseif ($valor>=20 && $valor<=39)
			echo "Calor";
		else
			echo "Muerte";
		
	?>
</body>
</html>
		