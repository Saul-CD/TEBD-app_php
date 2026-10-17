<!DOCTYPE html>
<html>

<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php

    //print_r($_POST);
    
    ?>
    <section id="login-form">
        <h2>Login</h2>
        <form action="login.php" method="POST">

            <input type="text" id="username" name="username" placeholder="usuario"><br><br>

            <input type="password" id="password" name="password" placeholder="password"><br><br>
            <section id="login-error">
                <?php
                if (isset($_GET['mensaje'])) {
                    if ($_GET['mensaje'] == 2) {
                        echo "Usuario/password incorretos!!<br>";
                    }
                }
                ?>
            </section>
            <br><br>

            <input type="submit" name="submit" value="Ingresar">
        </form>
    </section>

</body>

</html>