<?php
function conecta()
{
    $conexion = mysqli_connect("localhost", "", ""); # Rellenar usuario y contraseña para la conexion
    return $conexion;
}
?>