<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril',
 'Mayo', 'Junio', 'Julio', 'Agosto', 
 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
	<!--
		<li><?php //echo $meses[0]; ?></li>
		<li><?php //echo $meses[1]; ?></li>
		<li><?php //echo $meses[2]; ?></li>
		<li><?php //echo $meses[3]; ?></li>
		<li><?php //echo $meses[4]; ?></li>
		<li><?php //echo $meses[5]; ?></li>
		<li><?php //echo $meses[6]; ?></li>
		<li><?php //echo $meses[7]; ?></li>
		<li><?php //echo $meses[8]; ?></li>
		<li><?php //echo $meses[9]; ?></li>
		<li><?php //echo $meses[10]; ?></li>
		<li><?php //echo $meses[11]; ?></li>
		-->
		<?php
		foreach ($meses as $mes) { //Por cada mes me imprimes algo
			echo '<li>'.$mes.'</li>';   //se ejecuta esta linea de codigo
			// echo $meses[0]; por cada mes que encuentra te lo imprime el numero de casillas que tengas en tu array
		}
		?>
	</ul>

</body>
</html>
