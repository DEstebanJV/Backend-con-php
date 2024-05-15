<?php

#Genera la funcion para retornar la hora actual

date_default_timezone_set('America/Bogota');

$hora = fn () => date("H:i:s");    

echo "Hola podrias decirme la hora actual?";
echo "Claro la hora actual es " . $hora() ;
