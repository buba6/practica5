
<html>
<head>
</head>
<body>
<?php

if ( !is_numeric($_POST["text1"]) and !is_numeric($_POST['text2'])) {
echo "error";

}
else 
if( !is_numeric($_POST["text1"])){
	
	echo "error";
}
else 
if( !is_numeric($_POST["text2"])){

	echo "error";
}
else
if (!isset($_POST['radio1'])) {
		
	echo"error selecciona una opcion";
}

else {
if ($_POST['radio1']=="sumar")
	$resultado=$_POST['text1']+$_POST['text2'];

	if ($_POST['radio1']=="restar")
		$resultado=$_POST['text1']-$_POST['text2'];

		if ($_POST['radio1']=="multiplicar")
			$resultado=$_POST['text1']*$_POST['text2'];

			if ($_POST['radio1']=="dividir")
				$resultado=$_POST['text1']/$_POST['text2'];

				echo "El resultado es: $resultado";
}
				
				?>
				
				<?php 
echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
?>

		
</body>
</html>