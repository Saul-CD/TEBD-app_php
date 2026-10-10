<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulario</title>

    <link rel="stylesheet" href="acceso.css">
</head>

<body>
    <?php

    ?>
    <form name="form1" method="post" action="login.php">
        Usuario:
        <input type="text" name="usu" size="20" />

        Contraseña:
        <input type="password" name="pass" size="20" />
        <section id="login-error">
            <?php
            if (isset($mensaje)) {
                echo $mensaje;
            }
            ?>
        </section>
        
        <input type="submit" name="boton" value="Enviar">
    </form>
</body>

</html>