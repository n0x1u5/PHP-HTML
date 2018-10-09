<!--Numero aleatorio entre 1 y 100. Si esta entre 1-19 que muestre frio (color azul), si 20-39 que muestre calor (color naranja), si 40-100 que muestre muerte (color rojo).-->
<!doctype html>
<head></head>
<body>
<?php

$valor=rand(1,100);//genera un aleatorio entre 1 y 100
echo "<table border=\"1\"><tr><td>El valor sorteado es $valor</td></tr></table><br>";
	
if ($valor >= 1 && $valor < 20)
{
  echo "<span style=\"color:blue\">Frio</span>";
}
elseif ($valor >= 20 && $valor < 40)
{
  echo "<span style=\"color:orange\">Calor</span>";
} 
else //del 40 al 100
{
  echo "<span style=\"color:red\">Muerte</span>";
}
?>
</body>
</html>