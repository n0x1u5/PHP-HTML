<html>
<head>
<title>Problema</title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","","frutas") or //Nos conectamos a la bbdd 
		die("Problemas con la conexión");

	$sql="select nombre, pesomedio from catalogo"; //Hacemos la instruccion (select,insert...)

	$registros=mysqli_query($conexion,$sql)
	or die("Problemas en el select".mysqli_error($conexion)); //Asociamos la conexion con la instruccion y lo guardamos en una variable
  
	$reg=mysqli_fetch_array($registros); //Recorremos cada uno de los campos de la tabla con la ejecucion de la variable anterior, voy a la primera fila
	while ($reg<>false) //Mientras sea verdadero muestra el echo
	{
		echo "La fruta ".$reg['nombre']." tiene ".$reg['pesomedio']. " gramos de peso medio <br>";
		$reg=mysqli_fetch_array($registros); // Se vuelve a recorrer para que vuelva a while
	}

	mysqli_close($conexion); //Se cierra la conexion 

	?>
</body>
</html>