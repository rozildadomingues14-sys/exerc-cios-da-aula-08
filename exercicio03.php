<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>

<body>

    <form method="POST">

        Primeiro número:
        <input type="number" name="numero1">

        <br><br>

        Segundo número:
        <input type="number" name="numero2">

        <br><br>

        <input type="submit" value="Somar">

    </form>

    <?php

    if (isset($_POST["numero1"]) && isset($_POST["numero2"])) {

        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $soma = $numero1 + $numero2;

        print "Resultado da soma: " . $soma;

        echo "<br><br>";

        var_dump($numero1);

        echo "<br>";

        var_dump($numero2);

        echo "<br>";

        var_dump($soma);

    }

    ?>

</body>
</html>