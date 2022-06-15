<?php
include('conec.php');
if(isset($_POST['enviar'])){
    $nomProducto=$_POST['nomProducto'];
    $preProducto=$_POST['preProducto'];
    $codProducto=$_POST['codProducto'];
    //$insertarProducto="INSERT INTO producto (nombre,precio,codigo_fabricante) VALUE ('$nomProducto', '$preProducto','$codProducto')";
    $insertarProducto="CALL sp_insertarProducto ('$nomProducto','$preProducto','$codProducto')";
    $resultado=mysqli_query($conexion, $insertarProducto);

    if(!$resultado){
        echo'<script>alert("Los datos no se insertaron")</script>';
    }
    else{
        echo'<script>alert("Los datos se insertaron")</script>';
    }
}
header('Location: productos.php');