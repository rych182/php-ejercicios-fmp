<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril',
 'Mayo', 'Junio', 'Julio', 'Agosto', 
 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
 );

//sort($meses); recibe un parametro que es el arreglo que queremos ordenar de manera alfabetica o ascendente y descendente
//rsort($meses); te lo ordena de manera inversa
$numeros = array(1,22,33,50,100,9,27);
rsort($numeros);

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
		<?php
		foreach ($numeros as $numero) { //Por cada mes me imprimes algo
			echo '<li>'.$numero.'</li>';   //se ejecuta esta linea de codigo
			// echo $meses[0]; por cada mes que encuentra te lo imprime el numero de casillas que tengas en tu array
		}
		?>
	</ul>

</body>
</html>
