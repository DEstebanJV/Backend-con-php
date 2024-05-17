<h1>Que es el pensamiento logico</h1>
<b>Herramientas para entrenar tu pensamiento logico</b>
<p>
    - plataformas de retos online
    - diagramas de flujo
    - Escribir el paso a paso de varias formas
    - resolver ejercicios matematicos
</p>

<B>Ejercicio</B>
<p>El probema: </p>
<p>Calcular la suma de tres numeros aleatorios y mostrar el resultado</p>

<p>Pasos para solventar un problema: <br>
    - Leer nuevamente el problema <br>
    - Identificar las entradas (en este caso los tres numeros) <br>
    - Identificar las salidas (en este caso el resultado) <br>
    - Identificar las operaciones (en este caso la suma) <br>
    - Identificar las restricciones (en este caso que los numeros sean aleatorios) <br>
    - Definir el proceso 
</p>

<B>Graficando el proceso</B>
<p> entradas: 3 + 1 + 4</p>
<p>El proceso: 3 + 1 + 4 = 8 </p>
<p>Salida: 8 </p>

<p>Llevandolo a php: </p>
<?php

$numeroAleatorio1 = rand(1, 9); 
$numeroAleatorio2 = rand(1, 9);
$numeroAleatorio3 = rand(1, 9);

$suma = $numeroAleatorio1 + $numeroAleatorio2 + $numeroAleatorio3;

echo "El resultado de sumar $numeroAleatorio1 + $numeroAleatorio2 + $numeroAleatorio3 es: " . $suma;

?>