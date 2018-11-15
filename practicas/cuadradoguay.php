<!DOCTYPE html>
<html>
<head>
<title>Cuadrados</title>
</head>
<body>
<?php
function comprobar($array)
{
	$vacio=true;
	foreach($array as $indice=>$valor)
	{
		if($valor=="")
		{
			$vacio=false;
		}
	}
	return $vacio;
}

$verdad=comprobar($_REQUEST);

if($verdad!=false)
{
	$escribir=fopen($_REQUEST['fichero'],"wt");
	for($fila=0;$fila<$_REQUEST['lado'];$fila++)
	{
		for($columna=0;$columna<$_REQUEST['lado'];$columna++)
		{
			if(($fila>=1 and $fila<$_REQUEST['lado'] - 1) 
				and ($columna>=1 and $columna<$_REQUEST['lado'] - 1))
			{//pinta la zona interior
				$nescribir="L";
				echo "L";
				fputs($escribir,$nescribir);
			}
			else //pinta la zona exterior
			{
				echo "E";
				$nescribir="E";
				fputs($escribir,$nescribir);
			}
		}
		echo "<br/>";
		$nescribir="\n";
		fputs($escribir,$nescribir);
	}
	fclose($escribir);
}
else//Para el caso en que verdad sea verdadero
{
	foreach($_REQUEST as $indice=>$value)
	{
		if($value=="")
		{
		echo "No has introducido el $indice";
		}
	}
	echo "";
}		
?>
</body>
</html>