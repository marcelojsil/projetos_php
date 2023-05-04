<?php #require_once('form.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_padrao/style.css">
    <title>Form</title>
</head>
<body>
    <form method="post" action="form.php">
        Nome: <input type="text" name="nome" />
        Nascimento: <input type="date" name="nasc" />
        CPF: <input type="number" name="cpf" />
    
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>