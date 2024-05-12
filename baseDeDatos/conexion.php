<?php 


$mysqli = new mysqli("localhost", "root", "", "estudiantes_sistemas");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



