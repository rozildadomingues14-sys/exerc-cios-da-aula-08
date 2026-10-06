<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>

<body>

    <?php

    echo "Bem-vindo, " . $_SESSION["nome"] . "!";

    ?>

</body>
</html>