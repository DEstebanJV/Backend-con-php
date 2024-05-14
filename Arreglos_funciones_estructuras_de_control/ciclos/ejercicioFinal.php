<h1>RETO</h1>
<p>De cuantas dormas puedo ir de la tienda 1 a la tienda n sin retroceder en el camino, 
es decir, yendo siempre de izquierda a derecha 
</p>

<form action="ejercicioFinal.php" method="post">
    <label for="numero">
        Numero de tiendas:
    </label>
    <input type="number" name="numTiendas">
    <button>enviar</button>
</form>

<?php

$numeroDeTienda = $_POST['numTiendas'];
$valorAnterior = 0;
$actual = 1;

for ($i = 2; $i <= $numeroDeTienda; $i++){
    $temporal = $actual;
    $actual += $valorAnterior;
    $valorAnterior = $temporal;  
}

echo "Existe $actual formas de llegar a la tienda";
