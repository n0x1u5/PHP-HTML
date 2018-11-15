<!DOCTYPE html>
<html>
<head>
<title>Cuadrados</title>
</head>
<body>
<?php
//devuelve true si esta todo lleno y falso si
//hay algún vacio en el array
function comprobar($array)
{
	$lleno=true;
	foreach($array as $indice=>$valor)
	{
		if($valor=="")
		{
			$lleno=false;
		}
	}
	return $lleno;
}

if(comprobar($_REQUEST)==true)//rellenado todos los datos
{
	$escribir=fopen($_REQUEST['fichero'],"wt");
	for($j=0;$j<$_REQUEST['lado'];$j++)
	{
		for($i=0;$i<$_REQUEST['lado'];$i++)
		{
			echo "*";//escribo en pantalla
			fputs($escribir,"*");//escribo en fichero
		}
		
		echo "<br/>";//salto de linea en pantalla 
		fputs($escribir,"\n");//salto de linea en fichero
	}
	fclose($escribir);
}
else//faltan al menos un dato por rellenar
{
	foreach($_REQUEST as $indice=>$value)
	{
		if($value=="")
		{
			echo "No has introducido el $indice<br>";
		}
	}
}		
?>
</body>
</html>