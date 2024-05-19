<?php 
require_once 'conexion.php';

function update_user(string $cc, string $nombre, string $apellido, string $correo, string $fecha) {
   global $mysqli; // Asegúrate de que $mysqli esté en el ámbito global

   // verificar el cc del usuario
   $sql = "SELECT * FROM tbl_usuario WHERE cc = '$cc'";
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
        echo "Se ha actualizado el registro correctamente";
        } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
   }else {
   echo "El CC no existe";
}
 
}
update_user("1", "Juan", "Perez", "juan@example.com", "1990-05-09");

?>
