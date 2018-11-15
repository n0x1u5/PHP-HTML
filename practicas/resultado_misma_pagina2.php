<!DOCTYPE html>
<html>
<head> 
</head>
<body>
<script> //Previene el post Resubmit al refrescar el navegador
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
/*Para una solución más completa y valida tambien para get hay que utilizar el patrón de diseño
Post/Redirect/Get (https://es.wikipedia.org/wiki/Post/Redirect/Get) */
</script>


<?php 
if (isset($message)) //Si no esta inicializada no muestra nada
	echo $message." sin div".'<br>'; 
?> 

<form  action="" method="post">
  <input type="text" name="inputText"> Mensaje </input><br>
  <input type="text" name="inputText2"> Mensaje div abajo </input><br>
  <input type="submit" name="alta" value="alta"> </input>
  <input type="submit" name="baja" value="baja"> </input>
</form>

<div>
	<?php 
	if (isset($message2))
		echo $message2. " en un div"; 
	?> 
</div>
<?php 
if(isset($_REQUEST['alta'])){ //Se comprueba si el botón se pulsó para cargar los valores a los dos inputs
  //$message = $_REQUEST['inputText'];
  //$message2 = $_REQUEST['inputText2'];
  echo "alta";
}
if(isset($_REQUEST['baja']))
	echo "baja";
?>
</body>
</html>