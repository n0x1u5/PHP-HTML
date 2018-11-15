<html>

<head>
	<title>frutas</title>
</head>
<body>
	<?php // EN EL EJERCICIO bbdd5_PHPv2.php SE HACE ESTE MISMO EJERCICIO PERO SIN CONSULTAR ANTES SI EXISTE LA FRUTA  
		$nombre=$_REQUEST['del']; // Recogemos la fruta que queremos borrar y la guardamos en una variable

		$conexion=mysqli_connect ("localhost","root","","frutas")
			or die("Problemas en la conexión");
		
		$sqlselect="select nombre from catalogo where nombre='$nombre'"; //Primero comprobamos si existe la fruta que queremos borrar
		$datos=mysqli_query($conexion,$sqlselect)
			or die("Problemas en el select ".mysqli_error($conexion));
		
		$reg=mysqli_fetch_array($datos); //Las filas que devuelva las recogemos aqui	
		if($reg==false)// Si la consulta no devuelve ninguna fila->fruta no existe
		{
			echo "No se ha realizado el borrado porque la fruta no existe";
		}
		else
		{
			$sqldelete="delete from catalogo where nombre='$nombre'";	
			mysqli_query($conexion,$sqldelete)
				or die("Problemas en el delete ".mysqli_error($conexion));
			echo "Se ha borrado la fruta $nombre con exito";
			
		}
			
		mysqli_close($conexion);	
	
	?>
	</body>
	</html>		