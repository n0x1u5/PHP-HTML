<html>
<head>
<title>Foreach vs no-foreach</title>
<body>
<?php
	
	//Sin foreach
	
	echo "<h1>SIN FOREACH</h1>";
	
	$recogida=array('nombre'=>$_REQUEST['nombre'],'dni'=>$_REQUEST['dni'],'sexo'=>$_REQUEST['sexo']);
	
	echo "Eres "; echo $recogida['nombre'];
	echo " con DNI "; echo $recogida['dni'];
	echo " y sexo "; echo $recogida['sexo'];
	
	// Con foreach
	
	echo "<h1>AHORA CON FOREACH</h1>";
	
	
	$recogida2=array('nombre'=>$_REQUEST['nombre'],'dni'=>$_REQUEST['dni'],'sexo'=>$_REQUEST['sexo']);
	
	foreach($recogida2 as $indice=>$valor)
		echo "<p>En $indice has introducido $valor </p>";

?>
</body>
</head>
</html>