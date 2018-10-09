<html>
<head>
<title>Programa del Inicio y Fin</title>
<body>
<?php
	//inicializo array
	$temp[0]=$_REQUEST['temp1'];
	$temp[1]=$_REQUEST['temp2'];
	$temp[2]=$_REQUEST['temp3'];
	$temp[3]=$_REQUEST['temp4'];
	$temp[4]=$_REQUEST['temp5'];
	
	$total = 0;
	$max=$temp[0];
	$diamax=0;
	for($i=0;$i<count($temp);$i++)
	{
		$total=$total+$temp[$i];
		if ($temp[$i]>$max)
		{
			$max=$temp[$i];
			$diamax=$i;
			
		}
	}
	$media=$total/count($temp);
	
	echo "La maxima es $max y el dia $diamax<br>";
	
		
	echo "La media de las temperaturas es $media grados<br/>";

?>
</body>
</head>
</html>