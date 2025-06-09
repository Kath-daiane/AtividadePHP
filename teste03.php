<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruituras de Controle</title>
</head>
<body>
    <h1> switch / case </h1>
    O Valor é
    <?php
        $valor = 1;

        switch ($valor) {
            case 1:
                echo "um";
                break;
            case 2:
                echo "dois";
                break;
            case 3:
                echo "três";
                break;
            default:
                echo "outro valor";
        }
    ?>

</body>
</html>