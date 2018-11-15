<html>

<head>
	<title>frutas</title>
</head>
<body>
	<?php
		$nombre=$_REQUEST['del'];
		

		$conexion=mysqli_connect ("localhost","root","","frutas")
			or die("Problemas en la conexión");
		
		$sqldelete="delete from fruta where nombre='$nombre'";	
		$datos=mysqli_query($conexion,$sqldelete)
				or die("Problemas en el delete ".mysqli_error($conexion));

		echo "delete con exito (puede ser que haya borrado o no)";
		mysqli_close($conexion);	
	
	?>
	</body>
	</html>		