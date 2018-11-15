<!DOCTYPE html>
<head>
	<title>Frutas</title>
</head>
<body>
	<h1>Frutas</h1>
	<table border="1px" align="center">
		<tr align="center">	
			<td>Nombre</td>
			<td>Peso medio</td>
			<td>Valor energetico</td>
		</tr> <!-- No cerramos <table> ya que luego en el php vamos a seguir dibujando la tabla con cada dato recogido de la bbdd -->
		<?php
		$conexion=mysqli_connect ("localhost","root","","frutas")
			or die("Problemas en la conexión");
			
		$consulta="select * from catalogo";
		$datos=mysqli_query($conexion,$consulta) // juntamos las dos variables anteriores para que sepa que esa cosulta es a esa bbdd
			or die("Problemas en la consulta ".mysqli_error($conexion));
		
		$fila=mysqli_fetch_array($datos); // Voy a la primera fila
		while ($fila<>false) // mientras que haya una fila que leer...
		{
			echo '<tr>
					<td>'.$fila['nombre'].'</td>
					<td>'.$fila['pesomedio'].'</td>
					<td>'.$fila['valorenergetico'].'</td>
				</tr>';
			$fila=mysqli_fetch_array($datos); // voy a la fila sig
		}
		
		?>
		
	</table> <!-- Para sacar el maximo pesomedio fuera de la tabla anterior la cerramos y abrimos un nuevo php -->
	
	<?php
	// Como aun seguimos conectados a la bbdd no hace falta que hagamos $conexion=mysqli_connect ("localhost","root","","Frutas") etc...
	$consulta="select max(pesomedio) as maximo from catalogo"; // Hay que poner el as para luego poder hacer el if 
	$datos=mysqli_query($conexion,$consulta)
			or die("Problemas en la consulta ".mysqli_error($conexion));
	$fila=mysqli_fetch_array($datos); 
	if ($fila['maximo']==NULL) // Si la primera fila esta vacia (que como hemos hecho la consulta del maximo siempre saldra la primera) entra en el if si no en el else
		echo "No hay frutas en la bbdd";
	else
		echo "El pesomedio max es ".$fila['maximo'];
		
	mysqli_close($conexion); // Siempre importante cerrar la conexion de la bbdd
		
	?>
</body>
</html>