<html> 
  <head> 
  <title>Captura de datos del form</title> 
  </head> 
  <body>
<?php 
	if (isset($_REQUEST['adm'])==false &&
		isset($_REQUEST['an'])==false &&
		isset($_REQUEST['dev'])==false &&
		isset($_REQUEST['nada'])==false)
	/* otra posibilidad: if (!isset($_REQUEST['adm']) &&
							!isset($_REQUEST['an']) &&
							!isset($_REQUEST['dev']) &&
							!isset($_REQUEST['nada']))*/
		echo "Debes seleccionar una profesion";
	else //una o varias seleccionadas
	{
		$sexo=$_REQUEST['sexo'];
		echo "Soy $sexo y me dedico a ser: <ul> ";
		
		if(isset($_REQUEST['adm'])==true)
		{
			echo "<li>administrador</li>";
		}
		
		if (isset($_REQUEST['an'])==true)
		{
			echo "<li>analista</li>";
		}
		
		if (isset($_REQUEST['dev'])==true) 
		{
			echo "<li>desarrollador</li>";
		}	
		
		if (isset($_REQUEST['nada'])==true)			
		{
			echo "<li>nada</li>";
		}
		
		echo "</ul> ";
	}

   ?>
</body> 
</html>