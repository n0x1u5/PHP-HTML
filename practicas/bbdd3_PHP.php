<!DOCTYPE html>
<head>
	<title>frutas</title>
</head>
<body>
	<h1>Frutas</h1>
	
	<?php // Insercion de datos
	$conexion=mysqli_connect("localhost","root","","frutas") or
    die("Problemas con la conexión");
	
	$sql="INSERT INTO catalogo (nombre, pesomedio, valorenergetico) VALUES 
           ('$_REQUEST[nombre]',$_REQUEST[pesomedio],$_REQUEST[valorenergetico])"; // Aqui se recogen los datos del formulario 
					   
	mysqli_query($conexion,$sql)
		or die("Problemas en el insert ".mysqli_error($conexion));

	mysqli_close($conexion);

	echo "Se añadieron los datos indicados";
	?>

<!-- A PARTIR DE AQUI SE MUESTRA EL CONTENIDO DE LA TABLA Y SE MUESTRA EL MAXIMO (PERO ARRIBA DE LA TABLA), COMO EN EL EJERCICIO ANTERIOR -->
	
	<table border="1px" align="center">
		<tr align="center">	
			<td>Nombre</td>
			<td>Peso medio</td>
			<td>Valor energetico</td>
		</tr>
	<?php
		$conexion=mysqli_connect ("localhost","root","","frutas")
			or die("Problemas en la conexión");
		$consulta="select * from catalogo";
		$datos=mysqli_query($conexion,$consulta)
			or die("Problemas en la consulta ".mysqli_error($conexion));
		
		$fila=mysqli_fetch_array($datos); 
		while ($fila<>false)//mientras que haya una fila que leer
		{
			echo '<tr>
				<td>'.$fila['nombre'].'</td>
				<td>'.$fila['pesomedio'].'</td>
				<td>'.$fila['valorenergetico'].'</td>
			</tr>';
			$fila=mysqli_fetch_array($datos);//voy a la fila sig
		}
		
	?>
	<br>	
	<?php
		
		$consulta="select max(pesomedio) as maximo from catalogo"; // Hay que poner el as (alias) para luego poder hacer el if / / / /
		$datos=mysqli_query($conexion,$consulta)
			or die("Problemas en la consulta ".mysqli_error($conexion));
		$fila=mysqli_fetch_array($datos); 
		if ($fila['maximo']==NULL)
			echo "No hay frutas en la bbdd";
		else
			echo "El pesomedio max es ".$fila['maximo'];
		
		mysqli_close($conexion); // Siempre importante cerrar la conexion de la bbdd
		
	?>
		
	</table>
</body>
</html>