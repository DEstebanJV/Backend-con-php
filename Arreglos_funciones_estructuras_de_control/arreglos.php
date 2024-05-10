<h1> Definicion:</h1>
<p> Una variable que puede guardar multiples valores</p>
<h3>Ejemplo</h3>

<?php 
    $edades = [ 1, 10, 18, 34 ];

    echo "una de las edades es: " . $edades[1];

?>

<h2>Arreglos asociativos:</h2>
<p>una variable que puede guardar multiples valores y puedes accederr a ellos mediante una palabra </p>

<?php 

    $edades = [
        "Juan" => 20,
        "pedro" => 10,
        "Alejandro" => 15,
    ];

    echo "la edad de Juan es " . $edades['Juan'] ;

?>

