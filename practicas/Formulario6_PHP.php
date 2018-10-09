<?php
	$cantidad = $_REQUEST['cant'];
	$nombre = $_REQUEST['producto'];
	$IVA = $_REQUEST['IVA'];
	if($nombre == 'silla')
	{
		$producto = 30;
	}
	elseif($nombre == 'mesa')
	{
		$producto = 20;
	}
	elseif($nombre == 'taza')
	{
		$producto = 2;
	}
	

	$precio = (($producto * $IVA)/100 + $producto) * $cantidad;
	
	echo "El producto seleccionado es $nombre,la cantidad $cantidad el precio del $producto,el IVA $IVA%<br/>";
	echo "El precio final es: $precio";
?>