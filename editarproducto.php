<?php
include('../conec.php');
$codigoproducto=$_POST['id'];
$nombreproducto = $_POST['nombre'];
$precio = $_POST['precio'];
$codigoFabricante = $_POST['codigoFabricante'];

//$editarProducto="UPDATE producto SET nombre='$nombreproducto', precio='$precio',
//codigo_fabricante='$codigoFabricante' WHERE codigo = '$codigoproducto'";
$editarProducto="CALL sp_editarProducto ('$nombreproducto','$precio','$codigoFabricante','$codigoproducto')";
$resultado=mysqli_query($conexion,$editarProducto);

header('Location: ../productos.php');

?>