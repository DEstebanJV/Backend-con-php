<?php

require_once "conexion.php";

$sql = "SELECT * FROM tbl_usuario ";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "cc: " . $row["cc"].
        " Nombre: " . $row["nombre"]. " " . $row["apellido"].
        " Fecha de nacimiento " . $row["fecha_nac"] ;
    }
  } else {
    echo "0 results";
  }