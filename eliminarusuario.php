<?php
include('../conec.php');

$codigoUsuario = $_GET['id'];
//$eliminarUsuario="DELETE FROM usuarios WHERE codigo='$codigoUsuario'";
$eliminarUsuario="CALL sp_eliminarUsuarios('$codigoUsuario')";
$resultado=mysqli_query($conexion,$eliminarUsuario);

header('Location: ../usuario.php');

?>