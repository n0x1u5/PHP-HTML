<!doctype html>
<head></head>
<body>
<?php
/*Programa que genere 3 numeros aleatorios, que diga si los dos ultimos numeros son 
divisores del primero. Ejemplo: 20, 4 y 6. ¿El 40 y 60 son divisores de 20?*/

$n=rand(1,100); //primer numero
$div1=rand(1,10); //numeros a comprobar si son divisores
$div2=rand(1,10);

echo "Tenemos los numeros: $n, $div1 y $div2<br>";
if (($n%$div1==0) && ($n%$div2==0))
{
  echo "Los numeros $div1 y $div2 son divisores de $n";
}
else
{
  echo "Los numeros $div1 y $div2 NO son divisores de $n";
}
?>
</body>
</html>