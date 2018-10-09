<?php

	$diaSemana[]=$_REQUEST['l'];
	$diaSemana[]=$_REQUEST['m'];
	$diaSemana[]=$_REQUEST['x'];
	$diaSemana[]=$_REQUEST['j'];
	$diaSemana[]=$_REQUEST['v'];
	$diaSemana[]=$_REQUEST['s'];
	$diaSemana[]=$_REQUEST['d'];
	
	echo "Lunes temperatura de $diaSemana[0] grados";
	echo "<br>";
	echo "Martes temperatura de $diaSemana[1] grados";
	echo "<br>";
	echo "Miercoles temperatura de $diaSemana[2] grados";
	echo "<br>";
	echo "Jueves temperatura de $diaSemana[3] grados";
	echo "<br>";
	echo "Viernes temperatura de $diaSemana[4] grados";
	echo "<br>";
	echo "Sabado temperatura de $diaSemana[5] grados";
	echo "<br>";
	echo "Domingo temperatura de $diaSemana[6] grados";
	
	if ($_REQUEST['sacar']=="med"){
		$media= ($diaSemana[0] + $diaSemana[1] + $diaSemana[2] + $diaSemana[3] + $diaSemana[4] + $diaSemana[5] + $diaSemana[6])/7;
		echo "<br>";
		echo " La media de las temperaturas es: $media grados";
	}
	
	if ($_REQUEST['sacar']=="sum"){
		$suma= $diaSemana[0] + $diaSemana[1] + $diaSemana[2] + $diaSemana[3] + $diaSemana[4] + $diaSemana[5] + $diaSemana[6];
		echo "<br>";
		echo " La suma de las temperaturas es: $suma";
	}
	
	if ($_REQUEST['sacar']=="min"){
		echo "<br>";
		echo "La temperatura minima esta semana es de " .min($diaSemana); 
		echo " grados";
	}
	
	if ($_REQUEST['sacar']=="max"){
		echo "<br>";
		echo "La temperatura maxima esta semana es de " .max($diaSemana); 
		echo " grados";
	}
	
	// Para sacar el maximo y minimo sin usar la funcion .max y .min, mirar los archivos Formulario7.A.html, Formulario7.B_PHP.php, Formulario7.C_PHP.php, VectoresAsociativosTemp.php
		
	
?>