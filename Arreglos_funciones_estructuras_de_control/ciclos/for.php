<h1>Ciclo For</h1>
<p>Este ciclo nos permite definir una serie de condiciones desde donde queremos comenzar hasta donde queremos terminar</p>
<p>Nosotros le decimos explicitamente cuantas iteraciones hara, es por eso que decimos que este es un ciclo definido</p>

<?php

// parametro inicial, condicion, accion (incremento, decremento)
for ($i=0; $i < 10; $i++) { 
    echo $i;

}

/* Contadores por separados */

for ($i=0 , $j =0; $i < 10 , $j < 20; $i++ , $j += 2) { 
   echo "El valor de i es :" . $i . "<br>" ;
   echo "El valor de j es :" . $j . "<br>" ;
}

?>