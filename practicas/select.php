<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","prueba") or
    die("Problemas con la conexión");

$sql="select emp_no, salario from emple";

$registros=mysqli_query($conexion,$sql)
  or die("Problemas en el select".mysqli_error($conexion));
  
$reg=mysqli_fetch_array($registros); 
while ($reg<>false)
{
	echo "El empleado ".$reg['emp_no']." tiene ".$reg['salario']."<br>";
	$reg=mysqli_fetch_array($registros); 
}

mysqli_close($conexion);

?>
</body>
</html>