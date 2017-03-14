<?php

/*
== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación
*/
/*
Operadores lógicos:
&& significa "y" que evalua que se cumplan una de las dos o las 2 checar cual es.
||, or - Evalua que se cumpla al menos una condicion
xor - Evalua que se cumpla una y solo una condicion
*/

$edad = 17;
$nombre = 'Alfredo';
if ($edad > 18 or $nombre == 'Ricardo') {
	echo '<h1>Bienvenido!!</h1>';
}

if ($edad <18 or $nombre != 'Ricardo' ) {
	echo '<h1>Eres mayor de edad y/o no te llama Ricardo .</h1>';
}





?>