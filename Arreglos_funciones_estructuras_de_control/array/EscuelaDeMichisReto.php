<h1>Reto #1 </h1>
<p>Escuela de michis</p>
<p>
realizar un arreglo que contenga almenos 3 michis, Estos 3 michis cada uno debe contener nombre,
ocupacion, un color, y comidas. Las comidas se deben poder subdividir en comidas favoritas,
y comidas que no les gustan

</p>

<?php 

$escuelaDeMichis = [
    "Gato1" => [
        "nombre" => "mia",
        "ocupacion" => "Director",
        "color" => "manchado",
        "comidas" => [
            "ComidaFavorita" => [
                "atun", "salmon", "Pollo"
            ],
            "noGustan" => [
                "croquetas", "croquetas humedas"
            ]
        ] 
     ],
    "Gato2" => [
        "nombre" => "Juan",
        "ocupacion" => "Alumno",
        "color" => "Gris",
        "comidas" => [
            "ComidaFavorita" => [
                "atun", "salmon", "Pollo"
            ],
            "noGustan" => [
                "croquetas", "croquetas humedas"
            ]
        ]
    ],
    "Gato3" => [
        "nombre" => "Rocky",
        "ocupacion" => "Docente",
        "color" => "Blanco",
        "comidas" => [
            "ComidaFavorita" => [
                "atun", "salmon", "Pollo"
            ],
            "noGustan" => [
                "croquetas", "croquetas humedas"
            ]
        ] 
    ],
];

foreach ($escuelaDeMichis as $key => $gato) {
    echo "El primer gato $key contiene la siguiente información: \n";
    echo "Nombre: " . $gato['nombre'] . "\n";
    echo "Ocupación: " . $gato['ocupacion'] . "\n";
    echo "Color: " . $gato['color'] . "\n";
    echo "Comida Favorita: " . implode(", ", $gato['comidas']['ComidaFavorita']) . "\n";
    echo "Comida que no le gusta: " . implode(", ", $gato['comidas']['noGustan']) . "\n";
    echo "<br>";
}


?>