<h1>Bucles</h1>
<p>Un bucle es una estructura de control que nos ayuda a repetir un bloque de codigo las veces que lo necesitamos</p>
<p>Tambien es conocido como contador o iteracion</p>

<p>El bucle while al igual que el if recibe una condicion booleana mientras que 
    esa condicion sea true el ciclo se va a arepetir dentro del while nosotros
    no podemos cambiar el valor de nuestra variable para detener el ciclo</p>

<?php

/* Sintaxis y ejemplo */

$contador = 0;

while ($contador <= 10) {
   echo $contador . "<br>";

   $contador++;

}


?>