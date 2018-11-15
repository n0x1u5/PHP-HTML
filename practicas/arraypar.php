<html>
<head>
<title>Array de n pares</title>
</head>
<body>
<?php

//generar el array de n pares
//$npar=0;
for($i=0;$i<$_REQUEST['numero'];$i++)
{
	$par[$i]=$i*2;
	//$par[$i]=$npar;
	//$npar=$npar+2;
}

//

if(($_REQUEST['inicial']<$_REQUEST['final']) 
	and isset($par[$_REQUEST['inicial']-1])
	and isset($par[$_REQUEST['final']-1]))
{
	$suma=0;
	$i=$_REQUEST['inicial']-1;
	while($i<$_REQUEST['final'])
	//while($i<=$_REQUEST['final']-1)
	{
		$suma=$suma+$par[$i];
		$i++;
	}
	echo "Este es el resultado de la suma de los
	pares del intervalo:$suma";
}
else
{
	echo "El intervalo no existe,ha puesto un valor final
	e inicial igual o el inicial es mayor que el final";
}
?>
</body>
</html>