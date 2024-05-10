<h1>Que son los condicionales</h1>
<p>
    Las condicionales nos ayudan a elegir cual bloque de codigo se debe ejecutar.
    Existen diferentes condicionales, Como lo son
    <ol>
        if - else
        swich - case
        match - (Disponible en php 8)
    </ol>
</p>

<?php 

#Ejemplo if - else

$asientos_disponibles = 4;

if ($asientos_disponibles  > 0) {
    echo "puedes comprar aun asientos";
}elseif($asientos_disponibles == 1){
    echo "Solo queda un asiento";
}
else{
    echo "lo sentimos no hay cupos";
}

echo "<br>";
#Ejemplo switch

$color = "black";

switch ($color) {
    case 'red':
        echo "soy color rojo"; 
        break;
    case "blue":
        echo "soy color azul";
        break;
    default:
        echo "no soy alguno de los colores de la lista";
        break;
}

echo "<br>";
#Ejemplo match

$queColorEliges = match ($color) {
 "red"    => "Elegi rojo",
 "blue"   => "Elegi azul",
 default => "no soy alguno de los colores seleccionados",
};
echo $queColorEliges;

 ?>