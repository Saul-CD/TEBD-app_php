<?php

include_once("conn.php");
include_once("funciones.php");

$conexion = conecta();

$id = valida_usuario($conexion, $_POST['usu'], $_POST['pass']);

if ($id > 0) {
    // header("Location: menu.php");
    echo $id;
} elseif ($id == 0) {
    header("Location: acceso.php");

}

?>