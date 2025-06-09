<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com PHP</title>
</head>
<body>
    <h1>Dia e Noite</h1>
    <?php
       date_default_timezone_set('America/Sao_Paulo');
       $hoje = date ("d/m/y");
       $agora = date("H:i");
       $hora = date("H");

       if ($hora > 6 or $hora < 18) {
           echo "Bom dia! Hoje é " . $hoje . " e agora são " . $agora;
             echo "img src='lua.png'";
       } Else {
              echo "<img src='sol.png'>";
       }

        echo "hoje é dia " . $hoje . " e agora são " . $agora. " horas.";
    
    ?>
</body>
</html>