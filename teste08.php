<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        img {
            width: 100px;
            height: 100px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Dia e Noite</h1>
    <?php
       date_default_timezone_set('America/Sao_Paulo');
       $hoje = date("d/m/y");
       $agora = date("H:i");
       $hora = date("H");
       
       if ($hora >= 6 && $hora < 18) {
           echo "<p>Bom dia! Hoje é " . $hoje . " e agora são " . $agora . " horas.</p>";
           echo "<img src='sol.png' alt='Sol'>";
       } else {
           echo "<p>Boa noite! Hoje é " . $hoje . " e agora são " . $agora . " horas.</p>";
           echo "<img src='lua.png' alt='Lua'>";
       }
    ?>
</body>
</html>