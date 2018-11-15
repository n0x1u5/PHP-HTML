<html>

<head>
	<title>frutas</title>
</head>
<body>
	<?php
		$conexion=mysqli_connect("localhost","root","","frutas")
			or die("Problemas en la conexión");

		$consulta="select nombre, pesomedio from catalogo where pesomedio between ".$_REQUEST['Min']. " and " .$_REQUEST['Max'];

		$datos=mysqli_query($conexion,$consulta)
			or die("Problemas en la consulta ".mysqli_error($conexion));
		
		$fila=mysqli_fetch_array($datos);
		if ($fila==false) // Si no hay ningun numero entre los valores que hemos introducido 
			echo "No hay datos con la consulta";
		else //hay datos, los mostramos
		{
			while ($fila<>false) // mientras haya una fila que leer...
			{
				echo "La Fruta es: ".$fila['nombre']." y el peso es: ".$fila['pesomedio'];
				echo "<br>";
				$fila=mysqli_fetch_array($datos); // Voy a la fila siguiente
			}
		}
	?>
	</body>
	</html>