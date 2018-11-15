<html> 
  <head> 
  <title>Captura de datos del form</title> 
  </head> 
  <body>
<?php
	//inicializo un vector asociativo de dos formas
	/*$registro['nombre']=$_REQUEST['nombre'];
	$registro['dni']=$_REQUEST['dni'];
	$registro['sexo']=$_REQUEST['sexo'];*/
	
	$registro=array('nombre'=>$_REQUEST['nombre'],
		'dni'=>$_REQUEST['dni'],
		'sexo'=>$_REQUEST['sexo']);

	//muestro valor a valor
	echo $registro['nombre']."</br>";
	echo $registro['dni']."</br>";
	echo $registro['sexo']."</br></br>";
		
	//muestro con un bucle
	foreach ($registro as $indice => $value){
		echo $indice.":".$value."<br>";
	}
	
		
?>
</body> 
</html>