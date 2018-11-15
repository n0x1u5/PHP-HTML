<?php
function mostrarnumeros($valor1, $valor2, $valor3)
{
  
  $algoritmo=($valor1+$valor2+$valor3)/3; // Lo que vas a hacer con cada uno de los valores de arriba
  return $algoritmo; 
   
}

$result=mostrarnumeros($_REQUEST['n1'],$_REQUEST['n2'],$_REQUEST['n3']); //Aplicamos la funcion de arriba con los valores que recogemos
echo "<h2>La media es $result </h2>";  


?>