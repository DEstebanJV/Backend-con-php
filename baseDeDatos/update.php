<?php 

require_once 'conexion.php';

function update_user(string $cc, string $nombre, string $apellido, string $correo, string $fecha) {
    global $mysqli; 

    $sql = "SELECT * FROM tbl_usuario 
    WHERE cc = '$cc'"; 
    $resultado = $mysqli->query($sql);
    if ($resultado->num_rows > 0) {
        $sql = "UPDATE tbl_usuario 
        SET 
        nombre = '$nombre', 
        apellido = '$apellido', 
        correo = '$correo', 
        fecha_nac = '$fecha' 
          WHERE cc = '$cc'";
        
          if ($mysqli->query($sql) === TRUE) {
              echo "El usuario se actualizó correctamente";
          } else {
              echo "No se pudo actualizar el usuario";
          }
    } else {
      echo "El usuario no existe";
    }
}
update_user("150", "Juan", "Perez", "juan@gmail.com", "2020-01-01");

?> 