<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/niveis.css">
    <title>Área dos Administradores</title>
</head>
<body>

<!-- ACESSO AS INFORMAÇÕES DO ITEM SOLICITADO -->
<!-- NO CASO OS DADOS DO USUÁRIO DE LOGIN -->
<!-- USANDO METODO GET -->
<?php

$nome = $_GET["nome"];
$email = $_GET["email"];
$cpf = $_GET["cpf"];
$nivel = $_GET["nivel"];

if($nivel == 'admin') {

    $nivel_user = "Administradores";

}else {
    $nivel_user =  "Algo deu errado!";
}

?>

<!-- VISUALIZO AS INFORMAÇÕES BUSCADAS ACIMA -->
<header>
    <p>Olá <?php echo $nome ?>, seja bem vindo!</p>
</header>

<section>
    <nav class="lateral">
        <ul> Menu Principal
            <li>Menu 1</li>
            <li>Menu 2</li>
            <li>Menu 3</li>
            <li>Menu 4</li>
            <li>Menu 5</li>
        </ul>
    </nav>
    <nav class="main">
        <p>Este é o ambiente de trabalho</p>
        <p>de quem tem o nível de</p>
        <p><?php echo $nivel_user ?></p>
    </nav>
</section>

<footer>
    <p>Página de demonstração de Login para Portifólio em PHP!
    Dados meramente fictícios!</p>
</footer>

</body>
</html>