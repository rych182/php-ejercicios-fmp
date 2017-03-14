<?php
//el do while al menos hace que se imprima una vez el ciclo, casi nunca se usa esta madre.
$i=1;

/*
do {
	echo  $i ."<br>";
	$i++; //el contador va en las llaves del do para que no sea infinito el ciclo
} while ( $i <= 10);
*/

/*
do {
	echo  $i ."<br>";
	$i++; //el contador va en las llaves del do para que no sea infinito el ciclo
} while (false);
*/

do {
	echo  $i ."<br>";
	$i++; //el contador va en las llaves del do para que no sea infinito el ciclo
} while ($i <= 20);

?>