<html>
<head>
<title>Programa Avanzado función isset</title>
<body>
<?php
$inicio = $_REQUEST['inicio'];
$fin = $_REQUEST['fin'];

if($inicio >= $fin)
{
	echo "Esto: el inicio es mayor o igual que el fin";
}
else //inicio<fin
{	
	//inicializar el acumulador 0 si es suma y 1 si es multi
	if($_REQUEST['operar']=='sumar')
		$acu=0;
	else  //multiplicar
		$acu=1;
		
	if($_REQUEST['polar'] == 'par')
	{
		for($i=$inicio;$i<=$fin;$i++) //recorro todos
		{
			if($i%2==0)//si es par
			{
				if($_REQUEST['operar']=='sumar')
				{
					$acu=$acu+$i;
				}
				else
				{
					$acu=$acu*$i;
				}
			} //si es impar no hago nada
		}		
	}
	else //impar
	{
		for($i=$inicio;$i<=$fin;$i++)
		{
			if($i%2==1) //si es impar opero
			{
				if($_REQUEST['operar']=='sumar')
				{
					$acu=$acu+$i;
				}
				else //multiplicacion
				{
					$acu=$acu*$i;
				}
			}//si es par no hago nada
		}	
	}
	
	if (isset($_REQUEST['rojo']))
	{
		echo "<p style=\"color:red\">El resultado de la operación 
			es $acu entre los números $inicio y $fin</p>";
	}
	else
	{
		echo "<p>El resultado de la operación 
			es $acu entre los números $inicio y $fin</p>";
	}
}
?>
</body>
</head>
</html>