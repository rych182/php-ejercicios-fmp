<?php




$meses = array('Enero', 'Febrero', 'Marzo', 'Abril',
 'Mayo', 'Junio', 'Julio', 'Agosto', 
 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
 );

//echo count($meses);

/*
for ($i=0; $i < count($meses) ; $i++) {//Count nos devuelve el numero de elementos que tiene nuestro arreglo
	echo $meses[$i] . "<br>";
}
*/
$contador = 0;
while ( $contador <count($meses)) {//count vale 12 por que tiene dentro la variable meses que equivale a un arreglo de 12 datos
	echo $meses[$contador] . "<br>";//contador es la variable que empieza en 0 y va incrementando
	$contador++;
}

?>