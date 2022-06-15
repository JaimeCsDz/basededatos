<?php
include('../conec.php');
$codigousuario=$_POST['id'];
$nombreUser = $_POST['nombre'];
$apellidoPaterno = $_POST['apellido_paterno'];
$apellidoMaterno = $_POST['apellido_materno'];
$telefono = $_POST['telefono'];
$correoElec = $_POST['correo'];
$nomUsuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//$editarUsuario="UPDATE usuarios SET nombre='$nombreUser', apellido_paterno='$apellidoPaterno',
//apellido_materno='$apellidoMaterno',telefono='$telefono', correo='$correoElec',
//usuario='$nomUsuario',contrasena='$contrasena' WHERE codigo = '$codigousuario'";
$editarUsuario="CALL sp_editarUsuarios('$nombreUser','$apellidoPaterno','$apellidoMaterno','$telefono','$correoElec','$nomUsuario','$contrasena','$codigousuario')";
$resultado=mysqli_query($conexion, $editarUsuario);

header('Location: ../usuario.php');

?>