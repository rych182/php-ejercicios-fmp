<?php

$persona = array('nombre' => 'Ricardo' , 'apellido' => 'Garrido' , 'pais' => 'Mexico' , 'sexo' => 'hombre' , 'edad' => '28', 'telefono' => '1234567890');
echo $persona['edad']. '<br>';
echo $persona['nombre']. '<br>';
echo $persona['apellido']. '<br>';
echo $persona['telefono']. '<br>'; //primer valor de telefono
echo $persona['pais']. '<br>';

$persona['telefono'] = '10203040'; //segundo valor de telefono
echo 'El telefono de Ricardo es: '.$persona['telefono'];
?>