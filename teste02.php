<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruituras de Controle</title>
</head>
<body>
    <h1>if / elseif / else </h1>
    O Valor é 
    <?php
        $valor = 1;

        if ($valor == 1) {
            echo "um";
        } elseif ($valor == 2) {
            echo "dois";
        } elseif ($valor == 3) {
            echo "três";
        } else {
            echo "outro valor";
        }
    ?>

</body>
</html>