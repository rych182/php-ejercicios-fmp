<?php

//foreach sirve para recorrer todos nuestros arreglos para TRAER LOS VALORES
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril',
 'Mayo', 'Junio', 'Julio', 'Agosto', 
 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
 );



//Esto es un arreglo asociativo
$Ricardo = array('Telefono' => 1234567890, 'Pais' => 'Mexico', 'Sexo' => 'Masculino' ,'Edad' => 29);

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Ciclo con foreach</h1>
	<ul>
		
			<?php 
				//foreach ($meses as $mes) {
				//	echo '<li>' .$mes. '</li>'; Esto es un arreglo indexado
				//}
			foreach ($Ricardo as $datos => $valor) {//a la segunda variable la puedes llamar como tu quieras y solo representa cada espacio de tu variable.
				echo '<li>'. $datos. ":" .$valor. '</li>';
			}
			?>
		
	</ul>
</body>
</html>