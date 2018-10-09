<html>
<head></head>
<body>
<h1>Numeros pares entre dos numeros: </h1>
<?php
/* Se piden dos numeros, si el primero es menor que el segundo da error, si no, se calcula los numeros pares entre ambos */
		
$primer = $_REQUEST['primer'];
$segun = $_REQUEST['segun'];
		
if ($primer>$segun)
{
	echo "<p>ERROR! El primer numero no puede ser
		mayor que el segundo</p>";
}
else //segundo es mayor o igual que el primero.
{	
	if ($primer%2==1)//impar empieza en el siguente
		$primer=$primer+1;
		
	for($i=$primer; $i<=$segun; $i=$i+2){
		echo "$i <br>";
	} 
}
?>
</body>
</html>
