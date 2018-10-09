<html>
<head>
<title>Programa del Inicio y Fin</title>
<body>

	<form action = "VectoresPrueba2.php" method = "POST">
	Temperatura del Lunes: <input type = "number" name = "temp1"><br/>
	Temperatura del Martes: <input type = "number" name = "temp2"><br/>
	Temperatura del Miercoles: <input type = "number" name = "temp3"><br/>
	Temperatura del Jueves: <input type = "number" name = "temp4"><br/>
	Temperatura del Viernes: <input type = "number" name = "temp5"><br/>
	<br/>
	<input type = "submit" value = "Entregar">
</form>


<?php
	//inicializo array
	$temp[0]=$_REQUEST['temp1'];
	$temp[1]=$_REQUEST['temp2'];
	$temp[2]=$_REQUEST['temp3'];
	$temp[3]=$_REQUEST['temp4'];
	$temp[4]=$_REQUEST['temp5'];
	
	$total = 0;
	$max=$temp[0];
	$dia_max=0;
	$min=$temp[0];
	$dia_min=0;

	for($i=0;$i<count($temp);$i++)
	{
		$total=$total+$temp[$i];
		
		if ($temp[$i] > $max) {
			$max = $temp[$i];
			$dia_max=$i;
		}
		
		elseif ($temp[$i] < $min) {
			$min = $temp[$i];
			$dia_min=$i;
		}
	}
	$media=$total/count($temp);
	//max y el min

	
	echo "La temperatura máxima es $max y el día, $dia_max.</br>";
	echo "La media de las temperaturas es $media grados.<br/>";
	echo "La temperatura Mín ha sido $min grados y el dia $dia_min.</br>";
?>
</body>
</head>
</html>