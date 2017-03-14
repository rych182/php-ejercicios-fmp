<?php

$mes = 'Diciembre';

switch ($mes) { //Dentro de los parentesis siempre va una variabloe
	case 'Diciembre': //En caso de que lo encuentre me ejecuta mis instrucciones
		echo "Feliz navidad";
		break; //Hace que si encuentra lo que esta buscando, pare de buscar.

	case 'Enero':
		echo "Feliz año nuevo";
		break;
		default: //Se usa cuando no se encuentra lo que se busca
		echo "En este mes no se sabe que se celebra";
		break;
}
/*
if ($mes == 'Diciembre') {
	echo "Feliz navidad";
} elseif ($mes == 'Enero'){
	echo "Feliz Hannuka";
} else {
	echo "En este mes no se sabe que se celebra";
}
*/
?>