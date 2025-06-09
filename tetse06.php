<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruituras de Controle</title>
</head>
<body>
    <h1>Foreach</h1>
    Números pares até dez:
    <?php
        $n = array(2, 4, 6, 8, 10);
        foreach ($n as $i) {
            echo $valor . ", ";
        }
    ?>
</body>
</html>