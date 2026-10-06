<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>

<body>

    <form method="POST">

        Nome:
        <input type="text" name="nome">

        <br><br>

        Cidade:
        <input type="text" name="cidade">

        <br><br>

        <input type="submit" value="Enviar">

    </form>

    <?php

    if (isset($_POST["nome"]) && isset($_POST["cidade"])) {

        $nome = $_POST["nome"];
        $cidade = $_POST["cidade"];

        echo "Nome: " . $nome . "<br>";
        echo "Cidade: " . $cidade . "<br>";

        if ($cidade == "Curitiba") {
            echo "Curitibano!";
        }

    }

    ?>

</body>
</html>

