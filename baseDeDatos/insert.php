<?php 



function create_user(string $cc, string $nombre, string $apellido, string $correo, $fecha ){
    $sql = "INSERT INTO tbl_usuario (cc, nombre, apellido, correo, fecha_nac)
    VALUES ('$cc', '$nombre', '$apellido', '$correo', '$fecha') ";
require_once 'conexion.php';
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

}

create_user(rand(1,1000), "Juan", "Pérez", "juan@example.com", "1990-05-09");





?>