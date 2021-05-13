
<!DOCTYPE html>
<html lang="en">
<!-- tempo -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima.com</title>
</head>
<body>
    <h1>Insira o nome da cidade que deseja:</h1>
    <form action="projeto2_index.php" method="GET">
        <input type="text" name="campo_cidade"> <br />
        <input type="submit">
    </form>
    <br> <br>
    <a href="projeto2_index.php?campo_cidade=foz+do+iguacu">
        <button> Foz do Iguaçu</button>
    </a>
    <br> <br>
    <a href="projeto2_index.php?campo_cidade=araquari">
        <button> Araquari</button>
    </a>
</body>
</html>