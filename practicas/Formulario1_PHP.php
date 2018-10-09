<html> 
  <head> 
  <title>Captura de datos del form</title> 
  </head> 
  <body>
<?php 
  echo "El nombre ingresado es: ".$_REQUEST['nombre']." y es "; 
  if ($_REQUEST['edad']>=18)
  {
  echo "mayor de edad";
  }
  else
  {
  echo "menor de edad";
  }
  ?>
</body> 
</html>