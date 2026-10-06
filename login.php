<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <form method="POST">

        Nome:
        <input type="text" name="nome">

        <br><br>

        <input type="submit" value="Entrar">

    </form>

    <?php

    if (isset($_POST["nome"])) {

        $_SESSION["nome"] = $_POST["nome"];

        header("Location: boasvindas.php");

        exit;

    }

    ?>

</body>
</html>