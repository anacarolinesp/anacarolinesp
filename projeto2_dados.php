<!DOCTYPE html>
<html lang="en"> 

<!-- dados -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima.com</title>
</head>

<body>

<h2><?= $nome ?> </h2>
    <ul>
        <li>Temperatura: <?= $temperatura ?></li>
        <li>Sensação: <?= $sensacao ?></li>
        <li>Umidade: <?= $umidade ?></li>
        <li>Velocidade do vento: <?= $velocidade ?></li>
    </ul>

</body>

</html>