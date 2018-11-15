<!DOCTYPE html>
<head>
	<title>frutas</title>
</head>
<body>
	<h1>Frutas</h1>
	<table border="1px" align="center">
		<tr align="center">	
			<td>Nombre</td>
			<td>Peso medio</td>
			<td>Valor energetico</td>
		</tr>
		<?php
		$conexion=mysqli_connect ("localhost","root","","frutas")
			or die("Problemas en la conexión");
		$consulta="select * from fruta";
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
		
	</table>
	
	<?php
	$consulta="select max(pesomedio) as maximo from fruta";
	$datos=mysqli_query($conexion,$consulta)
			or die("Problemas en la consulta ".mysqli_error($conexion));
	$fila=mysqli_fetch_array($datos); 
	if ($fila['maximo']==NULL)
		echo "No hay frutas en la bbdd";
	else
		echo "El pesomedio max es ".$fila['maximo'];
		
	mysqli_close($conexion);
		
	?>
</body>
</html>