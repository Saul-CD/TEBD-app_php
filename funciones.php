<?php

function valida_usuario($conexion, $username, $password)
{
    // Codigo anterior:
    // $qry = "
    // SELECT id_usu FROM  
    // prueba20271.usuario 
    // WHERE usuario='" . $username . "' AND usu_pass='" . md5($password) . "'; 
    // ";
    // $rs = mysqli_query($conexion, $qry);

    // Procedimiento Almacenado:
    $hash = md5($password);
    $stmt = $conexion->prepare("CALL prueba20271.ValidarUsuario(?, ?)"); // Se usa un "Prepared Statement" para mayor seguridad
    $stmt->bind_param("ss", $username, $hash);
    $stmt->execute();
    $rs = $stmt->get_result();

    if ($rs) { // entra cuando no hay error de sintaxis en la consulta
        if (mysqli_num_rows($rs) > 0) { // entra si encuentra al menos un registro
            #echo "OK<br>";
            $fila = mysqli_fetch_assoc($rs);
            #echo "id_usu=".$fila['id_usu']."<br>";
            //header("Location: menu.php");
            $valor = $fila['id_usu'];
        } else { // entra si NO encuentra registros
            $mensaje = "Usuario/password incorretos!!<br>";
            //header("Location: acceso.php");
            $valor = 0;
        }
    } else { // entra cuando existe error de sintaxis en la consulta
        //echo "ERROR<br>";
        //echo mysqli_error($conexion);
    }

    return $valor;
}

?>