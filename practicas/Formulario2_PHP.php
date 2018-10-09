<html> 
 <head> 
 <title>Indice de masa corporal</title> 
 </head> 
 <body>
	<?php 
		
		
		echo "Hola " .$_REQUEST['nombre']. " <br> ";
		
		$altura = $_REQUEST['estatura'];
		$peso = $_REQUEST['peso']; 
		
		$masa = ($peso / ($altura * $altura));
		
		echo "Tu indice de masa coporal es: $masa ";
		
		
			
	?>
	<p>Recuerda: <br>
		<19: Delgadez <br>
		>19 y <25: Normal <br>
		>25: Puto gordo <br>
	</p>
	
</body> 
</html>