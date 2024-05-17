<h1>Creacion del JUEGO</h1>

<p>Desarrollar una aplicacion que muestra una lista de palabras que estan en desorden,
    el usuario debe ordenar las letras para encontrar la palabra correcta e ingresarla
    despues de enviar sus resultados el usuario podra ver si acerto o fallo y cual era la palabra correcta
</p>

<?php 
$palabrasCorrectas = ["sol", "luna", "cielo"];
$palabrasDesordenadas = [];

foreach ($palabrasCorrectas as $palabra) {
    $palabraDesordenada = str_shuffle($palabra); // Desordenar la palabra
    array_push($palabrasDesordenadas, $palabraDesordenada); // Agregar la palabra desordenada al arreglo
}
?>

<h1>Adivina la palabra</h1>
<form action="juegoOrdenamiento.php" method="post">
    <label>Primera palabra <?= $palabrasDesordenadas[0] ?></label>
    <input type="text" name="palabra0">
    <label>Segunda palabra <?= $palabrasDesordenadas[1] ?></label>
    <input type="text" name="palabra1">
    <label>Tercera palabra <?= $palabrasDesordenadas[2] ?></label>
    <input type="text" name="palabra2">
    <button>Enviar</button>
</form>

<?php

function validadorPalabra($palabra, $palabraCorrecta) {
    return $palabra === $palabraCorrecta;
}

// Ejemplo de uso
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultados = [];
    for ($i = 0; $i < count($palabrasCorrectas); $i++) {
        $inputPalabra = $_POST["palabra$i"];
        $esCorrecta = validadorPalabra($inputPalabra, $palabrasCorrectas[$i]);
        $resultados[] = $esCorrecta ? "Correcta" : "Incorrecta";
    }

    foreach ($resultados as $index => $resultado) {
        echo "Palabra " . ($index + 1) . ": " . $resultado . "<br>";
    }
}

?>

