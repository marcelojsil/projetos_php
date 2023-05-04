<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$nasc = $_POST["nasc"];

?>

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



<div class="resul">
        <?php echo "Olá $nome, seu CPF é $cpf e você nasceu em $nasc!"?>
</div>

</body>
</html>
