<!DOCTYPE html>
<head>
	<title>frutas</title>
</head>
<body>
	<h1>Frutas</h1>

		<?php
		$conexion=mysqli_connect ("localhost","root","","frutas")
			or die("Problemas en la conexión");
		$consulta="select * from fruta";
		$datos=mysqli_query($conexion,$consulta)
			or die("Problemas en la consulta ".mysqli_error($conexion));
		
		$fila=mysqli_fetch_array($datos);
		
		if ($fila!=false)// si hay al menos una fila
		{
			echo "<table border=\"1px\" align=\"center\">
			<tr align=\"center\">	
				<td>Nombre</td>
				<td>Peso medio</td>
				<td>Valor energetico</td>
			</tr>";
			while ($fila<>false)//mientras que haya una fila que leer
			{
				echo '<tr>
					<td>'.$fila['nombre'].'</td>
					<td>'.$fila['pesomedio'].'</td>
					<td>'.$fila['valorenergetico'].'</td>
				</tr>';
				$fila=mysqli_fetch_array($datos);//voy a la fila sig
			}
			echo "</table>";
			
			$consulta="select max(pesomedio) as maximo from fruta";
			$datos=mysqli_query($conexion,$consulta)
				or die("Problemas en la consulta ".mysqli_error($conexion));
			$fila=mysqli_fetch_array($datos); 
			echo "El pesomedio max es ".$fila['maximo'];
		
			mysqli_close($conexion);
		}else
		{
			echo "la bd esta vacia";
		}
		?>

</body>
</html>