<?php

$amigos = array(
	array('Fulano', 20), //cada array se separa con coma menos el ultimo
	array('Sutano', 21),
	array('Perengano', 22)//aquí no lleva coma.
	);

echo 'Los nombres de mis amigos son: '. '<br>';
echo $amigos[0][0]. '<br>';
echo $amigos[1][0]. '<br>';
echo $amigos[2][0]. '<br>';
?>