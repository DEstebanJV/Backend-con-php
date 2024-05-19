<?php 
require_once 'conexion.php';

function delete_user(string $cc) {
    global $mysqli;

    $sql = "SELECT * FROM tbl_usuario 
    WHERE cc = '$cc'"; 
    $resultado = $mysqli->query($sql);
    if ($resultado->num_rows > 0) {
        $sql = "DELETE FROM tbl_usuario 
        WHERE cc = '$cc'";
        
        if ($mysqli->query($sql) === TRUE) {
            echo "El usuario se eliminó correctamente";
        } else {
            echo "No se pudo eliminar el usuario";
        }
    } else {
        echo "El usuario no existe";
    }
}

delete_user("150");