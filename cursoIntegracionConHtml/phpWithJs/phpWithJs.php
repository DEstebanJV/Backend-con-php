<?php
$usuarios = [
    [
        'id' => 1,
        'nombre' => "Juan",
    ],
    [
        'id' => 2,
        'nombre' => "Lucas",
    ],
    [
        'id' => 3,
        'nombre' => "Pedro",
    ],
];


#Variables simples
$edad = 12;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de php a Javascript</title>
</head>

<body>
   
    <h3>Inspecciona la pagina y mira la consola 👀</h3>
    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        let edad = <?=  $edad ?>;
    </script>
     <script src="phpwithjs.js"></script>
</body>

</html>