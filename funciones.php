<?php

function valida_usuario($conexion, $username, $password)
{

    $valido = 0;

    $sql_call = "CALL sp_validar_usuario('" . $username . "', '" . $password . "', @resu)";
    if (mysqli_query($conexion, $sql_call)) {
        $sql_select = "SELECT @resu AS valido";
        $resultado_query = mysqli_query($conexion, $sql_select);
        if ($fila = mysqli_fetch_assoc($resultado_query)) {
            $valido = $fila['valido'];
        }
        mysqli_free_result($resultado_query);
    } else {
        echo "Error al ejecutar el procedimiento: " . mysqli_error($conexion);
    }
    return $valido;
}

?>