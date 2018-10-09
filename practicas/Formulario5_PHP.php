<!DOCTYPE html> 
  <head> 
  <title>Captura de datos del form</title> 
  </head> 
  <body>
<?php 
$inicio=$_REQUEST['inicio'];
$fin=$_REQUEST['fin'];

if ($_REQUEST['radio1']=="par"){
	 if ($inicio%2==1){
	 	$inicio=$inicio+1;//si es impar empieza en el siguente
	 for($i=$inicio; $i<=$fin; $i=$i+2){
		echo $i;
		echo "<br>";
	   }
	}
}

elseif ($_REQUEST['radio1']=="impar") {
	 if ($inicio%2==0){
	 	$inicio=$inicio+1;//si es par empieza en el siguente
	 for($i=$inicio; $i<=$fin; $i=$i+2){
		echo $i;
		echo "<br>";
	   }
	}
}

elseif ($_REQUEST['radio1']=="sum") {
		$suma=$inicio + $fin;
		echo $suma;
	
}

elseif ($_REQUEST['radio1']=="multi") {
		$multi=$inicio * $fin;
		echo $multi;
	
}
?>
</body> 
</html>
