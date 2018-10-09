<html>
<head>
<title>Programa del Inicio y Fin</title>
<body>
<?php
	//inicializo array
	$temp['lunes']=10;
	$temp['martes']=9;
	$temp['miercoles']=96;
	$temp['jueves']=25;
	$temp['viernes']=27;
	
	$total = 0;
	$max=$temp['lunes'];
	$diamax='lunes';
	foreach($temp as $d => $t)
	{
		//
		echo "El $d tiene $t<br>";
		
		$total=$total+$t;
		if ($t>$max)
		{
			$max=$t;
			$diamax=$d;
			
		}
	}
	$media=$total/count($temp);
	
	echo "La maxima es $max y el dia $diamax<br>";
	echo "La media de las temperaturas es $media grados<br/>";

?>
</body>
</head>
</html>