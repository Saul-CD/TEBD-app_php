<?php

include_once("conn.php");
include_once("funciones.php");

$conexion = conecta();

//print_r($_POST);die();exit();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valido = valida_usuario($conexion, $username, $password);

    if ($valido > 0) {
        header("Location: menu.php");
    } elseif ($rs == 0) {
        $men = 2;
        header("Location: acceso.php?mensaje=" . $men);
    }
}
?>