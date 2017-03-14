<?php

/* Operadores ARITMETICOS:
+ Suma
- Resta
* Multiplicacion
/ Division
% Modulo(las unidades que sobran en una division, ejemplo el 6 cabe 1 vez en 10 y sobran 4, imprimiria 4)
*/
//$numero = 10;
//$numero2 = 5;
//$resultado = $numero + $numero2;
//echo $resultado;

/*Operadores de ASIGNACION:

=
+=
-=
*=
/=

*/
//$numero = 10;
//$numero2= 5 ;
//$numero3= 3 ;
//$numero = $numero + 7;
//$numero += 7; //Suma la variable mas 7 y lo imprime
//echo $numero + $numero3; // Seria 17 +3 por que ya sumo 10 + 7 y ahora + 3 al final y el valor de 17 se queda almacenado



/*Operadores de COMPARACION:
= es para asignar valores
== Significa que es igual
=== Significa "identico"
!=, <> DIFERENTE
!==
>
<
>=
*/

//$numero = "10";
//if (10 === $numero) {
//	echo "Somos iguales";
//}else {
//		echo "Somos diferentes";
//	}



//$numero = 10;
//$variable = "true";
//if ($variable === true) {
//	echo "Es identico";
//}else {
//	echo "Es diferente";
//}

/* Operadores de INCREMENTO / DECREMENTO

++$x
$x++
--$x
$x--

*/

//$numero = 10;
//$numero++; se le suma 1
// echo ++$numero; //funciona también si pones ++ al inicio  
//echo --$numero;

//echo $numero--;//primero te imprime la variable con su valor real y después lo decrementa
//echo "<br>";
//echo $numero; //Por esto lo imprimimos 2 veces, pero esto no sirve de mucho



/* Operadores de CADENAS:
.
.=
*/

$texto1 = "Hola como estas ";
$texto2 = "Fulano de tal";
$texto3 = $texto1 . $texto2;
echo $texto3;
?>