<?php
//datos de la db
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda';
//conexion para la db
$conexion = mysqli_connect($hostname, $username, $password,$database);
//validador de conexion a la bd
if(mysqli_connect_error()){
    echo 'conexión fallida';
}
else{
    echo'Conexión exitosa';
}
?>