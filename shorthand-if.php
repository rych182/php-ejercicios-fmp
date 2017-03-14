<?php

// $edad =18;
// echo isset($edad); Nos dice si de verdad existe o no una variable.
$edad = 18;	//dentro del isset va la variable que queremos comprobar
$edad = (isset($edad)) ? $edad : "El usuario no establecio su edad"; 
//Si la variable edad tiene un valor yo "quiero que guardes ese valor"(los dos puntos) de otra forma  
//nosotros queremos mostrar un mensaje(despues de los dos puntos)
echo "Edad:" . $edad;




/*
if (isset($edad)) {
	$edad = $edad;
}else {
	$edad = 'El usuario no establecio su edad';
}
echo "Edad:" . $edad;
*/



?>